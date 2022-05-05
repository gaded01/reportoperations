<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('pdf');

		if(in_array($fileActualExt, $allowed))
		{
			if( $fileError === 0) 
			{
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = '../assets/department/'.$fileNameNew;

				if(move_uploaded_file($fileTmpName, $fileDestination))
				{
					//make use of prepared statement to prevent sql injection
					$stmt = $db->prepare("INSERT INTO fileuploads (from_date, to_date, department_id, type_id, filename, filepath, year, role_id) VALUES (:from_date, :to_date, :department_id, :type_id, :filename, :filepath, :year, :role_id)");
					//if-else statement in executing our prepared statement
					if ($stmt->execute(array(':from_date' => $_POST['from_date'] , ':to_date' => $_POST['to_date'] , ':department_id' => $_POST['department_id'] , ':type_id' => $_POST['type_id'] , ':filename' => $_POST['filename'] , ':filepath' => $fileNameNew, ':year' => $_POST['year'], ':role_id' => $_POST['role_id'])) ){
						$output['message'] = 'IPDO added successfully';
						header("Location: ../add-bar1-form.php");
					}
					else{
						$output['error'] = true;
						$output['message'] = 'Something went wrong. Cannot add member';
					}
				}
				header("Location: ../add-department-form.php");
			}else {
				echo "There was an error uploading your file!";
			}

		}

		header("Location: ../add-department-form.php");
	}
	catch(PDOException $e){
		$output['error'] = true;
 		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>