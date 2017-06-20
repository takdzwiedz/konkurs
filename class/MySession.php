<?php

class MySession {
    
    function __construct() {
        
        session_start();
        
    }
    
    function sessStart($login, $haslo){
        
        $connect = new DbConnect();
        $request = "SELECT * FROM `admin` WHERE `login` = '$login' AND `haslo` = '$haslo'";
        $result = $connect->db->query($request);
        $catch = $result->fetch_object();
              
        if ($result->num_rows==1){
                                   
            $_SESSION['session_id'] = session_id();
            $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
            $_SESSION['login'] = $catch->login;
            $_SESSION['client'] = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['id_admin'] = $catch->id_admin;

            
            header('Location:index.php?page=users');
            exit();
            
        } else {
            
            header('Location:index.php?page=login');
            
            exit();
        }
        
    }
    
    function sessVer () {
        
        if(!isset($_SESSION['id_admin']) 
        || $_SESSION['session_id'] != session_id() 
        || $_SESSION['ip'] != $_SERVER['REMOTE_ADDR']
        || $_SESSION['client'] != $_SERVER['HTTP_USER_AGENT'])
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
