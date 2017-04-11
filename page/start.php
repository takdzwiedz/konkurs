<?php

require_once 'config/Config.php';

//Warunek do zapsywania danych w bazie
   
$polaczenie = new DbConnect();

if(isset($_POST['send_button'])){
    
    $name_field = $_POST['name_field'];
    $surname_field = $_POST['surname_field'];
    $birth_date_field = $_POST['birth_date_field'];
    $sex_field = $_POST['sex_field'];
    $e_mail_field = $_POST['e_mail_field'];
    $phone_field = $_POST['phone_field'];
    $address_to_send_prize = $_POST['address_to_send_prize'];
    $send_button = $_POST['send_button'];
    $when = date('Y-m-d');
   

    $walidacja = new Validate();
    $walidacja->puste($name_field, 'name_field');
    $walidacja->puste($surname_field, 'surname_field');
    $walidacja->weryfikacjaMaila($e_mail_field, 'e_mail_field');

    $walidacja->puste($address_to_send_prize, 'address_to_send_prize');
    
    $wstaw = "INSERT INTO `uzytkownicy`(`id_user`, `name_field`, `surname_field`, `birth_date_field`, `sex_field`, `e_mail_filed`, `phone_filed`, `adress_to_send_prize`) VALUES ('', '$name_field','$surname_field','$birth_date_field','$sex_field','$e_mail_field','$phone_field','$address_to_send_prize')";
    $umiesc = $polaczenie->db->query($wstaw);
    
}

$polacz = new DbConnect();

$pytanie1 = "SELECT * FROM `pytania` WHERE id_pytania=1";
$pytanie2 = "SELECT * FROM `pytania` WHERE id_pytania=2";

//Pytanie 1 
$wynik = $polacz->db->query($pytanie1);
            $wynik2 = $wynik->fetch_object();
            
//Pytanie 2            
$wynikk= $polacz->db->query($pytanie2);
         $wynikk2 = $wynikk->fetch_object();

?>
    
<!DOCTYPE html>


<html lang="pl">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="styles/style.css">
        <title>Contest about Warsaw</title>

    </head>

    <body>

        <form method="post">
          <div id="reg" class="container" class="form-group row">
         <img class="pull-right" src="img/ZNAK_PROMOCYJNY_FC_PL-01.jpg" alt="">
         <h3>KONKURS O WARSZAWIE</h3>
          <div class="row">
          <div id="form" class="col-sm-offset-2 col-xs-8 col-xs-offset-2 col-sm-8 col-md-8 col-sm-offset-2">


           <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label">Your Name</label>
          <div class="col-10">
            <input class="form-control" type="Name" name="name_field" value="" id="example-text-input" placeholder="Name">
          </div>
        </div>


        <div class="form-group row">
          <label for="example-search-input" class="col-2 col-form-label">Your surname</label>
          <div class="col-10">
            <input class="form-control" type="Surname" name="surname_field" value="" id="example-search-input" placeholder="Surname">
          </div>
        </div>


        <div class="form-group row">
          <label for="example-datetime-local-input" class="col-2 col-form-label">Date of birth</label>
          <div class="col-10">
            <input class="form-control" type="date" value="" name="birth_date_field" id="birth">
          </div>
        </div>


        <div class="form-group row">
          <label for="example-url-input" class="col-2 col-form-label">Sex</label>
          <div class="col-10">
            <input class="form-control" type="radio" value="male" id="Male" name="sex_field"> Male
            <input class="form-control" type="radio" value="female" id="Female" name="sex_field"> Female
          </div>
        </div>


        <div class="form-group row">
          <label for="example-email-input" class="col-2 col-form-label">Your email</label>
          <div class="col-10">
            <input class="form-control" type="email" name="e_mail_field" value="" id="example-email-input" placeholder="example@example.com">
          </div>
        </div>



        <div class="form-group row">
          <label for="example-tel-input" class="col-2 col-form-label">Telephone</label>
          <div class="col-10">
              <input class="form-control" type="tel" value="" name="phone_field" id="example-tel-input" placeholder="+(country code) + your phone number">
          </div>
        </div>


        <div class="form-group row">
          <label for="example-tel-input" class="col-2 col-form-label">Address to send prize</label>
          <div class="col-10">
            <input class="form-control" type="text" name="address_to_send_prize" value="" id="" placeholder="Your adress">
          </div>
        </div>

           <input class="submit" type="submit" class="btn btn-info" name="send_button" value="Wyślij">


          </div>
        </div>

           </div>

            Pytanie 1)
        <?=$wynik2->Pytanie; ?>
        <select name="pierwsze">
           <option value=" <?=$wynik2->Odpowiedz_A; ?>"><?=$wynik2->Odpowiedz_A; ?></option>
            <option value="<?=$wynik2->Odpowiedz_B; ?>"><?=$wynik2->Odpowiedz_B; ?></option>
            <option value="<?=$wynik2->Odpowiedz_C; ?>"><?=$wynik2->Odpowiedz_C; ?></option>
        </select>
        <br>

        Pytanie 2)
        <?=$wynikk2->Pytanie; ?>
        <select name="drugie">
           <option value=" <?=$wynikk2->Odpowiedz_A; ?>"><?=$wynikk2->Odpowiedz_A; ?></option>
            <option value="<?=$wynikk2->Odpowiedz_B; ?>"><?=$wynikk2->Odpowiedz_B; ?></option>
            <option value="<?=$wynikk2->Odpowiedz_C; ?>"><?=$wynikk2->Odpowiedz_C; ?></option>
        </select>
        <br>

        </form>

               <footer>
                <div class="container">
                    <div class="row">
                       <div class="stopka">
                        <div class="col-lg-10 col-lg-offset-1 text-center">
                            <h4><b>Kontakt</b>
                            </h4>
                            <p>T: 123 456 789
                            <br>e-mail: konkurs@warszawa.pl</p>
                            <hr>
                            <p><small>Copyright &copy; Urząd m.st. Warszawy 2017</small></p>
                        </div>

                        </div>
                    </div>
                </div>
            </footer>

        </body>
    </html>

    <?php 

    if(isset($_POST['send_button'])){
        
        $odp1=$_POST['pierwsze'];
        $odp2=$_POST['drugie'];
        $odp1true=$wynik2->Opowiedz_Poprawna;
        $odp2true=$wynikk2->Opowiedz_Poprawna;
        if($odp1==$odp1true&&$odp2==$odp2true){

            echo 'Congratulation!, check Your e-mail and claim Your prize!';
            $wyslij_maila = new SendMail(E_MAIL_ADMIN);
                $subject = 'Congratulation!';
                $to = $e_mail_field ;// to trzeba wstawic maila z formularz
                $message = 'Dear Sir/Madame! You succesfully answered questionf from our survey. We will sent gift to address from the form. Thank You!';
                $wyslij_maila->send($to, $subject, $message);

        }else{
            echo 'You did not send properly for one of our qestions.';
        }

    }

    ?>

