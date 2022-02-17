<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO campus (campus_id, name) VALUES (:campus_id, :name)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':campus_id' => $_POST['campus_id'] , ':name' => $_POST['name'])) ){
			$output['message'] = 'Member added successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot add member';
		} 
		   
	}
	catch(PDOException $e){
		$output['error'] = true;
 		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>