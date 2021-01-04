<?php require 'includes/common.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign Up | Lifestyle Store</title>
        <?php require 'includes/style.php'; ?>
    </head>
    <body>
        <?php require 'includes/header.php'; ?>
        
        
        <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <h2>SIGN UP</h2>
                        <?php
                            if(isset($_GET['m1'])){
                                echo '<i>'.$_GET['m1'].'</i>';
                            }
                        ?>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Full Name" name="name"  required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Enter Valid Email"  name="email" required><?php
                                if(isset($_GET['m1'])){
                                 echo $_GET['m1'] ;
                                }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password (min 6 character)" name="password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Valid Phone Number(Ex.8448444853)" maxlength="10" size="10" name="phone" required><?php
                                if(isset($_GET['m2'])){
                                 echo $_GET['m2'] ;
                                }
                                ?>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!--footer-->
        <?php require 'includes/footer.php';?>
        <!-- footer end-->
    </body>
</html>
