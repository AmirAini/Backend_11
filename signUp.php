<?php 
include_once "connect.php";


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
        Sign Up New Admin.<br><br>
        
        <form action="signUp.php" method="post">
        Name: <input type="text" name="admin_name" style="width: 150px; margin-left: 24px;"><br><br>
        Email: <input type="text" name="admin_email" style="width: 150px; margin-left: 29px;"><br><br>
        <input type="submit">
        </form>



        <?php 
        $name = $_POST['admin_name'];
        $email = $_POST['admin_email'];
        

        if ($name != "" || $email !=""){
            //query
        $sql = "INSERT INTO admin (Admin_Name,Admin_Email) 
        VALUES ('$name','$email');"; 
            //execute query
        if ($conn->query($sql) == TRUE){
            echo 'successful';
        }
        }
        
        ?>
        <br>
        
        </div>
    </div>


</body>
</html>