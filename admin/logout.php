<?php

    include_once('../configs/Database.php');

    $output = array('error' => false);

	$database = new Connection();
	$db = $database->open();

	// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();

    header("Location: ../index.php");
    exit;

	$database->close();


?>