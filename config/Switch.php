<?php

$page = 'first';
$title = 'Contenst about Warsaw - Welcome';
    
if(isset($_GET['page'])){
  $page = $_GET['page'];
    

    switch ($page){

        case('second'):

            $page = 'second';
            $title = 'Contenst about Warsaw - Questionnaire';
            break;
        
        case('dlaKlienta'):

            $page = 'dlaKlienta';
            $title = 'dlaKlienta';
            break;
        
        case('koncowa'):

            $page = 'koncowa';
            $title = 'koncowa';
            break;
        
        case ('third'):
            
            $page = 'third';
            $title = 'Contenst about Warsaw - Results';
            break;
                
        default:
          
            $page = 'first';
            $title = 'Contenst about Warsaw - Welcome';
    }
    
}