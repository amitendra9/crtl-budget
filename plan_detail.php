<?php 
require './includes/common.php';
if (isset($_POST['initialBudget']) && isset($_POST['peoples'])){
  $people = $_POST['peoples'];
  $initialBudget = $_POST['initialBudget'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plan Deatail Page | CTRL Budget</title>
  <?php require './includes/style.php';?>
</head>
<body>
  <?php require './includes/header.php';?>

  <div id='content' >
    <div class='container'>
      <div class="col-md-6 col-md-offset-3">
        <div class='panel panel-default'>
          <div class='panel-body'>
            <form action='home.php' method='post'>
              <div>
                <div class='form-group'>
                  <label>Title</label>
                  <input type='text' class='form-control' name='title' placeholder='Enter title (Ex. Trip to Goa)'/>
                </div>
                <div class='form-group'>
                  <div class='row'>
                    <div class='col-sm-6'>
                      <label>From</label>
                      <input type='date'  class='form-control'/>
                    </div>
                    <div class='col-sm-6'>
                      <label>To</label>
                      <input type='date' class='form-control' />
                    </div>
                  </div>
                </div>
                <div class='form-group'>
                  <div class='row'>
                    <div class='col-sm-8'>
                      <label>Initial Budget</label>
                      <input type='text'  class='form-control'value='<?= $initialBudget?>'/>
                    </div>
                    <div class='col-sm-4'>
                      <label>No. of people</label>
                      <input type='text'  class='form-control' value='<?= $people?>'/>
                    </div>
                  </div> 
                </div>
                <?php $i=1; while($people){ ?>
                  <div class='form-group'>
                    <label>Person <?= $i;?></label>
                    <input type='text' class='form-control' placeholder='Person <?= $i;?> Name' />
                  </div>

                <?php $i++; $people--; }?>
                
                <div class='form-group'>
                  <button type='submit' class='btn btn-primary btn-block'>Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





<?php require './includes/footer.php';?>

</body>
</html>