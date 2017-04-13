<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php

//require_once '../config/Config.php';
//require_once '../class/DbConnect.php';

$zmienna11=1;
$polacz = new DbConnect();
if(isset($_POST['wyslijkod'])){
    $kod=$_POST['kod'];
    $znajdz = "SELECT * FROM `kody` WHERE `kod`='$kod'";
    $wynik = $polacz->db->query($znajdz);
       if($wynik->num_rows!=0){

           header("Location:index.php?page=start&zmienna=$kod");
//         echo "  <a href=\"index.php?page=start\">przejscie do formularza</a> ";
      
       }
       else{
    echo '<span class="error">Błędny kod</span>';
}

}//end ifsset



?>
<form method="post">
    <input name="kod">Wpisz swoj kod<br>
    <input type="submit" name="wyslijkod">
   
</form>

<form action="index.php" method="post">
    <input type="hidden" name="imie" /><br />
     <!--<form method="post" name="akcja"></form>-->
