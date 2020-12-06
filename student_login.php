<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($server, $username, $password, "fb");
if (!$conn) {
    die(mysqli_connect_error());
}
extract($_POST);
if (isset($save)) {
    if ($email == "" || $password == "") {
        $err = "<font color='red'>Fill all the fields first</font>";
    } else {
        $password = $password;
        $sql = mysqli_query($conn, "select * from user where email='$email' and password='$password'");
        $r = mysqli_num_rows($sql);
        if ($r == TRUE) {
            $_SESSION['user'] = $email;
            header('location:user');
        } else {
            $err = "<font color='red'>Invalid login details</font>";
        }
    }
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
    <title>Student Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .bg {

            background: url("https://images.squarespace-cdn.com/content/v1/5ace45bdf93fd46cd37d28c8/1547659551308-6GTUBUS013HWOATCKO5F/ke17ZwdGBToddI8pDm48kNvT88LknE-K9M4pGNO0Iqd7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UbeDbaZv1s3QfpIA4TYnL5Qao8BosUKjCVjCf8TKewJIH3bqxw7fF48mhrq5Ulr0Hg/case+study+background+whitehat.png?format=1500w");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 750px;
        }

        body {
            margin: 0;
            height: 100%;
        }
    </style>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <br><br>


    <body class="bg">
        <center>
            <h2>STUDENT</h2>
        </center>
        <div class="col-sm-4"><?php echo @$err; ?></div>
        <center>

            <form method="post">
                <tr>
                    <td>
                        <font color="white">Email:</font>
                    </td>
                    <td>
                        <input type="email" name="email" class="form-control" style="width:400px;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <font color="white">Password:</font>
                    </td>
                    <td>
                        <input type="password" name="password" class="form-control " style="width:400px;">
                    </td>
                </tr>
                </div>
                <br>
                <div align="center" style="padding-top:20px">
                    <input type="submit" value="Login" name="save" class="btn btn-info">
        </center>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>

</html>