<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$sql = "DELETE FROM department WHERE id = '".$_POST['id']."'";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$output['message'] = 'Department deleted successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot delete member';
		} 
	}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();;
	}

	//close connection
	$database->close();

	echo json_encode($output);

?>