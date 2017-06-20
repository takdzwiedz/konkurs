<?php

class Account extends DbConnect {
    
    
    function changePassAccount($zapytanie, $mail, $sec){
        
        $wynik = $this->db->query($zapytanie);
        
        if($wynik->num_rows == 1){
            
            $mail_change_pass = new SendMail(E_MAIL_ADMIN);
            $message = "<a href=\"".WITRYNA."odzyskanie_hasla.php?mail=$mail&sec=$sec\"> Kliknij link, aby zmienić hasło </a>";
            $mail_change_pass->mail($mail, 'Odzyskiwanie hasła', $message);
                    
        } else {
            
            echo 'W mojej bazie nie ma takiego maila';
            
        }
    }
    
    function delAccount(){
        

    }
}