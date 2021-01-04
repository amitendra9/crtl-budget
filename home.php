<?php require './includes/common.php';?>
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
        
        
        <div id="content" class="container">
            <div>
                <h3>You didn't have any acyive plans</h3> 
            </div>
            
            <div class="col-md-4 col-md-offset-4">
                <center>
                    <div class="thumbnail">
                        <a href="create_new_plan.php"><span class="glyphicon glyphicon-plus-sign"> </span> Create a new plan</a>
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


