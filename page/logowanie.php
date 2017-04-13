<?php

require_once 'config/Config.php';

$login = trim($_POST['login']);
$haslo = trim($_POST['haslo']);

$polacz = new DbConnect();
$czy_login_ok = "SELECT * FROM `uzytkownicy`";
$zapytanie = $polacz->db->query();

if($zapytanie->fetch_row ===1){
    
    
}


?>

<input name="login">
<input name="haslo">
<input type="submit" name="wyslij" value="Wyślij">
<a href="#"></a>