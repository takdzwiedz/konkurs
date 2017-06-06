<?php

$sess = new MySession();
$sess->sessVer();

$connection = new DbConnect();

$request = "SELECT * FROM `users`";

//Filtering

//Filtering by SEX

$filter_by_sex = 'f';
if(isset($_GET['action']) && $_GET['action']=='filter_by_sex_m'){
    $request .= "WHERE `sex_field`='male'";
}
if(isset($_GET['action']) && $_GET['action']=='filter_by_sex_f'){
    $request .= "WHERE `sex_field`='female'";
}
//Filtering by 1st right questions

$filter_by_good_question = 'first';
if(isset($_GET['action']) && $_GET['action']=='filter_by_good_first_question'){
    $request .= "WHERE `first_question`='1 748 916'";
}
//Filtering by 2nd right questions

if(isset($_GET['action']) && $_GET['action']=='filter_by_good_second_question'){
    $request .= "WHERE `second_question`='7'";
}
//Filtering by 3rd right question

if(isset($_GET['action']) && $_GET['action']=='filter_by_good_third_question'){
    $request .= "WHERE `third_question`='Ignacy Wyssogota Zakrzewski'";
}
//Filtering by 4th right question
if(isset($_GET['action']) && $_GET['action']=='filter_by_good_forth_question'){
    $request .= "WHERE `forth_question`='Hanna Gronkiewicz Waltz'";
}

//Filtrowania oba pytania
if(isset($_GET['action']) && $_GET['action']=='filter_by_good_all_question'){
    $request .= "WHERE `first_question`='1 748 916' AND `second_question`='7' AND `third_question`='Ignacy Wyssogota Zakrzewski' AND `forth_question`='Hanna Gronkiewicz Waltz'";
}
// SORTING

//Sorting by NAME
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
//Sorting by SURNAME
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
// Sorting by SEX
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
//Sorting by E-MAIL
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
// order by city name
$order_by_city_name= 'up';
 $button_city_name = 'Order by city name ↑';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_city_name_up' && !empty($_GET['action'])){
    $button_city_name = 'Order by city name ↑';
    $order_by_city_name= 'down';
    $request .= " ORDER BY `city_name` DESC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_city_name_down' && !empty($_GET['action'])){
    $button_city_name = 'Order by city name ↓';
    $order_by_city_name= 'up';
    $request .= " ORDER BY `city_name` ASC";
}
//order by country 
$order_by_country_name='up';
$button_country_name='Order by country ↑';
if(isset($_GET['action']) && $_GET['action'] == 'order_by_country_name_up' && !empty($_GET['action'])){
    $button_country_name = 'Order by country ↓';
    $order_by_country_name= 'down';
    $request .= " ORDER BY `country` ASC";
}
if(isset($_GET['action']) && $_GET['action'] == 'order_by_country_name_down' && !empty($_GET['action'])){
    $button_country_name = 'Order by country ↑';
    $order_by_country_name= 'up';
    $request .= " ORDER BY `country` DESC";
}

if (isset ($_GET['action']) && $_GET['action'] == 'logout' && !empty($_GET['action'])) {
     
    $sess->sessEnd();
}
?>

<!--- Filtering dropdown buttons --->

<div class="btn-group">
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 Filter by sex <span class="caret"></span>
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
    <li><a href="?page=users&action=filter_by_good_third_question"><button type="button" class="btn btn-success dropdown-toggle">Filter by good Good 3rd Answer</button></a></li>
    <li><a href="?page=users&action=filter_by_good_forth_question"><button type="button" class="btn btn-success dropdown-toggle">Filter by good Good 4th Answer</button></a></li>
    <li><a href="?page=users&action=filter_by_good_all_question"><button type="button" class="btn btn-success dropdown-toggle">Filter by good Good All Answer</button></a></li>
    <li>
  </ul>
</div>

<!--- Sorting buttons --->

<a href="?page=users&action=order_by_name_<?php echo $order_by_name ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_name_name ?></button></a>
<a href="?page=users&action=order_by_surname_<?php echo $order_by_surname ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_name_surname ?></button></a>
<a href="?page=users&action=order_by_sex_<?php echo $order_by_sex ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_name_sex ?></button></a>
<a href="?page=users&action=order_by_city_name_<?php echo $order_by_city_name ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_city_name ?></button></a>
<a href="?page=users&action=order_by_country_name_<?php echo $order_by_country_name ?>"><button type="button" class="btn btn-primary dropdown-toggle"><?php echo $button_country_name ?></button></a>

<!--- Clear filtering and sorting buttons --->

<a href="?page=users"><button type="button" class="btn btn-primary dropdown-toggle">Clear Filtering And Ordering</button></a>
<a href="?page=users&action=logout"><button type="button" class="btn btn-default">Log out</button></a>

<!---  Table structure --->

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

// Displaying users

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
        </tr>
        ";
}
// End of displaying users
?>
            
    </thead>
</table>
