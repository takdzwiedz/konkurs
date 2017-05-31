<?php
ob_start();
session_start();
require_once 'config/Config.php';

?>

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
                                            <option value="">Choose sex</option>
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
                                    <select name="first" class="form-control">
                                        <option value="">Choose answer</option>
                                        <option value="<?=$resultRequestToDbQuestion_1->answer_A; ?>"><?=$resultRequestToDbQuestion_1->answer_A; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_1->answer_B; ?>"><?=$resultRequestToDbQuestion_1->answer_B; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_1->answer_C; ?>"><?=$resultRequestToDbQuestion_1->answer_C; ?></option>
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

                                    <select name="second" class="form-control">   
                                        <option value="">Choose answer</option>
                                        <option value="<?=$resultRequestToDbQuestion_2->answer_A; ?>"><?=$resultRequestToDbQuestion_2->answer_A; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_2->answer_B; ?>"><?=$resultRequestToDbQuestion_2->answer_B; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_2->answer_C; ?>"><?=$resultRequestToDbQuestion_2->answer_C; ?></option>
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

                                    <select name="third" class="form-control">   
                                        <option value="">Choose answer</option>
                                        <option value="<?=$resultRequestToDbQuestion_3->answer_A; ?>"><?=$resultRequestToDbQuestion_3->answer_A; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_3->answer_B; ?>"><?=$resultRequestToDbQuestion_3->answer_B; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_3->answer_C; ?>"><?=$resultRequestToDbQuestion_3->answer_C; ?></option>
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

                                    <select name="forth" class="form-control">   
                                        <option value="">Choose answer</option>
                                        <option value="<?=$resultRequestToDbQuestion_4->answer_A; ?>"><?=$resultRequestToDbQuestion_4->answer_A; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_4->answer_B; ?>"><?=$resultRequestToDbQuestion_4->answer_B; ?></option>
                                        <option value="<?=$resultRequestToDbQuestion_4->answer_C; ?>"><?=$resultRequestToDbQuestion_4->answer_C; ?></option>
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
                                    <input type="checkbox" name="rules" id="checkboxes-0" value="1"/>
                                Accept rules
                                </label>
                            </div>
                        </div>
                    </div>

                        <input class="btn btn-primary" type="submit" name="send_button" value="Wyślij">

                    </form>

               <div class="col-xs-12 col-md-12"></div>
            </div>
        </div>
    </div>
    
<?php

$contest_code=$_GET['contest_code'];
$if_code_correct_request_query = "SELECT * FROM `codes` WHERE `code`='$contest_code'";
$if_code_correct_request = $db_connection->db->query($if_code_correct_request_query);

