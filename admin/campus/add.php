<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	// $id = $db->query('SELECT  id  FROM campus WHERE id = (SELECT MAX(id) FROM campus)')->fetch();
	$id = $db->query('SELECT count(*) FROM campus')->fetch();
	$campus_id = 'CMPS' ." ". str_pad($id['count(*)'] + 1, 3, 0, STR_PAD_LEFT);
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO campus (name, code) VALUES (:name, :code)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':code' => $campus_id , ':name' => $_POST['name'])) ){
			$output['message'] = 'Campus added successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot add campus';
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