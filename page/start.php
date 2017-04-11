<?php

require_once 'config/Config.php';

?>
              
    <div id="txt" class="container-fluid front">
        <div class="row">
            <div class="col-xs-12 col-md-12"></div>
               <div class="col-xs-12 col-md-12">
                
   
                <!--- Begining of form --->
                
                    <form method="post"> 

                        <div id="reg" class="container" class="form-group row">
                            <h3>Contest about Warsaw</h3>
                            
                            <img class="pull-right" src="http://symbole.um.warszawa.pl/sites/default/files/symbole.um.warszawa.pl/ZNAK_PROMOCYJNY_FC_PL-01.jpg" alt="" style="height:150px">

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
                                    <label class="col-md-4 control-label" for="selectbasic">Day</label>
                                    <div class="col-md-4">
                                        <select id="birth1" name="birth_day_field" class="form-control">
                                            <option value=""></option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <label class="col-md-4 control-label" for="selectbasic">Month</label>
                                        <div class="col-md-4">
                                            <select id="birth2" name="birth_month_field" class="form-control">
                                                <option value=""></option>
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
                                        <label class="col-md-4 control-label" for="selectbasic">Year</label>
                                        <div class="col-md-4">
                                            <select id="birth3" name="birth_year_field" class="form-control">
                                                <option value="0"></option>
                                                <option value="1980">1980</option>
                                                <option value="1981">1981</option>
                                                <option value="1982">1982</option>
                                                <option value="1983">1983</option>
                                                <option value="1984">1984</option>
                                                <option value="1985">1985</option>
                                                <option value="1986">1986</option>
                                                <option value="1987">1987</option>
                                                <option value="1988">1988</option>
                                                <option value="1989">1989</option>
                                                <option value="1990">1990</option>
                                                <option value="1991">1991</option>
                                                <option value="1992">1992</option>
                                                <option value="1993">1993</option>
                                                <option value="1994">1994</option>
                                                <option value="1995">1995</option>
                                                <option value="1996">1996</option>
                                                <option value="1997">1997</option>
                                                <option value="1998">1998</option>
                                                <option value="1999">1999</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-url-input" class="col-2 col-form-label">Sex</label>
                                        <div class="text-center">
                                            <input class="col-2" class="radio" class="form-control" type="radio" value="male" id="Male" name="sex_field"> Male
                                            <input class="col-2" class="pull-right" class="radio" class="form-control" type="radio" value="female" id="Female" name="sex_field"> Female
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-2 col-form-label">Your email</label>
                                        <div class="col-10">
                                            <input class="form-control" type="email" name="e_mail_field" value="" id="example-email-input" placeholder="example@example.com">
                                        </div>
                                    </div>

                                    <div  class="form-group row">
                                    <label for="example-tel-input" class="col-1 col-form-label">Telephone</label>    
                                        <label for="example-tel-input" class="form-inline"></label>
                                        <select class="form-control" id="prefix_phone" name="prefix_field" class="input-xlarge">
                                            <option value="" selected="selected"></option>
                                            <option value="+48">+48</option>
                                            <option value="+49">+49</option>
                                            <option value="+50">+50</option>
                                            <option value="+51">+51</option>
                                            <option value="+52">+52</option>
                                            <option value="+53">+53</option>
                                        </select>
                                        
                                        
                                        <input style="width: 160px" class="form-control" type="tel" value="" id="phone_field" name="phone_number">
                                    </div>



                                    <div class="form-group row">
                                        <label for="example-tel-input" class="col-2 col-form-label">Address to send prize</label>
                                        <div class="col-10">
                                            <input class="form-control" type="text" name="address_to_send_prize" value="" id="" placeholder="Your adress">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

        <?php                  
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
                                        <option value="<?=$wynik2->Odpowiedz_A; ?>"><?=$wynik2->Odpowiedz_A; ?></option>
                                        <option value="<?=$wynik2->Odpowiedz_B; ?>"><?=$wynik2->Odpowiedz_B; ?></option>
                                        <option value="<?=$wynik2->Odpowiedz_C; ?>"><?=$wynik2->Odpowiedz_C; ?></option>
                                    </select>
                                </div>
                            </div>
                        </div>

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
                                        <option value=" <?=$wynikk2->Odpowiedz_A; ?>"><?=$wynikk2->Odpowiedz_A; ?></option>
                                        <option value="<?=$wynikk2->Odpowiedz_B; ?>"><?=$wynikk2->Odpowiedz_B; ?></option>
                                        <option value="<?=$wynikk2->Odpowiedz_C; ?>"><?=$wynikk2->Odpowiedz_C; ?></option>
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
                        <h4><b>Contact</b>
                        </h4>
                        <p>Telephone: +48 22 123 456 789
                        <br>e-mail: konkurs@warszawa.pl</p>
                        <hr>
                        <p><small>Copyright &copy; Urząd m.st. Warszawy 2017</small></p>
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
    
