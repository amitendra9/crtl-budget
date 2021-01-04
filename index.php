<?php require './includes/common.php';
if(isset($_SESSION['email'])){
    header('location:home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ct&#8377;l Budget</title>
        <?php require './includes/style.php';?>
    </head>
    <body>
        <?php require './includes/header.php';?>
        
        
        <div id="content" class="container-fluid">
            <div id="banner_image">
                <center>
                    <div id="banner_content">
                        <h1>We help you control your budget</h1>
                        <a href="login.php" class="btn btn-primary btn-lg">Start Today</a>
                    </div>
                </center>
            </div>
            
        </div>
        <?php
        // put your code here
        ?>
        <?php require './includes/footer.php';?>
    </body>
</html>
