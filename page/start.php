<?php
ob_start();
require_once 'config/Config.php';


?>
    <header>

        <div class="jumbotron">
            <h3>Contest about Warsaw</h3>
            <img class="center" src="http://symbole.um.warszawa.pl/sites/default/files/symbole.um.warszawa.pl/ZNAK_PROMOCYJNY_FC_PL-01.jpg" alt="" style="height:200px">
        </div>

    </header>
    
    <div id="txt" class="container-fluid front">
        <div class="row">
            <div class="col-xs-12 col-md-12"></div>
               <div class="col-xs-12 col-md-12">
   
                <!--- Begining of form --->
                
                    <form method="post"> 

                        <div id="reg" class="container" class="form-group row">
                            
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
                                    <label for="example-search-input" class="col-2 col-form-label">Date of birth</label>
                                </div>

                                <div class="form-group row">
                                    <div class="col-10">
                                        <select id="birth1" name="birth_day_field" class="form-control">
                                            <option value="">Choose day</option>
                                            <script>
                                                for (var d = 1; d <=32; d++) 
                                                {
                                                    d = (d < 10) ? '0' + d: d;
                                                    document.write('<option value = "' + d + '">' + d + '</option>');
                                                }
                                            </script>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-10">
                                        <select id="birth2" name="birth_month_field" class="form-control">
                                            <option value="">Choose month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-10">
                                        <select id="birth3" name="birth_year_field" class="form-control">
                                            <option value="">Choose year</option>
                                            <script>
                                                for (y =1980; y < 2000; y++)
                                                {
                                                    document.write('<option value = "'+ y +'">'+ y +'</option>');
                                                }
                                            </script>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-url-input" class="col-2 col-form-label">Sex</label>
                                    <div class="text-center">
                                        <select id="selectbasic" name="sex_field" class="form-control">
                                            <option value=""></option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-2 col-form-label">Your email</label>
                                    <div class="col-10">
                                        <input class="form-control" type="email" name="e_mail_field" value="" id="example-email-input" placeholder="example@example.com">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-tel-input">Telephone</label>
                                    <div class="row">
                                        <div class="form-group col-xs-6 col-md-6">
                                            <label for="example-tel-input" class="sr-only"></label>
                                                <select class="form-control" id="prefix_phone" name="prefix_field" class="input-xlarge">
                                                    <option value="">Select prefix</option>
                                                    <script>
                                                        for (n=48; n<54; n++)
                                                        {
                                                            document.write('<option value="+'+ n +'">+'+ n +'</option>');
                                                        }
                                                    </script>
                                                </select>
                                        </div>

                                        <div class="form-group col-xs-6 col-md-6">
                                            <label for="lastname" class="sr-only"></label>
                                            <input id="lastname" class="form-control input-group-lg reg_name" type="text" name="phone_number" placeholder="Phone number" />
                                        </div>
                                    </div>
                                </div>
                              

                                <div class="form-group row">
                                    <label for="example-search-input" class="col-2 col-form-label">Address to send prize</label>
                                </div>    
                                
                                <div class="form-group row">
                                    <div class="col-10">
                                        <input class="form-control" name="street" id="example-text-input" placeholder="Street">
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-10">
                                        <input id="building" name="building" type="text" placeholder="Building number" class="form-control">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                    
                                <div class="form-group row">
                                    <div class="col-10">
                                        <input id="building" name="flat" type="text" placeholder="Flat number" class="form-control">
                                        <p class="help-block"></p>
                                    </div>
                                </div>
                                    
                                <div class="form-group row">
                                    <div class="col-10">
                                        <input id="post_code" name="post_code" type="text" placeholder="xx-xxx" class="form-control">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-10">
                                        <input id="city_name" name="city_name" type="text" placeholder="City" class="form-control">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-10">
                                        <select id="country" name="country" class="form-control">
                                            <option value="">Please select a country</option>
                                            <option value="Czech">Czech</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="France">France</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

        <?php
        
        $db_connection = new DbConnect();

        $question_1 = "SELECT * FROM `questions` WHERE id_question=1";
        $question_2 = "SELECT * FROM `questions` WHERE id_question=2";
        $question_3 = "SELECT * FROM `questions` WHERE id_question=3";
        $question_4 = "SELECT * FROM `questions` WHERE id_question=4";

        //Question 1 
        $requestToDbQuestion_1 = $db_connection->db->query($question_1);
        $resultRequestToDbQuestion_1 = $requestToDbQuestion_1->fetch_object();

        //Question 2            
        $requestToDbQuestion_2 =  $db_connection->db->query($question_2);
        $resultRequestToDbQuestion_2 = $requestToDbQuestion_2->fetch_object();
        
        //Question 3
        $requestToDbQuestion_3 =  $db_connection->db->query($question_3);
        $resultRequestToDbQuestion_3 = $requestToDbQuestion_3->fetch_object();
        
        //Question 4
        $requestToDbQuestion_4 =  $db_connection->db->query($question_4);
        $resultRequestToDbQuestion_4 = $requestToDbQuestion_4->fetch_object();
        
        ?>

                        <!--Question 1-->
                        
                        <div id="pytanie1">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">First question</label>
                                <div class="col-10">
                                    <p>Which answer is correct. How many people lives in Warsaw?</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-4 control-label" for="selectbasic"></label>
                                <div class="col-md-4">
                                    <select name="pierwsze" class="form-control">
                                        <option value="">Choose answer</option>
                                        <option value="<?=$resultRequestToDbQuestion_1->Odpowiedz_A; ?>"><?=$resultRequestToDbQuestion_1->Odpowiedz_A; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_1->Odpowiedz_B; ?>"><?=$resultRequestToDbQuestion_1->Odpowiedz_B; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_1->Odpowiedz_C; ?>"><?=$resultRequestToDbQuestion_1->Odpowiedz_C; ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!--Question 2-->
                        
                        <div id="pytanie2">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">Second question</label>
                                <div class="col-10">
                                    <p>Which answer is correct. How many districts Warsaw has?</p>
                                </div>
                            </div>


                            <div  class="form-group row">
                                <label class="col-md-4 control-label" for="selectbasic"></label>
                                <div class="col-md-4">

                                    <select name="drugie" class="form-control">   
                                        <option value="">Choose answer</option>
                                        <option value="<?=$resultRequestToDbQuestion_2->Odpowiedz_A; ?>"><?=$resultRequestToDbQuestion_2->Odpowiedz_A; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_2->Odpowiedz_B; ?>"><?=$resultRequestToDbQuestion_2->Odpowiedz_B; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_2->Odpowiedz_C; ?>"><?=$resultRequestToDbQuestion_2->Odpowiedz_C; ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!--Question 3-->
                        
                        <div id="pytanie3">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">Third question</label>
                                <div class="col-10">
                                    <p>Which answer is correct. First president of Warsaw?</p>
                                </div>
                            </div>


                            <div  class="form-group row">
                                <label class="col-md-4 control-label" for="selectbasic"></label>
                                <div class="col-md-4">

                                    <select name="trzecie" class="form-control">   
                                        <option value="">Choose answer</option>
                                        <option value="<?=$resultRequestToDbQuestion_3->Odpowiedz_A; ?>"><?=$resultRequestToDbQuestion_3->Odpowiedz_A; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_3->Odpowiedz_B; ?>"><?=$resultRequestToDbQuestion_3->Odpowiedz_B; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_3->Odpowiedz_C; ?>"><?=$resultRequestToDbQuestion_3->Odpowiedz_C; ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!--Question 4--> 
                        
                        <div id="pytanie4">
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-2 col-form-label">Forth question</label>
                                <div class="col-10">
                                    <p>Which answer is correct. Actual president of Warsaw?</p>
                                </div>
                            </div>


                            <div  class="form-group row">
                                <label class="col-md-4 control-label" for="selectbasic"></label>
                                <div class="col-md-4">

                                    <select name="czwarte" class="form-control">   
                                        <option value="">Choose answer</option>
                                        <option value="<?=$resultRequestToDbQuestion_4->Odpowiedz_A; ?>"><?=$resultRequestToDbQuestion_4->Odpowiedz_A; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_4->Odpowiedz_B; ?>"><?=$resultRequestToDbQuestion_4->Odpowiedz_B; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_4->Odpowiedz_C; ?>"><?=$resultRequestToDbQuestion_4->Odpowiedz_C; ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="container">
                            <a href="#demo" class="btn btn-info" data-toggle="collapse">Show rules</a>
                            <div id="demo" class="collapse">
                                Agreement: Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="checkboxes"></label>
                            <div class="col-md-4">
                                <div class="checkbox">
                                    <label for="checkboxes-0">
                                        <input name="rules" id="checkboxes-0" value="1" type="checkbox">
                                Accept rules
                                </label>
                                </div>
                            </div>
                        </div>

                        <input class="btn btn-primary" type="submit" name="send_button" value="Wyślij">

                    </form>
                
                <!--- Begining of form --->
                
               <div class="col-xs-12 col-md-12"></div>
            </div>
        </div>
    </div>
    

    <footer>
        <div class="container">
            <div class="row">
                <div class="stopka">
                    <div class="col-lg-10 col-lg-offset-1 text-center">

                        <a id="tel" href="phone:123-456-789">Contact</a><br>
                        <a href="mailto:kontakt@warszawa.pl">Email Us</a>

                        <hr>
                        <p><strong>Copyright &copy; Urząd m.st. Warszawy 2017</strong></p>
                    </div>

                </div>
            </div>
        </div>
    </footer>

