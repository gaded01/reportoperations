<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	$id = $db->query('SELECT max(id) FROM fileuploads')->fetch();
	$id_no = 'OPCR' ."-". str_pad($id['max(id)'] + 1, 3, 0, STR_PAD_LEFT) ."-". date("y");
	try{
		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('pdf','docx','xlsx');

		if(in_array($fileActualExt, $allowed))
		{
			if( $fileError === 0) 
			{
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = '../assets/opcr/'.$fileNameNew;

				if(move_uploaded_file($fileTmpName, $fileDestination))
				{
					//make use of prepared statement to prevent sql injection
					$stmt = $db->prepare("INSERT INTO fileuploads (id_no, from_date, semester, office_id, type_id, filename, filepath, year, role_id) VALUES (:id_no, :from_date, :semester, :office_id, :type_id, :filename, :filepath, :year, :role_id)");
					//if-else statement in executing our prepared statement
					if ($stmt->execute(array(':id_no' => $id_no, ':from_date' => $_POST['from_date'] , ':semester' => $_POST['semester'] , ':office_id' => $_POST['office_id'] , ':type_id' => $_POST['type_id'] , ':filename' => $_POST['filename'] , ':filepath' => $fileNameNew, ':year' => $_POST['year'], ':role_id' => $_POST['role_id'])) ){
						$output['message'] = 'IPDO added successfully';
						header("Location: ../add-opcr-form.php");
					}
					else{
						$output['error'] = true;
						$output['message'] = 'Something went wrong. Cannot add member';
					}
				}
				header("Location: ../add-opcr-form.php");
			}else {
				echo "There was an error uploading your file!";
			}

		}

		header("Location: ../add-opcr-form.php");
	}
	catch(PDOException $e){
		$output['error'] = true;
 		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>