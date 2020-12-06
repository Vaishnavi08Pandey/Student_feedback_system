<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="nav-item active"><a class="nav-link" href="dashboard.php">Hello,Admin</a></div>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class=" navbar-nav mr-auto">
      </ul>
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item active"><a class="nav-link" href="dashboard.php">Dashboard</a></li>
    <li class="nav-item"><a class="nav-link" href="dashboard.php?page=feedback">Feedback_Data</a></li>
      <li class="nav-item"><a class="nav-link" href="dashboard.php?page=logout" style="color:#FFFFFF">Logout</a></li>
      </ul>
    </div>
  </nav>

  <?php
  @$page =  $_GET['page'];
  if ($page != "") {
    if ($page == "logout") {
      include('logout.php');
    }
    if ($page == "feedback") {
      include('data.php');
    }
  } else {
  ?>


    <br>

    <h2 class="page-header">Dashboard</h2>
    <center >

      <img style="height:400px;" src="https://thumbs.dreamstime.com/b/administration-linear-icon-modern-outline-administration-logo-c-administration-linear-icon-modern-outline-administration-logo-133515291.jpg" alt="feedback">
    </center>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>


</html>
  <?php } ?>


       

     
    




