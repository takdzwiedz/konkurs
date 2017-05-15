<?php

/*
 * autor: @takdzwiedz
 * 
 * Plik do walidacji danych
 * 
 */

class Validate {
    
    //Właściwość do przechowywania komunikatu o błędzie/błędach
    
    private $error;
    public $liczError;
    
    function __construct() {
        
        $this->error='';
        $this->liczError=0;
    }
    
    function puste ($ciag, $pole) {
        
        //Najpierw są wykonywane funkcje nabliżej zeminnej.
        //Trim obcina znaki na początku i końcu a empty sprawdza czy nie jest puste.
        
        if (empty(trim($ciag))){
            $this->AddError("Please insert something into $pole.");
            $this->liczError++;
        }
        
    }
    
    //preg_match testuje czy nie wystąpił danyc znak w ciągu
    function znakiPL($ciag, $pole){
        if(preg_match('/[ąęćłńóźż]/', $ciag)){
            $this->AddError("Pole $pole nie może zawierać znaków polskich.");
            $this->liczError++;
        }
        
    }
    
    //walidacja czy nie ma znakó sepcjalnych
    //jeżeli mają nie występować to '!'
    
    function znakiSpecjalne($ciag, $pole){
        
        if(preg_match('/[?!@#$%^&()_+=.,;{}\[\]*]/', $ciag)){
            $this->AddError("Pole $pole nie może zawierać znaków specjalnych: ?!@#$%^&()_+=.,;{}[]*].");
            $this->liczError++;
        }
    }
    
    //funkcja która wymaga spełnienia warunków: tylko litery i kropka
    //flaga 'i' oznacza, żeby nie zwracało uwagi na wielkość liter
    
    function znakiOK ($ciag, $pole){
        
        //Do sprawdzenia
        if(!preg_match('/[a-z]/', $ciag)){
            $this->AddError("Pelase insert only capital letter into $pole");
            $this->liczError++;
        }
    }
    
    function minIloscZnakow ($ciag,$pole,$min){
        if(strlen(trim($ciag))< $min){
            $this->AddError("Pole $pole ma mieć min $min znaków.");
            $this->liczError++;
        }
    }
    
    function maxIloscZnakow ($ciag,$pole,$max){
        if(strlen(trim($ciag))> $max){
            $this->AddError("Max amount of characters in $pole is $max.");
            $this->liczError++;
        }
    }
    
    
    function takieSame ($ciag, $pole, $ciag2, $pole2){
        if($ciag!=$ciag2){
            $this->AddError("Pole $pole2 ma być takie samo, jak pole $pole.");
            $this->liczError++;
        }
    }
    
    function weryfikacjaMaila ($ciag, $pole){
        if (!filter_var($ciag, FILTER_VALIDATE_EMAIL)) {
            $this->AddError("Please insert propper $pole address.");
            $this->liczError++;
        }
    }
    
    function walidacjaKodu ($ciag, $pole){
        if(preg_match('/^([0-9]{2})(-[0-9]{3})?$/i', $ciag)){
            $this->AddError("Please insert proper postal code into $pole");
            $this->liczError++;
        }
    }
    
    function czyCalkowita ($ciag, $pole){
        if (!filter_var($ciag, FILTER_VALIDATE_INT)) {
            $this->AddError("Plese insert digits into $pole");
            $this->liczError++;
        }
    }
    
    function czyZmiennoprzecinkowa ($ciag, $pole){
        if (!filter_var($ciag, FILTER_VALIDATE_FLOAT)) {
            $this->AddError("Pole $pole ma być liczbą zmiennoprzecinkową");
            $this->liczError++;
        }
    }
    
    function weryfikacjaHasla ($ciag, $pole){
        if (!preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*()_+|-]).{8,30}$/', $ciag)){
            $this->AddError("Pole $pole musi myć mocne");
            $this->liczError++;
        }
    }
    
    function isChecked (){
            $this->AddError("Please accept rules");
            $this->liczError++;

    }
    
    function validatetel($ciag, $pole) {
        if(preg_match('/^(?:\(?\+?48)?(?:[-\.\(\)\s]*(\d)){9}\)?/', $ciag)){
            $this->AddError("Pole $pole należy podać w formacie +48 XXX XXX XXX");
            $this->liczError++;
        }
    }
    
    function AddError($text){
        $this->error.=$text.'<br>';
    }
    
    function __destruct(){
        if(!empty($this->error)){
            echo '<div class="error" style="color:red;">'.$this->error.'</div>';
        }
    }
    
}