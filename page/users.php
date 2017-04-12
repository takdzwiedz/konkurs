<?php
require_once 'config/Config.php';

$connection = new DbConnect();

$request = "SELECT * FROM `uzytkownicy`";

//Filtrowanie

//Filtrowanie SEX


$filter_by_sex = 'f';
if(isset($_GET['action']) && $_GET['action']=='filter_by_sex_m'){
    $filter_by_sex = 'f';
    $request .= "WHERE `sex_field`='male'";
}
if(isset($_GET['action']) && $_GET['action']=='filter_by_sex_f'){
    $filter_by_sex = 'm';
    $request .= "WHERE `sex_field`='female'";
}
//Filtrowanie 1 pytanie

if(isset($_GET['action']) && $_GET['action']=='filter_by_good_first_question'){
    $request .= "WHERE `first_question`='1 748 916'";
}
//Filtrowanie 2 pytanie
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
if(isset($_GET['action']) && $_GET['action'] == 'order_by_name_up' && !empty($_GET['action'])){
    $order_by_name='down';
    $request .= " ORDER BY `name_field` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_name_down' && !empty($_GET['action'])){
    $order_by_name='up';
    $request .= " ORDER BY `name_field` DESC";
}
//Sortowanie SURNAME
$order_by_surname = 'up';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_surname_up' && !empty($_GET['action'])){
    $order_by_surname = 'down';
    $request .= " ORDER BY `surname_field` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_surname_down' && !empty($_GET['action'])){
    $order_by_surname = 'up';
    $request .= " ORDER BY `surname_field` DESC";
}
// Sortowanie SEX
$order_by_sex='up';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_sex_up' && !empty($_GET['action'])){
    $order_by_sex='down';
    $request .= " ORDER BY `sex_field` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_sex_down' && !empty($_GET['action'])){
    $order_by_sex='up';
    $request .= " ORDER BY `sex_field` DESC";
}
//SORTOWANIE E-MAIL
$order_by_e_mail = 'up';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_e_mail_up' && !empty($_GET['action'])){
    $order_by_e_mail = 'down';
    $request .= " ORDER BY `e_mail_field` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_e_mail_down' && !empty($_GET['action'])){
    $order_by_e_mail = 'up';
    $request .= " ORDER BY `e_mail_field` DESC";
}

?>

<!--- Klawisze do filtrowania --->

<a href="?page=users&action=filter_by_sex_<?php echo $filter_by_sex ?>"><button type="button" class="btn brn-default dropdown-toggle">Filter by SEX</button></a>
<a href="?page=users&action=filter_by_good_first_question"><button type="button">Filter by good 1st Question</button></a>
<a href="?page=users&action=filter_by_good_second_question"><button type="button">Filter by good 2st Question</button></a>
<a href="?page=users&action=filter_by_good_all_question"><button type="button">Filter by good all Question</button></a>
<br>

<!--- Klawisze do sortowania --->

<a href="?page=users&action=order_by_name_<?php echo $order_by_name ?>"><button type="button">Order by Name</button></a>

<a href="?page=users&action=order_by_surname_<?php echo $order_by_surname ?>"><button type="button">Order by Surname</button></a>

<a href="?page=users&action=order_by_sex_<?php echo $order_by_sex ?>"><button type="button">Order by Sex</button></a>

<a href="?page=users&action=order_by_e_mail_<?php echo $order_by_e_mail ?>"><button type="button">Order by e-mail</button></a>

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