
</head>

<header>

        <div class="jumbotron">
            <h3>Contest about Warsaw</h3>
            <img class="center" src="http://symbole.um.warszawa.pl/sites/default/files/symbole.um.warszawa.pl/ZNAK_PROMOCYJNY_FC_PL-01.jpg" alt="" style="height:200px">
        </div>

    </header>
<?php
echo 'REGISTRATION';
echo "Name: $name_field<br>Surname: $surname_field,<br>"
                ."Date of Birth: $birth_date_field,<br>"
                ."Sex: $sex_field,<br>e-mail: $e_mail_field,<br>"
                ."Phone: $phone_field,<br>"
                ."Street: $street,<br>"
                ."Building number: $building<br>"
                ."Flat number: $flat<br>"
                ."Postal Code: $post_code<br>"
                ."City $city_name<br>"
                ."First question - Your answer: $first_question,<br>"
                ."First question - proper answer: $odp1true,<br>"
                ."Second question - Your answer: $second_question,<br>"
                ."Second question - proper answer: $odp2true,<br>"
                . "Third question - Your answer: $third_question,<br>"
                . "Third question - proper answer: $odp3true,<br>"
                . "Forth question - Your answer: $forth_question,<br>"
                . "Forth question - proper answer: $odp4true.";
if(isset($_POST['send_button'])){
    $strit = $_POST['przesylka'];
}
echo "WALJIU STREET ";

?>

 <input type="hidden" name="przesylka" value="<?php $street ?>"
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