<?php
    
require_once 'config/Config.php';
require_once 'config/Switch.php';
require_once 'lib/function.php';

?>
<!DOCTYPE html>

<html>
    
    <head>
        
        <meta charset="UTF-8">
        <link href="signin.css" rel="stylesheet">
        <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style/style.css">
        <link rel="stylesheet" href="style/bootstrap.css">
        <link rel="stylesheet" href="style/bootstrap-theme.min.css">
        <link rel="stylesheet" href="style/bootstrap-theme.css">
        <link rel="stylesheet" href="style/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="scripts/question_display.js"></script>
        <script src="scripts/error_dispaly.js"></script>
        <link rel="stylesheet" href="styles/style.css">
        <title><?php echo $title; ?></title>
        
    </head>
    
    <body>
        <header>

            <div class="jumbotron">
                <h3>Contest about Warsaw</h3>
                <img class="center" src="http://symbole.um.warszawa.pl/sites/default/files/symbole.um.warszawa.pl/ZNAK_PROMOCYJNY_FC_PL-01.jpg" alt="" style="height:200px">
            </div>

        </header>
        
        <?php
        require_once "page/$page.php";
        ?>
        
        <footer>
            
        <div class="container">
            <div id="kontakt" class="row">
                <div class="span4 proj-div" data-toggle="modal" data-target="#GSCCModal" style="cursor:pointer">Contact</div>

                <div id="GSCCModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>
                                <h4 class="modal-title" id="myModalLabel">Kontakt Urząd m.st. Warszawy</h4>
                            </div>
                            <div class="modal-body">
                                Adres: plac Bankowy 3/5<br> 00-950 Warszawa<br> Godziny otwarcia: 08:00 - 16:00<br> mail: kontakt@umwarszawa.pl

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="regulamin" class="row">
                <div class="span4 proj-div" data-toggle="modal" data-target="#GSCCModal1" style="cursor:pointer">Rules</div>

                <div id="GSCCModal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;  </button>

                                <h4 class="modal-title" id="myModalLabel">Rules</h4>

                            </div>
                            <div class="modal-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In harum molestiae ratione vel laboriosam quo.<br> &sect;1
                                <br> Paragraph
                                <br> &sect;2
                                <br> Paragraph
                                <br> &sect;3
                                <br> Paragraph
                                <br> &sect;4
                                <br> Paragraph
                                <br> &sect;5
                                <br> Paragraph
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>
            <p><strong>Copyright &copy; Urząd m.st. Warszawy 2017</strong></p>

        </div>
            
    </footer>
        
    </body>
</html>
