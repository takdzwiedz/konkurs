<?php

session_start();
$secCheck = new DbConnect();
$security = htmlentities($_GET['security']);
$login = $_SESSION['login'];
$request = "SELECT `id_admin` FROM `admin` WHERE `login` = '$login' AND `security` = '$security'";
$push = $secCheck->db->query($request);
$result = $push->fetch_object();

// security number check START

if($push->num_rows == NULL){
    echo "Udało się";
    header("Location:index.php?page=remind");
} // security numner END

// password update START

if(isset($_POST['recover'])&& isset($_POST['newLogin'])&& isset($_POST['newPassword'])){
    
    $newLogin = trim($_POST['newLogin']);
    $newPassword = trim($_POST['newPassword']);
    $validation = new Validate();
    
    $validation->ifEmpty($newLogin, '"Login"');
    $validation->goodPass($newPassword, '"New password"');
    
    if($validation->countErrors==0){
        
        $updateRequest = "UPDATE `admin` SET `haslo`= '$newPassword' WHERE `login` = '$newLogin' AND `security` = '$security'";
        $pushUpdate = $secCheck->db->query($updateRequest);
        header("Location:index.php?page=login");
        unset ($validation);
    }
} // password update END
    
?>

<div id="modal">
<div id="wiadomosc" class="alert alert-danger" style="width: 30%; margin:150px auto;"></div>
</div>

<div class="container">
    <div class="row">
        <div id="form" class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2">
            <div id="divForm">
                <form method="post" id="MyForm">
                    <h2 class="form-signin-heading">Password recovery</h2><br>
                    <input name="newLogin" id="login" class="form-control" placeholder="Login"><br>
                    <input name="newPassword" id="haslo"  class="form-control" placeholder="Type new password"><br>
                    <input type="submit" id="recover" name="recover" value="Recover" class="btn btn-lg btn-primary btn-block"> 
                </form>
                <hr>
            </div>
        </div>
    </div>
</div>    