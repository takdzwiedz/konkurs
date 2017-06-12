<?php

require_once 'config/Config.php';

if(isset($_GET['mail'])){
    
    $mail = htmlentities($_GET['mail']);
  
    $request = "SELECT `id_user` FROM `users` WHERE `e_mail_field`='$mail'";
    
}

$db = new DbConnect();

$result = $db->db->query($request);

if($result->num_rows >=1 ){
    echo 'Y';
} else {
    echo 'N';
}
