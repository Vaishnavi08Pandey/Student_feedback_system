<?php
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "fb");
if (!$conn) {
  die(mysqli_connect_error());
}
extract($_POST);
	if(isset($login))
	{
$que=mysqli_query($conn,"select user and pass from admin where user='$email' and pass='$pass'");
				$_SESSION['user']=$email;
                header('location:dashboard.php');
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

    <title>Admin !</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
    .bg {
       
       background:url("https://4.bp.blogspot.com/-y2PlCX_0_t8/TWIRvexJFfI/AAAAAAAAAIQ/dtEU8pM-_3E/s1600/Professional+Man+Silly+Walks+Play+3D+HD+Widescreen+Wallpapers.jpg");
     background-position: center;
   background-repeat: no-repeat;
   background-size: cover;
   height: 750px;
     }
 body{
     margin:0;
     height:100%;
 }
 .form-relative {
width: 300px;
height: 200px; 
position: absolute;
top: 50%;
left: 50%;
margin-top: -100px; 
margin-left: -150px; 
}

   </style>
  <link href="css/style.css" rel="stylesheet">

</head>

<body class="bg">
<center>
    <div class="container j">
        <div class="row">
                <div class="login-panel panel panel-default">
                    <div class="panel-body">
                        <form method="post" class="form-relative">
                        <h3 class="panel-title">Sign In</h3>
                                <div class="form-group">
                                    <input class="form-control" name="email" type="email" autofocus required placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" required>
                                </div>
                                
                                
								<div class="form-group">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                                </div>
								
								<div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
                                </div>
								
                                
                        </form>
                    </div>
                </div>
            </div>
    </div>
</center>
   
  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>



</html>
