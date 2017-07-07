<?php

require_once 'config/Config.php';
session_start();

?>

<div id="modal">
<div id="wiadomosc" class="alert alert-danger" style="width: 30%; margin:200px auto; text-align: center"></div>
</div> 

<div class="container">
    <div class="row">
        <div id="form" class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2">

            <div id="divForm">  
                <form method="post" id="MyForm">
                    <h2 class="form-signin-heading">Password reminder</h2>
                    <br><span style="text-align: center;"></span>

                    <?php

                    if(isset($_POST['login']) && isset($_POST['security']) && isset($_POST['remind'])) {

                        $login = htmlentities($_POST['login']);
                        $security = htmlentities($_POST['security']);
                        $connection = new DbConnect();
                        $request = "SELECT * FROM `admin` WHERE `login` = '$login' AND `security`='$security'";
                        $_SESSION['login'] = $login;

                        $push = $connection->db->query($request);
                        $result = $push->fetch_object();         

                        if ($push->num_rows == 1) {
                            header("Location:index.php?page=recovery&security=$security");
                        } else {
                            echo "Invalid login or security code. Check and try again!";
                        }
                    }

                    unset($mailVerify);

                    ?>

                    <input name="login" id="login" class="form-control" placeholder="Login"><br>
                    <input type="password" name="security" id="security" class="form-control" placeholder="Security code"><br>
                    <input name="remind" type="submit"  id="przypomnij" value="Remind" class="btn btn-lg btn-primary btn-block">

                </form>
                <hr>
                <a href="index.php?page=login"> Go back to log in page</a>
            </div>
        </div>
    </div>
</div>    
<?php

