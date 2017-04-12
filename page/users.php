<?php
require_once 'config/Config.php';

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

?>

<!--- Klawisze do filtrowania --->

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter by sex
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="?page=users&action=filter_by_sex_f"><button type="button" class="btn brn-default dropdown-toggle">Female</button></a></li>
    <li><a href="?page=users&action=filter_by_sex_m"><button type="button" class="btn brn-default dropdown-toggle">Male</button></a></li>
  </ul>
</div>

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Filter by question
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="?page=users&action=filter_by_good_first_question"><button type="button">Filter by good Good 1st Answer</button></a></li>
    <li><a href="?page=users&action=filter_by_good_second_question"><button type="button">Filter by good Good 2nd Answer</button></a></li>
    <li><a href="?page=users&action=filter_by_good_all_question"><button type="button">Filter by good Good All Answer</button></a></li>
    <li>
  </ul>
</div>
<br>

<!--- Klawisze do sortowania --->

<a href="?page=users&action=order_by_name_<?php echo $order_by_name ?>"><button type="button"><?php echo $button_name_name ?></button></a>

<a href="?page=users&action=order_by_surname_<?php echo $order_by_surname ?>"><button type="button"><?php echo $button_name_surname ?></button></a>

<a href="?page=users&action=order_by_sex_<?php echo $order_by_sex ?>"><button type="button"><?php echo $button_name_sex ?></button></a>

<a href="?page=users&action=order_by_e_mail_<?php echo $order_by_e_mail ?>"><button type="button"><?php echo $button_name_e_mail ?></button></a>

<!--- Klawisz czyszczenia zapytań --->
<br>
<a href="?page=users"><button type="button">Clear Filtering And Ordering</button></a>

<!---  Struktura tabeli --->

<table>
    <thead>
        <tr>
            <td>Lp.</td>
            <td>Name</td>
            <td>Surname</td>
            <td>Birth date</td>
            <td>Sex</td>
            <td>E-mail</td>
            <td>Phone No.</td>
            <td>Address</td>
            <td>First question answer</td>
            <td>Second question answer</td>
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
                        <td>$row->adress_to_send_prize</td>
                        <td>$row->first_question</td>
                        <td>$row->second_question</td>
                        <td>$row->date</td>
                    </td>
                    ";
            }
            //Koniec wyświetlania wszystkich użytknowników
            ?>
            
        </th>
    </thead>
</table>