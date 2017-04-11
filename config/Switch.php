<?php

$page = 'start';
$title = 'Contest about Warsaw';
    
if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page){

        case('users'):

            $page = 'users';
            $title = 'List of participants';
            break;
         
        default:

            $page = 'start';
            $title = 'Contest about Warsaw';
    }
}