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
        <script src="scripts/jquery-3.2.0.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles/style.css">

        <title><?php $title; ?></title>
    </head>
    <body>
        
        <?php
        require_once "page/$page.php";
        ?>
        
    </body>
</html>
