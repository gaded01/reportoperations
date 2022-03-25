<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		//make use of prepared statement to prevent sql injection
		$stmt = $db->prepare("INSERT INTO users (id_no, firstname, lastname, middlename, gender, department_id, contact, email, username, password) VALUES (:id_no, :firstname, :lastname, :middlename, :gender, :department, :contact, :email, :username, :password)");
		//if-else statement in executing our prepared statement
		if ($stmt->execute(array(':id_no' => $_POST['id_no'] , ':firstname' => $_POST['firstname'] , ':lastname' => $_POST['lastname'] , ':middlename' => $_POST['middlename'] , ':gender' => $_POST['gender'] , ':department' => $_POST['department'] , ':contact' => $_POST['contact'] , ':email' => $_POST['email'] , ':username' => $_POST['username'] , ':password' => $_POST['password'])) ){
			$output['message'] = 'User added successfully';
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