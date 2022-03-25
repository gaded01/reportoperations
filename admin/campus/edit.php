<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$id = $_POST['id'];
		$code = $_POST['code'];
		$name = $_POST['name'];

		$sql = "UPDATE campus SET code = '$code', name = '$name' WHERE id = '$id'";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$output['message'] = 'Campus updated successfully';
		} 
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot update member';
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