<script>
        $(function() {

            $('#pytanie2').hide();
            $('#pytanie1').change(function() {

                if ($(this).is(":selected")) {
                    $('#pytanie2').hide();
                } else {
                    $('#pytanie2').show();
                }
            });
        });;
        
        $(function() {

            $('#pytanie3').hide();
            $('#pytanie2').change(function() {

                if ($(this).is(":selected")) {
                    $('#pytanie3').hide();
                } else {
                    $('#pytanie3').show();
                }
            });
        });;
        
        $(function() {

            $('#pytanie4').hide();
            $('#pytanie3').change(function() {

                if ($(this).is(":selected")) {
                    $('#pytanie4').hide();
                } else {
                    $('#pytanie4').show();
                }
            });
        });;
        
      
    </script>
  
<?php

$contest_code=$_GET['contest_code'];
$if_zmienna_correct_request_query = "SELECT * FROM `kody` WHERE `kod`='$contest_code'";
$if_zmienna_correct_request = $db_connection->db->query($if_zmienna_correct_request_query);

if($if_zmienna_correct_request->num_rows===1){

    if(isset($_POST['send_button'])){

    
        $name_field = trim($_POST['name_field']);
        $surname_field = trim($_POST['surname_field']);

        $birth_day_field = trim($_POST['birth_day_field']);
        $birth_month_field = trim($_POST['birth_month_field']);
        $birth_year_field = trim($_POST['birth_year_field']);
        $birth_date_field = $birth_year_field.'-'.$birth_month_field.'-'.$birth_day_field;
        $e_mail_field = trim($_POST['e_mail_field']);
        $prefix_field = trim($_POST['prefix_field']);
        $phone_number = trim($_POST['phone_number']);
        $phone_field = $prefix_field.$phone_number;

    //    $address_to_send_prize = $_POST['address_to_send_prize'];
        $street = trim($_POST['street']);
        $building = trim($_POST['building']);
        $flat = trim($_POST['flat']);
        $post_code = trim($_POST['post_code']);
        $city_name = trim($_POST['city_name']);
        $country = trim($_POST['country']);

        $send_button = $_POST['send_button'];

        $first_question = $_POST['pierwsze'];
        $second_question = $_POST['drugie'];
        $third_question = $_POST['trzecie'];
        $forth_question = $_POST['czwarte'];

        $when = date('Y-m-d');

        //Walidacja
        $walidacja = new Validate();

        //Walidacja imienia
        $walidacja->puste($name_field, 'Name');
        $walidacja->maxIloscZnakow($name_field, 'Name', 25);
        $walidacja->znakiOK($name_field, 'Name');

        //Walidacja nazwiska
        $walidacja->puste($surname_field, 'Surname');
        $walidacja->maxIloscZnakow($surname_field, 'Surname', 40);
        $walidacja->znakiOK($surname_field, 'Surname');


        //Walidacja daty - niepotrzebna bo selecty w html

        //Sex validation

        if(!isset($_POST['sex_field'])){
            $walidacja->isChecked('Sex');
        }

        //E-mail validation
        $walidacja->weryfikacjaMaila($e_mail_field, 'e-mail');

        //Walidacja telefonu
        $walidacja->puste($prefix_field, 'Prefix');
        $walidacja->puste($phone_number, 'Phone number');
        $walidacja->czyCalkowita($phone_number, 'Telephone');
        $walidacja->maxIloscZnakow($phone_number, 'Telephone', 12);

        //Address validation

        $walidacja->puste($street, 'Street');
        $walidacja->puste($building, 'Building');
        $walidacja->puste($post_code, 'Post code');
    //    $walidacja->walidacjaKodu($post_code, 'Post code');
        $walidacja->puste($city_name, 'City name');
        $walidacja->puste($country, 'Country');

        //Rules validation (id checked)
        $agreement_tick = $_POST['rules'];
        if(!isset($_POST['rules'])){
            $walidacja->isChecked($agreement_tick);
            }

        if($walidacja->liczError==0){

            $sex_field = $_POST['sex_field'];
            $wstaw = "INSERT INTO `users`(`id_user`, `name_field`, `surname_field`, `birth_date_field`, `sex_field`, `e_mail_field`, `phone_field`, `street`, `building`, `flat`, `post_code`, `city_name`, `country`, `first_question`, `second_question`, `third_question`, `forth_question`, `agreement_tick`, `date`) VALUES ('', '$name_field','$surname_field','$birth_date_field','$sex_field','$e_mail_field','$phone_field', '$street', '$building', '$flat', '$post_code', '$city_name', '$country','$first_question', '$second_question', '$third_question', '$forth_question', '$agreement_tick','$when')";
            $umiesc =  $db_connection->db->query($wstaw);


            $odp1=$_POST['pierwsze'];
            $odp2=$_POST['drugie'];
            $odp3=$_POST['trzecie'];
            $odp4=$_POST['czwarte'];


            $odp1true=$resultRequestToDbQuestion_1->Opowiedz_Poprawna;
            $odp2true=$resultRequestToDbQuestion_2->Opowiedz_Poprawna;
            $odp3true=$resultRequestToDbQuestion_3->Opowiedz_Poprawna;
            $odp4true=$resultRequestToDbQuestion_4->Opowiedz_Poprawna;

            //Jeżeli użytwkownik wypełnił prawidłowo formularz i zaakceptował regulamin to jego odpowiedzi zapisują się w bazie danych i otrzymuje mejla.
            //Jeżeli odpowiedział poprawnie to otrzymuje nagodę co zostanie wyswietlone w komunikacie i w mejlu

            $wyslij_maila = new SendMail(E_MAIL_ADMIN);
            $subject = 'Thank You for registration in contest about Warsaw!';
            $to = $e_mail_field ;
            $message ="Name: $name_field<br>Surname: $surname_field,<br>"
                    ."Date of Birth: $birth_date_field,<br>"
                    ."Sex: $sex_field,<br>e-mail: $e_mail_field,<br>"
                    ."Phone: $phone_field,<br>"
                    ."Street: $street,<br>"
                    ."First question - Your answer: $first_question,<br>"
                    ."First question - proper answer: $odp1true,<br>"
                    ."Second question - Your answer: $second_question,<br>"
                    ."Second question - proper answer: $odp2true,<br>"
                    . "Third question - Your answer: $third_question,<br>"
                    . "Third question - proper answer: $odp3true,<br>"
                    . "Forth question - Your answer: $forth_question,<br>"
                    . "Forth question - proper answer: $odp4true.";


            if($odp1==$odp1true && $odp2==$odp2true && $odp3==$odp3true && $odp4==$odp4true){
                $wyslij_maila->send($to, $subject, $message);
                echo '<span style="color:green;">You are a Winner!<br>Check Your e-mail!</span>';
                    $message.="<br><br>You won a prize!<br>"
                            . "We will send You a gift for the address from the form.<br><br>"
                            . "Regards,<br>"
                            . "Contest Team";
                    $wyslij_maila->send($to, $subject, $message);
            }else{
                echo '<span style="color:green;">Thank You for participating in the contest about Warsaw!<br>Check Your e-mail!</span>';
                    $message.= "<br><br>You did not won a prize this time.<br>"
                            . "Try again later.<br><br>"
                            . "Regards,<br>"
                            . "Contest Team";
                    $wyslij_maila->send($to, $subject, $message);
            }
        }    
    }

} else {

     header('Location:index.php?page=strona_z_kodem');
}

unset ($walidacja);

?>