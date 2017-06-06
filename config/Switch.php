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
        
        case ('third'):
            
            $page = 'third';
            $title = 'Contenst about Warsaw - Results';
            break;
                   
        case('users'):

            $page = 'users';
            $title = 'Users';
            break;
 
        case('login'):

            $page = 'login';
            $title = 'Login';
            break;
        
        
        default:
          
            $page = 'first';
            $title = 'Contenst about Warsaw - Welcome';
    }
    
}