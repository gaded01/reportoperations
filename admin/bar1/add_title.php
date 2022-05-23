<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO bar1 (department, agency, quarter, op_unit, unique_id) 
									VALUES (:department, :agency, :quarter, :op_unit, :unique_id)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':department' => $_POST['department'], 
								':agency' => $_POST['agency'],
								':quarter' => $_POST['quarter'] ,
								':op_unit' => $_POST['op_unit'] , 
								':unique_id' => $_POST['unique_id']))){
			$output['message'] = 'Data added successfully';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Something went wrong. Cannot add Data';
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