</script>

    
<?php

$polaczenie = new DbConnect();

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
    
    $address_to_send_prize = $_POST['address_to_send_prize'];
    $send_button = $_POST['send_button'];
    $first_question = $_POST['pierwsze'];
    $second_question = $_POST['drugie'];
    
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
    
    //Walidacja płci
    
    if(!isset($_POST['sex_field'])){
        $walidacja->isChecked('Sex');
    }
 
    //Weryfikacja e-maila
    $walidacja->weryfikacjaMaila($e_mail_field, 'e-mail');
    
    //Walidacja telefonu
    $walidacja->puste($prefix_field, 'Prefix');
    $walidacja->puste($phone_number, 'Phone number');
    $walidacja->czyCalkowita($phone_number, 'Telephone');
    $walidacja->maxIloscZnakow($phone_number, 'Telephone', 12);
    
    
    //Walidacja adresu
    $walidacja->puste($address_to_send_prize, 'Address');
    
    //Walidacja zaznaczonego regulaminu
    
    if(!isset($_POST['rules'])){
        $walidacja->isChecked('Terms');
        }
        
    if($walidacja->liczError==0){
        
        $sex_field = $_POST['sex_field'];
        $wstaw = "INSERT INTO `uzytkownicy`(`id_user`, `name_field`, `surname_field`, `birth_date_field`, `sex_field`, `e_mail_filed`, `phone_filed`, `adress_to_send_prize`, `first_question`, `second_question`, `date`) VALUES ('', '$name_field','$surname_field','$birth_date_field','$sex_field','$e_mail_field','$phone_field','$address_to_send_prize', '$first_question', '$second_question','$when')";
        $umiesc = $polaczenie->db->query($wstaw);
        
        $polacz = new DbConnect();
        $pytanie1 = "SELECT * FROM `pytania` WHERE id_pytania=1";
        $pytanie2 = "SELECT * FROM `pytania` WHERE id_pytania=2";
        $odp1=$_POST['pierwsze'];
        $odp2=$_POST['drugie'];
        $odp1true=$wynik2->Opowiedz_Poprawna;
        $odp2true=$wynikk2->Opowiedz_Poprawna;
        
        if($odp1==$odp1true&&$odp2==$odp2true){

            echo '<span style="color:green;">Congratulation!<br>Check Your e-mail and claim Your prize!</span>';
            $wyslij_maila = new SendMail(E_MAIL_ADMIN);
                $subject = 'Thank You for registration in contest About Warsaw!';
                $to = $e_mail_field ;// to trzeba wstawic maila z formularz
                $message = "Name: $name_field<br>Surname: $surname_field<br>Date of Birth: $birth_date_field<br>Sex: $sex_field<br>e-mail: $e_mail_field<br>Phone: $phone_field<br>Address to send prize: $address_to_send_prize<br>First question: $first_question<br>Second question: $second_question";
                
                $wyslij_maila->send($to, $subject, $message);

        }else{
            echo 'Thank You for participating in the contest About Warsaw!';
        }
    }    
}
unset ($walidacja);
?>