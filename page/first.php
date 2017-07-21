<?php

$dbconnect = new DbConnect();
$request = "SELECT `code`, `active` FROM `codes`";
$result = $dbconnect->db->query($request);

?>

    <div id="nag1" class="container">
    <p>
        This is the training application “Contest for Warsaw”. It has fictional customer - the city of Warsaw. 
        Its purpose is to provide on-line contest for citizens. Application has three pages for users (citizens): 
        Welcome, Questionnaire and Summary. Only citizens having special 10-character alphanumeric code, can take 
        part in the contest. Otherwise they can not leave first page.
        On the second page all contact data are gathered from users in different type of inputs. 
        All data are validated. After that citizen is answering 4 questions. Second question appears after 
        answering first one, third after answering second etc. There are also rules and contact info. 
        After filling all blanks and answering all questions user is directed to the third page displaying 
        all data he put including right answers. The same data is being sent to user via e-mail provided in the form.
        <br>
        <br>Link to application: <a href="http://tu-i-teraz.com.pl/contest/">http://tu-i-teraz.com.pl/contest/</a>
        <br>Contest codes (1 for valid, 0 for used): 
        
        <?php
            while($row = $result->fetch_object()){
                echo "$row->code ($row->active); ";
            }   
        ?>

        
    </p>
    </div><br>
    

    <?php

    if(isset($_POST['button_code'])){

        $contest_code = trim($_POST['contest_code']);
        $check_code = "SELECT * FROM `codes` WHERE `code`='$contest_code'";
        $result = $dbconnect->db->query($check_code);
        $another = $result->fetch_object();

    //    var_dump($another->active);
    //    die();

        if($result->num_rows!=0 && $another->active == 1){
     
            header("Location:index.php?page=second&contest_code=$contest_code");
        } elseif ($result->num_rows!==0 && $another->active == 0){
            echo '  <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <strong>Your code is already used!</strong>
                    </div>';
        } else {
            echo '  <div class="alert alert-danger alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <strong>Wrong code!</strong>
                    </div>';

        } 
    }
    ?>
   
    <!--Form -->
    
    <form method="post" class="form-horizontal">

        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput"></label>  
            <div class="col-md-4">
                <input name="contest_code" placeholder="Place Your code here" class="form-control input-md" type="text"> 
            </div>
        </div>

        <!-- Button -->
    
        <div class="form-group">
            <label class="col-md-4 control-label" for="singlebutton"></label>
            <div class="col-md-4">
                <input type="submit" name="button_code" class="btn btn-primary" value="Send">
            </div>
        </div>
        
    </form>

    <div id="nag2" class="container">
        <p>       
            The application has also admin console for customer with logging page (as well as remind page and recovery 
            page in case of password forgotten) and list of all participated users. List of users has sorting and filtering 
            button referring to different type of categories. It has also log out page. Without authorisation You can not 
            enter the admin panel even when having a link. In order to change password You need to have security number - 
            same for all 3 admins.
            <br>
            <br>Link to admin panel: <a href="http://tu-i-teraz.com.pl/contest/index.php?page=login">http://tu-i-teraz.com.pl/contest/index.php?page=login</a>
            <br>Logins/password: punisher/contest1, chninkel2/contest, brian/contest3
            <br>Security number: 1234

        </p>
    </div>

    <div class="container">
        <div class="row">   
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
   
                    <div class="carousel-inner" role="listbox">
    
                        <div class="item active">
                            <img src="img/slider1.jpg" alt="" style="width:100%;">
                            <div class="carousel-caption">
                            </div>
                        </div>
    
                        <div class="item">
                            <img src="img/slider2.jpg" alt="" style="width:100%;">
                            <div class="carousel-caption">
                            </div>
                        </div>
    
                        <div class="item">
                            <img src="img/slider3.jpg" alt="" style="width:100%;">
                            <div class="carousel-caption">
                            </div>
                        </div>

                    </div>
                </div>
  
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
