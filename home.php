<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "fb");
if (!$conn) {
  die(mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Student_Feedback_System</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
    body {
      font-family: Helvetica, sans-serif;
      /* background:url("https://directlinedev.com/media/services/service/background/background_16_WabjYvZ.wide.jpeg");*/
      /*background: url("https://i.pinimg.com/originals/3a/3b/7b/3a3b7b936e3ff87016de28ea865cbbb6.jpg");*/
      background: url("https://usatechsolutions.com/wp-content/uploads/2017/04/dev-1.jpg");
      /*background: url(blur10.jpg);*/
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 750px;
    }

    .copyrightSection {
      background-color: #000;
      color: #fff;
      padding: 30px 5px;
    }

    .copyrightSection {
      margin: 0;
    }

    /* Styling the area of the slides */
    #slideshow {
      overflow: hidden;
      height: 600px;
      width: 1110px;
      margin: 0 auto;
    }

    /* Style each of the sides  
with a fixed width and height */
    .slide {
      float: left;
      height: 600px;
      width: 1110px;
    }

    /* Add animation to the slides */
    .slide-wrapper {
      /* Calculate the total width on the 
  basis of number of slides */
      width: calc(1110px * 4);

      /* Specify the animation with the 
  duration and speed */
      animation: slide 10s ease infinite;
    }

    /* Set the background color 
of each of the slides */
    .slide:nth-child(1) {
      background: white;
    }

    .slide:nth-child(2) {
      background: white;
    }

    .slide:nth-child(3) {
      background: white;
    }

    .slide:nth-child(4) {
      background: white;
    }

    /* Define the animation  
for the slideshow */
    @keyframes slide {

      /* Calculate the margin-left for  
  each of the slides */
      20% {
        margin-left: 0px;
      }

      40% {
        margin-left: calc(-1110px * 1);
      }

      60% {
        margin-left: calc(-1110px * 2);
      }

      80% {
        margin-left: calc(-1110px * 3);
      }
    }
  </style>
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <div class="container">

    <h3 style="color:white;" style="text-align-last: center;" align='center'><img src="logo.jpeg" alt="Uiet_logo " style="border-radius: 50%;width:80px;height:80px;">
      University Institute Of Engineering & Technology ,CSJMU KANPUR
    </h3>
    <h5 class="uit" style="color:white;text-align:right">
      previously known as:Institute of Engineering and Technology,CSJM University Kanpur
    </h5>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="index.html">Student Feedback</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php?info=about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php?info=registration">Registration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home.php?info=login">Login</a>
          </li>
          </form>

          <li class="nav-item">
            <a class="nav-link" href="home.php?info=contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>



  <?php
  @$info = $_GET['info'];
  if ($info != "") {

    if ($info == "about") {
      include('about.php');
    } else if ($info == "contact") {
      include('contact.php');
    } else if ($info == "login") {
      include('login.php');
    } else if ($info == "registration") {
      include('registration.php');
    }
  } else {
  ?>
    <div id="slideshow">
      <div class="slide-wrapper">

        <!-- Define each of the slides 
         and write the content -->
        <div class="slide">
          <img src="image4.jpg" style="height: 600px; width: 1110px;">
        </div>
        <div class="slide">
          <img src="image1.jpg" style="height: 600px; width: 1110px;">
        </div>
        <div class="slide">
          <img src="https://images.pexels.com/photos/3184460/pexels-photo-3184460.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" style="height: 600px; width: 1110px;">
        </div>
        <div class="slide">
          <img src="image5.jpg" style="height: 600px; width: 1110px;">
        </div>
      </div>
    </div>
    <div class="copyrightSection">
      <div class="col-md-12 text-center container">
        <p>&copy; Copyright Vaishnavi-Pandey Sakshi-Singh 2020</p>
      </div>
    </div>



  <?php } ?>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
