<?php
	include_once('../../configs/Database.php');

	$output = array('error' => false);

	$database = new Connection();
	$db = $database->open();
	try{
		$id = $_POST['id'];
		$id_no = $_POST['id_no'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$middlename = $_POST['middlename'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$campus_id = $_POST['campus_id'];
		$role_id = $_POST['role_id'];

		$sql = "UPDATE users SET id_no = '$id_no', 
		firstname = '$firstname', 
		lastname = '$lastname', 
		middlename = '$middlename', 
		gender = '$gender', 
		email = '$email', 
		contact = '$contact', 
		username = '$username', 
		password = '$password', 
		campus_id = '$campus_id',
		role_id = '$role_id' 
		WHERE id = '$id'";
		//if-else statement in executing our query
		if($db->exec($sql)){
			$output['message'] = 'User updated successfully';
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