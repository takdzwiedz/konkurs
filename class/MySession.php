<?php

class MySession {
    
    function __construct() {
        
        session_start();
        
    }
    
    function sessStart($login, $haslo){
        
        $polacz = new DbConnect();
        $zapytanie = "SELECT * FROM `admin` WHERE `login` = '$login' AND `haslo` = '$haslo'";
        $wynik = $polacz->db->query($zapytanie);
        $wynik2 = $wynik->fetch_object();
              
        if ($wynik->num_rows==1){
                                   
            $_SESSION['identyfikator_sesji'] = session_id();
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['login'] = $wynik2->login;
            $_SESSION['klient'] = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['id_admin'] = $wynik2->id_admin;

            
            header('Location:index.php?page=users');
            exit();
            
        } else {
            
            header('Location:index.php?page=login');
            
            exit();
        }
        
    }
    
    function sessVer () {
        
        if(!isset($_SESSION['id_admin']) 
        || $_SESSION['identyfikator_sesji'] != session_id() 
        || $_SESSION['ip'] != $_SERVER['REMOTE_ADDR']
        || $_SESSION['klient'] != $_SERVER['HTTP_USER_AGENT'])
        {
        header('Location:index.php');
        exit();
        }
        
    }
    
    function sessEnd () {

        $_SESSION[] = array();
        session_regenerate_id(); 
        session_destroy();
        header('Location:index.php?page=login');
        exit();
        }

    
}