if($if_code_correct_request->num_rows===1){

    if(isset($_POST['send_button'])){

        $name_field = trim($_POST['name_field']);
        $surname_field = trim($_POST['surname_field']);
        $birth_day_field = trim($_POST['birth_day_field']);
        $birth_month_field = trim($_POST['birth_month_field']);
        $birth_year_field = trim($_POST['birth_year_field']);
        $birth_date_field = $birth_year_field.'-'.$birth_month_field.'-'.$birth_day_field;
        $sex_field = trim($_POST['sex_field']);
        $e_mail_field = trim($_POST['e_mail_field']);
        $prefix_field = trim($_POST['prefix_field']);
        $phone_number = trim($_POST['phone_number']);
        $phone_field = $prefix_field.$phone_number;
        $street = trim($_POST['street']);
        $building = trim($_POST['building']);
        $flat = trim($_POST['flat']);
        $post_code = trim($_POST['post_code']);
        $city_name = trim($_POST['city_name']);
        $country = trim($_POST['country']);
        $agreement_tick = trim($_POST['country']);
        $send_button = $_POST['send_button'];

        $first_question = $_POST['first'];
        $second_question = $_POST['second'];
        $third_question = $_POST['third'];
        $forth_question = $_POST['forth'];

        $when = date('Y-m-d');

        //VALIDATION
        $validation = new Validate();

        //Validation: name
        
        $validation->ifEmpty($name_field, 'Name');
        $validation->maxAmountOfCharacters($name_field, 'Name', 25);
        $validation->onlyLetters($name_field, 'Name');

        //Validation: surname
        
        $validation->ifEmpty($surname_field, 'Surname');
        $validation->maxAmountOfCharacters($surname_field, 'Surname', 40);
        $validation->onlyLetters($surname_field, 'Surname');


        //Validation: date - not needed because of select in the form

        //Validation: sex

        $validation->ifEmpty($sex_field, 'sex');
        
        //Validation: e-mail 
        
        $validation->goodEmail($e_mail_field, 'e-mail');

        //Validation: phone number
        
        $validation->ifEmpty($prefix_field, 'Prefix');
        $validation->ifEmpty($phone_number, 'Phone Number');
        $validation->ifDigit($phone_number, 'Phone Number');
        $validation->maxAmountOfCharacters($phone_number, 'Phone Number', 12);

        // Validation: address

        $validation->ifEmpty($street, 'Street');
        $validation->ifEmpty($building, 'Building');
        $validation->ifEmpty($post_code, 'Post Code');
        $validation->ifEmpty($city_name, 'City Name');
        $validation->ifEmpty($country, 'Country');

        //Validation: questions (if answered)
        
        $validation->ifEmpty($first_question, '1st question');
        $validation->ifEmpty($second_question, '2nd question');
        $validation->ifEmpty($third_question, '3rd question');
        $validation->ifEmpty($forth_question, '4th question');
        
        //Validation: rules (is checked)
        
        if(!isset($_POST['rules'])){
            $validation->isChecked('Accept Rules');
        }
        
        if($validation->countErrors==0){
            
            //Inserting new user
            
            $insert = "INSERT INTO `users`(`id_user`, `name_field`, `surname_field`, `birth_date_field`, `sex_field`, `e_mail_field`, `phone_field`, `street`, `building`, `flat`, `post_code`, `city_name`, `country`, `first_question`, `second_question`, `third_question`, `forth_question`, `agreement_tick`, `date`) VALUES ('', '$name_field','$surname_field','$birth_date_field','$sex_field','$e_mail_field','$phone_field', '$street', '$building', '$flat', '$post_code', '$city_name', '$country','$first_question', '$second_question', '$third_question', '$forth_question', '$agreement_tick','$when')";
            $save =  $db_connection->db->query($insert);
            
            $first_question_true = $resultRequestToDbQuestion_1->answer_true;
            $second_question_true = $resultRequestToDbQuestion_2->answer_true;
            $third_question_true = $resultRequestToDbQuestion_3->answer_true;
            $forth_question_true = $resultRequestToDbQuestion_4->answer_true;
            
            //If user insers properly inputs, answers are saved in database and e-mail is beeing sent to user

            $wyslij_maila = new SendMail(E_MAIL_ADMIN);
            $subject = 'Thank You for registration in contest about Warsaw!';
            $to = $e_mail_field;
            $message ="Name: $name_field<br>Surname: $surname_field,<br>"
                    ."Date of Birth: $birth_date_field,<br>"
                    ."Sex: $sex_field,<br>e-mail: $e_mail_field,<br>"
                    ."Phone: $phone_field,<br>"
                    ."Street: $street,<br>"
                    ."First question - Your answer: $first_question,<br>"
                    ."First question - proper answer: $first_question_true,<br>"
                    ."Second question - Your answer: $second_question,<br>"
                    ."Second question - proper answer: $second_question_true,<br>"
                    . "Third question - Your answer: $third_question,<br>"
                    . "Third question - proper answer: $third_question_true,<br>"
                    . "Forth question - Your answer: $forth_question,<br>"
                    . "Forth question - proper answer: $forth_question_true.";

            
            if($first_question==$first_question_true && $second_question==$second_question_true && $third_question==$third_question_true && $forth_question==$forth_question_true){                $wyslij_maila->send($to, $subject, $message);
                echo '<span style="color:green;">You are a Winner!<br>Check Your e-mail!</span>';
                    $message.="<br><br>You won a prize!<br>"
                            . "We will send You a gift for the address from the form.<br><br>"
                            . "Regards,<br>"
                            . "Contest Team";
                    $wyslij_maila->send($to, $subject, $message);
            } else {
                echo '<span style="color:green;">Thank You for participating in the contest about Warsaw!<br>Check Your e-mail!</span>';
                    $message.= "<br><br>You did not won a prize this time.<br>"
                            . "Try again later.<br><br>"
                            . "Regards,<br>"
                            . "Contest Team";
                    $wyslij_maila->send($to, $subject, $message);
            }
            
            $_SESSION['zm_sesji'] = $message;
            header('Location:index.php?page=third');
            
            // Code deactivation
            
            $deactivation_request = "UPDATE `codes` SET `active`= 0 WHERE `code` = '$contest_code'";
            $deactivate = $db_connection->db->query($deactivation_request);
            
        }    
    }
} else {

     header('Location:index.php?page=first');
}

unset ($validation);

?>