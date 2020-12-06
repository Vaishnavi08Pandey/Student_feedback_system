<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "fb");
if (!$conn) {
  die(mysqli_connect_error());
}
$user = $_SESSION['user'];
if ($user == "") {
  header('location:../index.php');
}
$sql = mysqli_query($conn, "select * from user where email='$user' ");
$users = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Faculty Feedback System</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="css/style.css" rel="stylesheet">
  <style type="text/css">
    li {
      display: inline-block;
      align-content: right;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" style="color:#FFFFFF" href="#">WELCOME <?php echo $users['name'] ?></a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse">
      <ul class=" navbar-nav mr-auto">
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-item active"><a class="nav-link" href="index.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=feedback">Feedback</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php?page=logout" style="color:#FFFFFF">Logout</a></li>
      </ul>

      <!--<ul class="nav  navbar-nav navbar-right">
       
       </ul>-->
    </div>
  </nav>






  <?php
  @$page =  $_GET['page'];
  if ($page != "") {
    if ($page == "logout") {
      include('logout.php');
    }
    if ($page == "feedback") {
      include('feedback.php');
    }
  } else {
  ?>


    <br>

    <h2 class="page-header">Dashboard</h2>
    <center>

      <img src="https://web.iit.edu/sites/web/files/departments/logo-students-speak.gif" alt="feedback">
    </center>

  <?php } ?>






  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>