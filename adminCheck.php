<?php
session_start();
include_once "connect.php";

if(isset($_SESSION['status'])){

    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>ALERT! <?php echo $_SESSION['status']; ?></strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>



<?php
    unset($_SESSION['status']);
}

$key= 'test123';
$pwHashed =password_hash($key,PASSWORD_DEFAULT);

// echo $key.'<br>';
echo $pwHashed;
//ready to pass
$_SESSION['password'] = $pwHashed;



?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mysejahteri</title>
    <meta name="robots" content="follow, index" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="format-detection" content="telephone=no" />


    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css?v=1.0.5" />



</head>

<body class="app__card">

    <div class="app__container">
        <div class="app__cards_wrapper scanner_active" style="height:400px; display:flex;flex-direction:column;justify-content:center;align-items:center;">
        Welcom Admin.<br><br>
        
        <form action="profile.php" method="post">
        Name: <input type="text" name="admin_name" style="width: 150px; margin-left: 24px;"><br><br>
        Password: <input type="password" name="key" style="width: 150px;"><br><br>
        <input type="submit">
        </form>
        <br>

        <form action="signUP.php" method="post" style="width: 225px;">
        <input type="submit" value="Sign-Up">
        </form>
        
        </div>
    </div>
</body>
</html>