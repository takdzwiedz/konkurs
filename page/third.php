<?php
session_start();

$db_connection = new DbConnect();

$contest_code=$_GET['contest_code'];
$if_code_correct_request_query = "SELECT * FROM `codes` WHERE `code`='$contest_code'";
$if_code_correct_request = $db_connection->db->query($if_code_correct_request_query);

if($if_code_correct_request->num_rows===1){
    
    echo $_SESSION['message'];
    
} else {
    
    echo "Soemthing went wrong :)";
    
}

