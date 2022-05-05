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

		$allowed = array('pdf','jpg','jpeg','png');

		if(in_array($fileActualExt, $allowed))
		{
			if( $fileError === 0) 
			{
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				$fileDestination = '../assets/events/'.$fileNameNew;

				if(move_uploaded_file($fileTmpName, $fileDestination))
				{
					//make use of prepared statement to prevent sql injection
					$stmt = $db->prepare("INSERT INTO events (name, description, date, filepath) 
					VALUES (:name, :description, :date, :filepath)");
					//if-else statement in executing our prepared statement
					if ($stmt->execute(array(':name' => $_POST['name'] , 
											':description' => $_POST['description'] , 
											':date' => $_POST['date'] , 
											':filepath' => $fileNameNew)) ){
						$output['message'] = 'Event added successfully';
						header("Location: ../add-event.php");
					}
					else{
						$output['error'] = true;
						$output['message'] = 'Something went wrong. Cannot add Event';
					}
				}
				header("Location: ../add-event.php");
			}else {
				echo "There was an error uploading your file!";
			}

		}

		header("Location: ../add-event.php");
	}
	catch(PDOException $e){
		$output['error'] = true;
 		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>