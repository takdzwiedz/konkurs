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
            $title = 'Contenst about Warsaw - Summary';
            break;
                   
        case('users'):

            $page = 'users';
            $title = 'Users';
            break;
 
        case('login'):

            $page = 'login';
            $title = 'Login';
            break;
        
        case('remind'):

            $page = 'remind';
            $title = 'Remind password';
            break;
        
        case('recovery'):

            $page = 'recovery';
            $title = 'Password recovery';
            break;
        
        default:
          
            $page = 'first';
            $title = 'Contenst about Warsaw - Welcome';
    }
    
}