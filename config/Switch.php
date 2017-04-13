<?php

$page = 'strona_z_kodem';
$title = 'Konkurs';
    
if(isset($_GET['page'])){
  $page = $_GET['page'];
    

    switch ($page){

        case('start'):

            $page = 'start';
            $title = 'Konkurs';
             break;
         case('dlaKlienta'):

            $page = 'dlaKlienta';
            $title = 'dlaKlienta';
             break;
         case('koncowa'):

            $page = 'koncowa';
            $title = 'koncowa';
             break;
//         case('strona_z_kodem'):
//
//            $page = 'strona_z_kodem';
//            $title = 'strona_z_kodem';
//             break;
        default:
          
            $page = 'strona_z_kodem';
    }
    
}