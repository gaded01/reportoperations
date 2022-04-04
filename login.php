<?php

    include_once('configs/Database.php');

    $output = array('error' => false);

	$database = new Connection();
	$db = $database->open();

	try{
		$username = $_POST['username'];
        $password = $_POST['password'];
		$stmt = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
		$stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
		$stmt->execute();
        $count = $stmt->rowCount();
        $output['data'] = $stmt->fetch();

        if ($count === 1) {
            session_start();
            echo($output['data']['username']);
            echo($output['data']['password']);
            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $output['data']['id'];
            $_SESSION["email"] = $output['data']['email'];
            $_SESSION["username"] = $output['data']['username'];
            $_SESSION["role"] = $output['data']['role_id'];

            header("Location: admin/index.php");
            exit();
        }
        header("Location: index.php?error=1");
	}
	catch(PDOException $e){
		$output['error'] = true;
		$output['message'] = $e->getMessage();
	}

	//close connection
	$database->close();


?>