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
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">SODING</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li>
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Task <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="list_task.php">List</a></li>
              </ul>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
    <div class="row">
      <div class="col-sm-12">
        <h3>Collapsible Navbar</h3>
        <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
        <p>Only when the button is clicked, the navigation bar will be displayed.</p>
      </div>
    </div>
    <?php include"includes/footer.php"; ?>
  </div>

  </body>
</html>
