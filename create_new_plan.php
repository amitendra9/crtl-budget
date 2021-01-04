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
        
        
        <div id="content" class="container-fluid">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4 class='text-center'>Create New Plan</h4>
                    </div>
                    <div  class="panel-body">
                        <form action="plan_detail.php" method="POST">
                            <div class="form-group">
                                <label>Initial Budget</label>
                                <input type="text" class="form-control" id='initialBudget' placeholder='Initial Budget (Ex. 4000)' name='initialBudget' required/>
                            </div>
                            <div class="form-group">
                                <label>How many peoples you want to add in your group?</label>
                                <input type="text" class="form-control" placeholder='No. of people' name='peoples' required/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Next"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        
        ?>
        <?php require './includes/footer.php';?>
    </body>
</html>