<?php

$page = 'start';
$title = 'Konkurs';
    
if(isset($_GET['page'])){
    $page = $_GET['page'];
    

    switch ($page){

        case('zaloz_konto'):

            $page = 'start';
            $title = 'Konkurs';
             break;
        default:
          
            $page = 'start';
    }
}