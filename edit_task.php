<?php include"includes/config.php";
  $sql_details=mysql_query("SELECT name,description FROM soding WHERE id=".$_GET['id']);
  $row_details=mysql_fetch_array($sql_details);
  $name=$row_details['name'];
  $description=$row_details['description'];
  
  if(isset($_POST['submit'])){
    $name=mysql_real_escape_string($_POST['name']);
    $description=mysql_real_escape_string($_POST['description']);
    $sql=mysql_query("UPDATE soding SET name='$name',description='$description',dateUpdated='$current_time' WHERE id=".$_GET['id']);
    if($sql){
      echo "<script language= 'JavaScript'>alert('Task Updated.');</script>";
    }
    else
      echo "<script language= 'JavaScript'>alert('Failed. Try again later.');</script>";
     // echo mysql_error();;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SODING</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <?php include"includes/nav.php"; ?>
      <div class="row">
        <div class="col-sm-12">
          <h3>Edit Task</h3><a href="list_task.php" class="btn btn-primary">LIST TASK</a>
          <form class="form-horizontal" method='POST' action="">
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" value='<?php echo $name; ?>' placeholder="Enter Name" required="required">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="name">Description:</label>
              <div class="col-sm-10"> 
                <textarea class="form-control" name="description" placeholder="Enter Description"><?php echo $description; ?></textarea> 
              </div>
            </div>
            <div class="form-group"> 
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name='submit' class="btn btn-default">Edit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php include"includes/footer.php"; ?>
    </div>

  </body>
</html>
