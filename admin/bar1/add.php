<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO department_lines (row_title, uacs_code, pt_q1, pt_q2, pt_q3, pt_q4, pt_total, pa_q1, pa_q2, pa_q3, pa_q4, pa_total, variance, remarks, unique_id, row_count) 
									VALUES (:row_title, :uacs_code, :pt_q1, :pt_q2, :pt_q3, :pt_q4, :pt_total, :pa_q1, :pa_q2, :pa_q3, :pa_q4, :pa_total, :variance, :remarks, :unique_id, :row_count)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':row_count' => $_POST['row_count'],
								':row_title' => $_POST['row_title'] , 
								':uacs_code' => $_POST['r1'] , 
								':pt_q1' => $_POST['r2'] , 
								':pt_q2' => $_POST['r3'],
								':pt_q3' => $_POST['r4'],
								':pt_q4' => $_POST['r5'],
								':pt_total' => $_POST['r6'],
								':pa_q1' => $_POST['r7'],
								':pa_q2' => $_POST['r8'],
								':pa_q3' => $_POST['r9'],
								':pa_q4' => $_POST['r10'],
								':pa_total' => $_POST['r11'],
								':variance' => $_POST['r12'],
								':remarks' => $_POST['r13'],
								':unique_id' => $_POST['unique_id']))){
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