<?php

session_start();
$secCheck = new DbConnect();
$security = htmlentities($_GET['security']);

$login = $_SESSION['login'];
$request = "SELECT `id_admin` FROM `admin` WHERE `login` = '$login' AND `security` = '$security'";
$push = $secCheck->db->query($request);


//if ($result = $push->fetch_object()){
//    
//    to wyświetl formularz i 
//    
//    if(isset($_POST['login']) && isset($_POST['newPassword']) && isset($_POST['recover'])) {
//
//        zaktualizuj hasło
//
//    }   
//    
//} jeżeli nie, to wróć na stronę odzyskiwania hasła




?>

<div id="modal">
<div id="wiadomosc" class="alert alert-danger" style="width: 30%; margin:150px auto;"></div>
</div>    

<div id="divForm">

    <form method="post" id="MyForm">

        <h2 class="form-signin-heading">Password recovery</h2><br>

        <input name="login" id="login" class="form-control" placeholder="Login"><br>
        <input name="newPassword" id="haslo"  class="form-control" placeholder="type new password"><br>

        <input type="submit" id="recover" name="recover" value="Recover" class="btn btn-lg btn-primary btn-block"> 

    </form>

    <hr>


</div>