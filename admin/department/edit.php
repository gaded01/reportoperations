<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$id = $_POST['id'];
		$name = $_POST['name'];
		$code = $_POST['code'];

		$sql = "UPDATE department SET name = '$name', code = '$code' WHERE id = '$id'";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$output['message'] = 'Department updated successfully';
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