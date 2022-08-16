<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	$id = $db->query('SELECT count(*) FROM office')->fetch();
	$off_id = 'OFF' ."-". str_pad($id['count(*)'] + 1, 3, 0, STR_PAD_LEFT) ."-". date("y");
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO office (name, code) VALUES (:name, :code)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':name' => $_POST['name'] , ':code' => $off_id)) ){
			$output['message'] = 'Office added successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot add office';
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