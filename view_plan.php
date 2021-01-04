<?php require './includes/common.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Plan | CTRL Budget</title>
  <?php require './includes/style.php';?>
</head>
<body>
  <?php require './includes/header.php';?>
  <div id='content'>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="panel-title text-center">
                My plan 
                <span style="float:right" class="glyphicon glyphicon-user"> </span>
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
              
            </div>

          </div>
        </div>
        <div class="col-md-offset-2 col-md-4">
          <div style='margin:10vh 0vh;'>
            <a href="expense_distribution.php" class='btn btn-lg btn-primary' >Expense Distribution</a>
          </div>
        
          <div class="panel panel-primary">
            <div class="panel-heading">
              <div class="panel-title text-center">Add New Expense</div>
            </div>
            <div class="panel-body">
              <form>
                <div class="form-group">
                  <label for="">Title</label>
                  <input type="text" class="form-control" placeholder="Expense Name"/>
                </div>
                <div class="form-group">
                  <label for="">Date</label>
                  <input type="date" class="form-control"/>
                </div>
                <div class="form-group">
                  <label for="">Amount Spent</label>
                  <input type="text" class="form-control" placeholder="Amount Spent">
                </div>
                <div class="form-group">  
                  <select name="" id="" class=form-control>
                    <option value="" selected>Choose</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Upload Bill</label>
                  <input type="file" class="form-control"name='uploadBill'/>
                </div>
                <div class="">
                  <button type='submit' class='btn btn-primary btn-block' > Add</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <?php require './includes/footer.php';?>
</body>
</html>