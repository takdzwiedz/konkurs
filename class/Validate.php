<?php

/*
 * autor: @takdzwiedz
 * 
 * DATA VALIDATION FILE
 * 
 */

class Validate {
    
    //Variables keeping messages about mistakes
    
    private $error;
    public $countErrors;
    
    function __construct() {
        
        $this->error='';
        $this->countErrors=0;
    }
    
    function ifEmpty ($ciag, $pole) {
        
        if (empty(trim($ciag))){
            $this->addError("Specify $pole");
            $this->countErrors++;
        }
        
    }
    
    function polishCharacters($ciag, $pole){
        if(preg_match('/[ąęćłńóźż]/', $ciag)){
            $this->addError("Do not use Polish characters (ąęćłńóźż) in $pole");
            $this->countErrors++;
        }
        
    }

    function specialCharacters($ciag, $pole){
        
        if(preg_match('/[?!@#$%^&()_+=.,;{}\[\]*]/', $ciag)){
            $this->addError("Do not use special characters ( ?!@#$%^&()_+=.,;{}[]*] )in $pole");
            $this->countErrors++;
        }
    }
    
    function onlyLetters ($ciag, $pole){
        
        if(!preg_match('/[a-z]/', $ciag)){
            $this->addError("Insert only letters into $pole");
            $this->countErrors++;
        }
    }
    
    function minAmountOfCharacters ($ciag, $pole, $min){
        if(strlen(trim($ciag))< $min){
            $this->addError("Minimum number of characters in $pole is $min");
            $this->countErrors++;
        }
    }
    
    function maxAmountOfCharacters ($ciag,$pole,$max){
        if(strlen(trim($ciag))> $max){
            $this->addError("Max amount of characters in $pole is $max.");
            $this->countErrors++;
        }
    }
    
    
    function sameInputs ($ciag, $pole, $ciag2, $pole2){
        if($ciag!=$ciag2){
            $this->addError("$pole2 shoud be equal to $pole");
            $this->countErrors++;
        }
    }
    
    function goodEmail ($ciag, $pole){
        if (!filter_var($ciag, FILTER_VALIDATE_EMAIL)) {
            $this->addError("Insert propper $pole address");
            $this->countErrors++;
        }
    }
    
    function goodPostalCode ($ciag, $pole){
        if(preg_match('/^([0-9]{2})(-[0-9]{3})?$/i', $ciag)){
            $this->addError("Insert proper postal code into $pole");
            $this->countErrors++;
        }
    }
    
    function ifDigit ($ciag, $pole){
        if (!ctype_digit($ciag)) {
            $this->addError("Insert digits into $pole");
            $this->countErrors++;
        }
    }
    
    
    function ifIntiger ($ciag, $pole){
        if (!filter_var($ciag, FILTER_VALIDATE_INT)) {
            $this->addError("Insert intiger into $pole");
            $this->countErrors++;
        }
    }
    
    function ifFloat ($ciag, $pole){
        if (!filter_var($ciag, FILTER_VALIDATE_FLOAT)) {
            $this->addError("Insert float into $pole");
            $this->countErrors++;
        }
    }
    
    function goodPass ($ciag, $pole){
        if (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+|-]).{8,30}$/', $ciag)){
            $this->addError("Insert strong $pole between 8 and 30 charakters");
            $this->countErrors++;
        }
    }
    
    function isChecked ($pole){
            $this->addError("$pole");
            $this->countErrors++;

    }
    
    function validateTel($ciag, $pole) {
        if(preg_match('/^(?:\(?\+?48)?(?:[-\.\(\)\s]*(\d)){9}\)?/', $ciag)){
            $this->addError("Insert digits in that way into +48 XXX XXX XXX $pole");
            $this->countErrors++;
        }
    }
    
    function ifExist ($ciag, $pole)  {
        
        $request = "SELECT `id_user` FROM `users` WHERE `e_mail_field`='$ciag'";
        $db = new DbConnect();
        $result = $db->db->query($request);
        
        if($result->num_rows >=1 ){
            $this->addError("change $pole - this one already exists");
            $this->countErrors++;
        }
    }

    
    function addError($text){
        $this->error.=$text.'<br>';
    }
    
    function __destruct(){
        if(!empty($this->error)){
            echo '<div class="error" style="color:red;">Please: <br>'.$this->error.'</div>';
        }
    }
    
}