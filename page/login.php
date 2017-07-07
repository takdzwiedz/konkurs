<div id="modal">
<div id="wiadomosc" class="alert alert-danger" style="width: 30%; margin:150px auto;"></div>
</div>    

<div class="container">
    <div class="row">
        <div id="form" class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2">
            <div id="divForm" >
                <form method="post" id="MyForm">
                    <h2 class="form-signin-heading">Authorisation - admin panel</h2><br>

                    <?php
                    if(isset($_POST['login']) && isset($_POST['haslo'])){

                        $login = htmlentities($_POST['login']);
                        $haslo = htmlentities($_POST['haslo']);

                        $validation = new Validate();
                        $validation->ifEmpty($login, 'login');
                        $validation->ifEmpty($haslo, 'password');

                        if($validation->countErrors==0){

                            $sess = new MySession();
                            $sess->sessStart($login, $haslo); 
                        }
                    }
                    ?>
                    <input name="login" id="login" class="form-control" placeholder="Login"><span id="loginSpan"></span><br>
                    <input type="password" id="haslo" name="haslo" class="form-control" placeholder="Password"><br>
                    <input type="submit" id="zaloguj" name="zaloguj" value="Log in" class="btn btn-lg btn-primary btn-block"> 	
                </form>
                <hr>
                <a href="index.php?page=remind"> I forgot my password</a>
            </div>
        </div>
    </div>
</div>    