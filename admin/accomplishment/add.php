<?php
include_once('../../configs/Database.php');

$database = new Connection();
	$db = $database->open();
	$id = $db->query('SELECT max(id) FROM accomplishment;')->fetch();
	$id_no = 'ACMT' ."-". str_pad($id['max(id)'] + 1, 3, 0, STR_PAD_LEFT) ."-". date("y");
	try{
		$file = $_FILES['file'];

		$fileName = $_FILES['file']['name'];
		$fileTmpName = $_FILES['file']['tmp_name'];
		$fileSize = $_FILES['file']['size'];
		$fileError = $_FILES['file']['error'];
		$fileType = $_FILES['file']['type'];

		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('png','jpg','gif', 'tif', 'eps');

		if(in_array($fileActualExt, $allowed))
		{
			if( $fileError === 0) 
			{
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = '../assets/accomplishment/'.$fileNameNew;

				if(move_uploaded_file($fileTmpName, $fileDestination))
				{   
					//make use of prepared statement to prevent sql injection
					$stmt = $db->prepare("INSERT INTO accomplishment (id_no, filename, office_id, image) VALUES (:id_no, :filename, :office_id, :image)");
					//if-else statement in executing our prepared statement
					if ($stmt->execute(array(':id_no' => $id_no,':office_id' => $_POST['office_id'], ':filename' => $_POST['filename'] , ':image' => $fileNameNew ))){
						$output['message'] = 'IPDO added successfully';
						header("Location: ../add-accomplishment.php");
					}
					else{
						$output['error'] = true;
						$output['message'] = 'Something went wrong. Cannot add member';
					}
				}
				header("Location: ../add-accomplishment.php");
			}else {
				echo "There was an error uploading your file!";
			}

		}

		header("Location: ../add-accomplishment.php");
	}
	catch(PDOException $e){
		$output['error'] = true;
 		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>
?>