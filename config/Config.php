<?php

define('E_MAIL_ADMIN','konkurs-warszawa@serwer1765054.home.pl');
define('SERVER','localhost');
define('USER','root');
define('PASSWORD','');
define('DB','konkurs');


function __autoload($className){ // funkcja zaczytuje klasy zaczytuje pliki 

    require 'class/'.$className.'.php';
    
}