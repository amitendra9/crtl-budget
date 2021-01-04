<?php require'./includes/common.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Expense Distribution | CTRL Budget</title>
  <?php require'./includes/style.php';?>
</head>
<body>
<?php require'./includes/header.php'?>
  <div id="content">
    <div class="container-fluid decor_bg" id="login-panel">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div class="panel-title text-center"> 
                My Plan
                <span style="float:right" class="glyphicon glyphicon-user"></span>
              </div>
            </div>
            <div class="panel-body">

            <div class="row form-group">
                <div class='col-md-6'><b>Budget</b></div>
                <div class='col-md-6'><span style='float:right'>1000</span></div>
              </div>
              <div class="row form-group">
                <div class='col-md-6'><b>Remaining Amount</b></div>
                <div class='col-md-6'><span style='float:right'>1000</span></div>
              </div>
              <div class="row form-group">
                <div class='col-md-6'><b>Date</b></div>
                <div class='col-md-6'><span style='float:right'>Jan 2021</span></div>
              </div>
              <div class="row form-group">
                <div class='col-md-6'><b>Budget</b></div>
                <div class='col-md-6'><span style='float:right'>1000</span></div>
              </div>
              <div class="row form-group">
                <div class='col-md-6'><b>Remaining Amount</b></div>
                <div class='col-md-6'><span style='float:right'>1000</span></div>
              </div>
              <div class="row form-group">
                <div class='col-md-6'><b>Date</b></div>
                <div class='col-md-6'><span style='float:right'>Jan 2021</span></div>
              </div>
              <div class="row form-group">
                <div class='col-md-6'><b>Budget</b></div>
                <div class='col-md-6'><span style='float:right'>1000</span></div>
              </div>
              <div class="row form-group">
                <div class='col-md-6'><b>Remaining Amount</b></div>
                <div class='col-md-6'><span style='float:right'>1000</span></div>
              </div>
              <div class='text-center'>
                <a href="view_plan.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Go back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php require'./includes/footer.php'?>

</body>
</html>