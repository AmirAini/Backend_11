<?php
session_start();
include_once "connect.php";
$last_id = $_SESSION['lastID'];



$regex = "/^[\d\-]+$/";

//? Validate Regex 
if(preg_match($regex,$_POST['phone']))
{   
    $phone = ($_POST['phone']); 
    echo $last_id;

    //update value
    $sql = "UPDATE user SET User_Phone = $phone 
            WHERE User_ID = $last_id;";

    //push
    if ($conn->query($sql) === TRUE) { 
        echo "Phone Number Insert was Successful";
    }
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    echo "<br>";
    
    echo "<br>";
    
    echo "<br>";
    
    echo "<br>";

    //?6 numbers
    $randnum = rand(100000,999999);
    echo $randnum;
    $sql = "UPDATE user SET user_tac='$randnum' WHERE user_id='$last_id'";
    
    echo "<br>";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $_SESSION['mobile'] = "Number was invalid";
    header('location: mobileno.php');
    $sql = "DELETE FROM user WHERE USER_ID = $last_id;";
    //execute
    $conn->query($sql);
}

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
    <link rel="stylesheet" type="text/css" href="dist/css/style.css?v=1.0.2" />



</head>

<body>

    <div class="app__container">
        <div class="app__wrapper">
            <div class="app__logo"><img src="dist/images/svg/cvd_logo.svg" alt="" /></div>
            <div class="app__headline">Enter your <span class="app__name_newln">6-digit TAC</span></div>
            <div class="app__desc app__desc_tacno">
                <p class="app__desc_1">Once your number is verified, it cannot be further amended.</p>
            </div>

            <form action="scanner.php" method="post">
                <div class="pin-wrapper">
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name='aa'>
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name='bb'>
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name='cc'>
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name='dd'>
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name='ee'>
                    <input type="text" data-role="pin" maxlength="1" class="pin-input" name='ff'>
                </div>
                <div class="form_app_submit_container">
                <input type="submit" style="background-color:slategray
                ; padding: 3px; border-radius: 5px;">
                </div>
                
            </form>
        </div>
        <div class="app__artwork_name"><img src="dist/images/svg/cvd_artwork_tac.svg" alt=""></div>
    </div>

    <script src="dist/js/jquery-3.2.1.slim.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/pin.js"></script>
    <script src="dist/js/pin.js"></script>
    <script src="dist/js/app.js"></script>


</body>

</html>
