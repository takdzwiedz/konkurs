<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<?php
require_once '../config/Config.php';
require_once '../class/DbConnect.php';
require_once '../class/SendMail.php';
$connection = new DbConnect();

$request = "SELECT * FROM `uzytkownicy`";

//Filtrowanie

//Filtrowanie SEX

$filter_by_sex = 'f';
if(isset($_GET['action']) && $_GET['action']=='filter_by_sex_m'){
    $request .= "WHERE `sex_field`='male'";
}
if(isset($_GET['action']) && $_GET['action']=='filter_by_sex_f'){
    $request .= "WHERE `sex_field`='female'";
}
//Filtrowanie pytania

$filter_by_good_question = 'first';
if(isset($_GET['action']) && $_GET['action']=='filter_by_good_first_question'){
    $request .= "WHERE `first_question`='1 748 916'";
}

if(isset($_GET['action']) && $_GET['action']=='filter_by_good_second_question'){
    $request .= "WHERE `second_question`='7'";
}
//Filtrowania oba pytania
if(isset($_GET['action']) && $_GET['action']=='filter_by_good_all_question'){
    $request .= "WHERE `first_question`='1 748 916' AND `second_question`='7'";
}
// SORTOWANIE

//Sortowanie NAME
$order_by_name='up';
$button_name_name = 'Order by name ↑';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_name_up' && !empty($_GET['action'])){
    $button_name_name = 'Order by name ↓';
    $order_by_name='down';
    $request .= " ORDER BY `name_field` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_name_down' && !empty($_GET['action'])){
    $button_name_name = 'Order by name ↑';
    $order_by_name='up';
    $request .= " ORDER BY `name_field` DESC";
}
//Sortowanie SURNAME
$order_by_surname = 'up';
$button_name_surname = 'Order by Surname ↑';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_surname_up' && !empty($_GET['action'])){
    $button_name_surname = 'Order by Surname ↓';
    $order_by_surname = 'down';
    $request .= " ORDER BY `surname_field` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_surname_down' && !empty($_GET['action'])){
    $button_name_surname = 'Order by Surname ↑';
    $order_by_surname = 'up';
    $request .= " ORDER BY `surname_field` DESC";
}
// Sortowanie SEX
$order_by_sex='up';
$button_name_sex='Order by Sex ↑';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_sex_up' && !empty($_GET['action'])){
    $button_name_sex='Order by Sex ↓';
    $order_by_sex='down';
    $request .= " ORDER BY `sex_field` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_sex_down' && !empty($_GET['action'])){
    $button_name_sex='Order by Sex ↑';
    $order_by_sex='up';
    $request .= " ORDER BY `sex_field` DESC";
}
//SORTOWANIE E-MAIL
$order_by_e_mail = 'up';
$button_name_e_mail = 'Order by e-mail ↑';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_e_mail_up' && !empty($_GET['action'])){
    $button_name_e_mail = 'Order by e-mail ↓';
    $order_by_e_mail = 'down';
    $request .= " ORDER BY `e_mail_field` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_e_mail_down' && !empty($_GET['action'])){
    $button_name_e_mail = 'Order by e-mail ↑';
    $order_by_e_mail = 'up';
    $request .= " ORDER BY `e_mail_field` DESC";
}
// order city name
$order_by_city_name= 'up';
 $button_city_name = 'Order by city name ↑';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_city_name_down' && !empty($_GET['action'])){
    $button_city_name = 'Order by city name ↑';
    $order_by_city_name= 'up';
    $request .= " ORDER BY `city_name` DESC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_city_name_up' && !empty($_GET['action'])){
    $button_city_name = 'Order by city name ↓';
    $order_by_city_name= 'down';
    $request .= " ORDER BY `city_name` ASC";
}
//order country name
$order_by_country_name='up';
$button_country_name='Order by country name ↑';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_country_name' && !empty($_GET['action'])){
    $button_country_name = 'Order by country name ↓';
    $order_by_country_name= 'down';
    $request .= " ORDER BY `city_name` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_country_name' && !empty($_GET['action'])){
    $button_country_name = 'Order by country name ↑';
    $order_by_country_name= 'up';
    $request .= " ORDER BY `city_name` DESC";
}
?>

<!--- Dopdowny do filtrowania --->

   <div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 Filter by name <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="?page=users&action=filter_by_sex_f"><button type="button" class="btn btn-success dropdown-toggle">Female</button></a></li>
    <li><a href="?page=users&action=filter_by_sex_m"><button type="button" class="btn btn-success dropdown-toggle">Male</button></a></li>
  </ul>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Filter by question
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="?page=users&action=filter_by_good_first_question"><button type="button" class="btn btn-success dropdown-toggle">Filter by good Good 1st Answer</button></a></li>
    <li><a href="?page=users&action=filter_by_good_second_question"><button type="button" class="btn btn-success dropdown-toggle">Filter by good Good 2nd Answer</button></a></li>
    <li><a href="?page=users&action=filter_by_good_all_question"><button type="button" class="btn btn-success dropdown-toggle">Filter by good Good All Answer</button></a></li>
    <li>
  </ul>
</div>
<br>

<!--- Klawisze do sortowania --->

<a href="?page=users&action=order_by_name_<?php echo $order_by_name ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_name_name ?></button></a>

<a href="?page=users&action=order_by_surname_<?php echo $order_by_surname ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_name_surname ?></button></a>

<a href="?page=users&action=order_by_sex_<?php echo $order_by_sex ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_name_sex ?></button></a>


<a href="?page=users&action=order_by_city_name_<?php echo $order_by_city_name ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_city_name ?></button></a>

<a href="?page=users&action=order_by_country_name_<?php echo $order_by_country_name ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_country_name ?></button></a>

<!--- Klawisz czyszczenia zapytań --->
<br>
<a href="?page=users"><button type="button" class="btn btn-primary dropdown-toggle">Clear Filtering And Ordering</button></a>

<!---  Struktura tabeli --->

<table class="table table-striped" style="border:1px solid black"> 
    <thead class="table table-striped">
        <tr>
            <td>Lp.</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Birth date</td>
            <td>Sex</td>
            <td>E-mail</td>
            <td>Phone No.</td>
            <td>Street</td>
            <td>Building</td>
            <td>Flat</td>
            <td>Post code</td>
            <td>City name</td>
            <td>Country</td>
            <td>First question answer</td>
            <td>Second question answer</td>
            <td>Third question answer</td>
            <td>Forth question answer</td>
            <td>Date of registration</td>
        </tr>
       
            <?php
            
            //Wyśwetlenie użytkników
            
            $result = $connection->db->query($request);
            $lp=0;
            while($row = $result->fetch_object()){
                $lp++;
                echo " 
                    <tr>
                        <td>$lp</td>
                        <td>$row->name_field</td>
                        <td>$row->surname_field</td>
                        <td>$row->birth_date_field</td>
                        <td>$row->sex_field</td>   
                        <td>$row->e_mail_field</td>
                        <td>$row->phone_field</td>
                        <td>$row->street</td>
                        <td>$row->building</td>
                        <td>$row->flat</td>
                        <td>$row->post_code</td>
                        <td>$row->city_name</td>
                        <td>$row->country</td>
                        <td>$row->first_question</td>
                        <td>$row->second_question</td>
                        <td>$row->third_question</td>
                        <td>$row->forth_question</td>
                        <td>$row->date</td>
                    </td>
                    ";
            }
            //Koniec wyświetlania wszystkich użytknowników
            ?>
            
        </th>
    </thead>
</table>
