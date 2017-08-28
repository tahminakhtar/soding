<?php include"includes/config.php";?>
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
        <h3>List All Task</h3><a href="add_task.php" class="btn btn-primary">ADD TASK</a>
        <div class="table-responsive">
                    
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Date Created</th>
                <th>Date Updated</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $sql_list=mysql_query("SELECT id, name, description, dateCreated, dateUpdated FROM soding");
                while ($row_list=mysql_fetch_array($sql_list)) 
                {
                  if(strlen($row_list['name'])>50){
                    $row_list['name']= substr($row_list['description'], 0, 50) . '...';
                  }
                  if(strlen($row_list['description'])>50){
                    $row_list['description']= substr($row_list['description'], 0, 50) . '...';
                  }
                  echo "<tr>
                  <td>".$row_list['id']."</td>
                  <td>".$row_list['name']."</td>
                  <td>".nl2br($row_list['description'])."</td>
                  <td>".$row_list['dateCreated']."</td>
                  <td>".$row_list['dateUpdated']."</td>
                  <td><a href='edit_task.php?id=".$row_list['id']."'>Edit</a><br>
                    <a href='delete_task.php?id=".$row_list['id']."'>Delete</a></td>
                  </tr>";
                } 
              ?>
            </tbody>
          </table>
          </div>
      </div>
    </div>
    <?php include"includes/footer.php"; ?>
  </div>

  </body>
</html>
