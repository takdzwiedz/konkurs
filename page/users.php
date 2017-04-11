<?php
require_once 'config/Config.php';

$connection = new DbConnect();

?>

<!--- Klawisze do filtrowania --->

<a href="?page=users&action=filter_by_sex_m"><button type="button">Filter by  MALE</button></a>
<a href="?page=users&action=filter_by_sex_f"><button type="button">Filter by Sex FEMALE</button></a>

<a href="?page=users&action=filter_by_good_first_question"><button type="button">Filter by good 1st Question</button></a>
<a href="?page=users&action=filter_by_good_second_question"><button type="button">Filter by good 2st Question</button></a>
<a href="?page=users&action=filter_by_good_all_question"><button type="button">Filter by good all Question</button></a>
<br>

<!--- Klawisze do sortowania --->

<a href="?page=users&action=order_by_name_up"><button type="button">Order by Name UP</button></a>
<a href="?page=users&action=order_by_name_down"><button type="button">Order by Name DOWN</button></a>

<a href="?page=users&action=order_by_surname_up"><button type="button">Order by Surname UP</button></a>
<a href="?page=users&action=order_by_surname_down"><button type="button">Order by Surname DOWN</button></a>

<a href="?page=users&action=order_by_sex_up"><button type="button">Order by Sex UP</button></a>
<a href="?page=users&action=order_by_sex_down"><button type="button">Order by Sex DOWN</button></a>

<a href="?page=users&action=order_by_e_mail_up"><button type="button">Order by e-mail UP</button></a>
<a href="?page=users&action=order_by_e_mail_down"><button type="button">Order by e-mail DOWN</button></a>

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
            
            $request = "SELECT * FROM `uzytkownicy`";
            
            //Filtrowanie
            
            //Filtrowanie SEX
            
            if(isset($_GET['action']) && $_GET['action']=='filter_by_sex_m'){
                $request .= "WHERE `sex_field`='male'";
            }
            if(isset($_GET['action']) && $_GET['action']=='filter_by_sex_f'){
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
            
            if(isset($_GET['action']) && $_GET['action'] == 'order_by_name_up' && !empty($_GET['action'])){
                $request .= " ORDER BY `name_field` ASC";
            }
            if(isset($_GET['action']) && $_GET['action'] == 'order_by_name_down' && !empty($_GET['action'])){
                $request .= " ORDER BY `name_field` DESC";
            }
            //Sortowanie SURNAME
            if(isset($_GET['action']) && $_GET['action'] == 'order_by_surname_up' && !empty($_GET['action'])){
                $request .= " ORDER BY `surname_field` ASC";
            }
            if(isset($_GET['action']) && $_GET['action'] == 'order_by_surname_down' && !empty($_GET['action'])){
                $request .= " ORDER BY `surname_field` DESC";
            }
            // Sortowanie SEX
            if(isset($_GET['action']) && $_GET['action'] == 'order_by_sex_up' && !empty($_GET['action'])){
                $request .= " ORDER BY `sex_field` ASC";
            }
            if(isset($_GET['action']) && $_GET['action'] == 'order_by_sex_down' && !empty($_GET['action'])){
                $request .= " ORDER BY `sex_field` DESC";
            }
            //SORTOWANIE E-MAIL
            if(isset($_GET['action']) && $_GET['action'] == 'order_by_e_mail_up' && !empty($_GET['action'])){
                $request .= " ORDER BY `e_mail_filed` ASC";
            }
            if(isset($_GET['action']) && $_GET['action'] == 'order_by_e_mail_down' && !empty($_GET['action'])){
                $request .= " ORDER BY `e_mail_filed` DESC";
            }
            
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
                        <td>$row->e_mail_filed</td>
                        <td>$row->phone_filed</td>
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