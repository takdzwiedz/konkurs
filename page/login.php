<?php


?>

<div id="modal">
<div id="wiadomosc" class="alert alert-danger" style="width: 30%; margin:150px auto;"></div>
</div>    

        <div id="divForm">
            
            <form method="post" id="MyForm">
                
                <h2 class="form-signin-heading">Zaloguj się</h2><br>

                <?php


                if(isset($_POST['login']) && isset($_POST['haslo'])){

                    $login = htmlentities($_POST['login']);
                    $haslo = htmlentities($_POST['haslo']);

                    $sess = new MySession();
                    $sess->sessStart($login, $haslo);

                }

            ?>
        
                <input name="login" id="login" class="form-control" placeholder="Login"><br>
                <input type="password" id="haslo" name="haslo" class="form-control" placeholder="Hasło"><br>

                <input type="submit" id="zaloguj" name="zaloguj" value="Logowanie" class="btn btn-lg btn-primary btn-block"> 
			
            </form>

            <hr>

            <a href="index.php?page=nie_pamietam"> Poproszę o nowe haslo</a>

</div>