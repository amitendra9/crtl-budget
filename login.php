<?php require 'includes/common.php';

if(isset($_SESSION['email'])){
    header('location:home.php');
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login | Lifestyle Store</title>
        <?php require 'includes/style.php'; ?>
    </head>
    <body>
        <?php require 'includes/header.php'; ?>
        
        <div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title text-center"><b>LOGIN</b></h3></div>
                                <div class='panel-body'>
                                <form role="form" action="login_submit.php" method="POST">
                                    <?php
                                        if(isset($_GET['m1'])){
                                            echo '<i>'.$_GET['m1'].'</i>';
                                        }
                                    ?>
                                    <div class="form-group">
                                        <label for='email'><b>Email:</b></label>
                                        <input type="email" class="form-control"  id="email" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for='pass'><b>Password:</b></label>
                                        <input type="password" class="form-control" id="pass" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button><br><br>
                                </form>
                                </div>
                                <div class='panel-footer'>
                                    <p>Don't have an account? <a href="signup.php" class="" >Click here to Sign Up</a></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer-->
        <?php require 'includes/footer.php';?>
        <!-- footer end-->
    </body>
</html>