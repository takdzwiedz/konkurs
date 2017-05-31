<?php

$dbconnect = new DbConnect();

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
        echo '<span class="error">Your code is already used.</span>';
    } else {
        echo '<span class="error">Wrong code.</span>';
    }   
}

?>

    <div id="nag1" class="container">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dicta dolor aliquam, inventore saepe nulla ipsum molestiae similique, in velit, quisquam rerum necessitatibus quae reiciendis voluptatum nisi quaerat. Aliquid vero labore, itaque ullam voluptas. Dicta, atque. Error illo numquam, velit dolor saepe autem, vitae pariatur, eligendi veritatis, delectus eius ullam. Alias eos doloribus, dignissimos iste? Voluptatibus similique obcaecati enim quaerat voluptatem esse molestias itaque, totam odio quia, maiores, sint! Minima autem perspiciatis enim, suscipit dolor ex libero distinctio soluta! Suscipit tempore laudantium sapiente, eveniet cum. Facilis quis minima omnis, odio atque laborum necessitatibus enim! Quas dolore aliquam, veniam voluptas dicta fugiat! Eius iste similique ipsum. Quo beatae repellat laborum, voluptatibus ipsam aliquam, fugit minima cumque voluptatem molestias natus quod, eos at. Fugiat commodi excepturi incidunt suscipit quidem iste cumque nostrum quaerat expedita esse odio voluptate nisi culpa quis accusamus eaque architecto nesciunt deserunt mollitia, natus nam consequatur dolorum id! Laboriosam officiis, quos et cum voluptatem molestiae harum reprehenderit illum totam iure, voluptate, ipsam ea impedit dolore magni porro illo architecto repellat suscipit labore expedita quibusdam. Aperiam dolore dicta illum ducimus reiciendis quisquam, omnis quae obcaecati sint, fugit excepturi quibusdam nisi dignissimos tenetur harum tempora, asperiores molestiae, soluta vel natus cupiditate!</p>
    </div><br>
    
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
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci dicta dolor aliquam, inventore saepe nulla ipsum molestiae similique, in velit, quisquam rerum necessitatibus quae reiciendis voluptatum nisi quaerat. Aliquid vero labore, itaque ullam voluptas. Dicta, atque. Error illo numquam, velit dolor saepe autem, vitae pariatur, eligendi veritatis, delectus eius ullam. Alias eos doloribus, dignissimos iste? Voluptatibus similique obcaecati enim quaerat voluptatem esse molestias itaque, totam odio quia, maiores, sint! Minima autem perspiciatis enim, suscipit dolor ex libero distinctio soluta! Suscipit tempore laudantium sapiente, eveniet cum. Facilis quis minima omnis, odio atque laborum necessitatibus enim! Quas dolore aliquam, veniam voluptas dicta fugiat! Eius iste similique ipsum. Quo beatae repellat laborum, voluptatibus ipsam aliquam, fugit minima cumque voluptatem molestias natus quod, eos at. Fugiat commodi excepturi incidunt suscipit quidem iste cumque nostrum quaerat expedita esse odio voluptate nisi culpa quis accusamus eaque architecto nesciunt deserunt mollitia, natus nam consequatur dolorum id! Laboriosam officiis, quos et cum voluptatem molestiae harum reprehenderit illum totam iure, voluptate, ipsam ea impedit dolore magni porro illo architecto repellat suscipit labore expedita quibusdam. Aperiam dolore dicta illum ducimus reiciendis quisquam, omnis quae obcaecati sint, fugit excepturi quibusdam nisi dignissimos tenetur harum tempora, asperiores molestiae, soluta vel natus cupiditate!</p>
    </div>

    <div class="container">
        <div class="row">
    
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
   
                    <div class="carousel-inner" role="listbox">
    
                        <div class="item active">
                            <img src="img/slider1.jpg" alt="">
                            <div class="carousel-caption">
                            </div>
                        </div>
    
                        <div class="item">
                            <img src="img/slider2.jpg" alt="">
                            <div class="carousel-caption">
                            </div>
                        </div>
    
    
                        <div class="item">
                            <img src="img/slider3.jpg" alt="">
                            <div class="carousel-caption">
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/slider1.jpg" alt="">
                            <div class="carousel-caption">
                            </div>
                        </div>
    
                        <div class="item">
                            <img src="img/slider2.jpg" alt="">
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
