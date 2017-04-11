<?php

define('E_MAIL_ADMIN','admin@example.com');
define('SERVER','localhost');
define('USER','root');
define('PASSWORD','');
define('DB','konkurs');


function __autoload($className){ // funkcja zaczytuje klasy zaczytuje pliki 

    require 'class/'.$className.'.php';
    
}