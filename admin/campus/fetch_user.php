<?php
include_once('../../configs/Database.php');

$output = array('error' => false);

$database = new Connection();
$db = $database->open();
$num = 0;

try{
    $sql = $db->query('SELECT count(*) FROM campus')->fetch();;
}
catch(PDOException $e){
    $output['error'] = true;
    $output['message'] = $e->getMessage();
}
echo json_encode($sql['count(*)']);

?>