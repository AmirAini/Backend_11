<?php
session_start();
include_once "connect.php";
$regex = "/^[a-zA-Z]{3}+[a-zA-Z\s]+$/";

//! For Name
//validate Regex
if(preg_match($regex,$_POST['user_name']))
{
    if ($_POST['user_name'] == "admin"){
        header('Location: http://localhost/day10/adminCheck.php');
        $sql = "DELETE FROM user WHERE USER_ID = $last_id;";
        //execute
        $conn->query($sql);
    }
    
    
    $username = ucfirst($_POST['user_name']);
    // echo $username;
    if ($_POST['user_name'] !== "admin"){
    //insert value
    $sql = "INSERT INTO user (Name)
    VALUES ('$username');";

    //push
            if ($conn->query($sql) === TRUE) { 
                echo "Name Insert was Successful";
                
                //get last id
                $last_id = $conn->insert_id;
                echo $last_id;

            //store page 1
            $_SESSION['lastID'] = $last_id;

            }
        else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }
}

} 
else {
    $_SESSION['status'] = "Name (a-z, A-Z, space only) or Number (numbers only) inserted was invalid";
    header('location: index.php');
    $sql = "DELETE FROM user WHERE USER_ID = $last_id;";
    //execute
    $conn->query($sql);
}



//!pop up for number
// if(isset($_SESSION['status1'])){

    ?>
    <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hi! ?php echo $_SESSION['status1']; ?></strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button> -->
    </div>



<?php
    // unset($_SESSION['status1']);
// }




// validate 2
// if ($_POST['user_name'] == "" || is_int($_POST['user_name']) === 1 ){
//     $_SESSION['status'] = "Data was invalid";
//     header('location: index.php');
    
// } else {
//     // echo $_POST['user_name'];
    
//     // echo ucfirst($_POST['user_name']);
//     $username = ucfirst($_POST['user_name']);
//     echo $username;
    
//     //insert value
//     $sql = "INSERT INTO user (Name)
//     VALUES ('$username');";

//     //push
//     if ($conn->query($sql) === TRUE) { 
//         echo "Data Keyed was Successful";
//     }
//         else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }
// }

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
  <link rel="stylesheet" href="dist/css/intlTelInput.css">
    <link rel="stylesheet" type="text/css" href="dist/css/style.css?v=1.0.2" />



</head>

<body>

    <div class="app__container">
        <div class="app__wrapper">
            <div class="app__logo"><img src="dist/images/svg/cvd_logo.svg" alt="" /></div>
            <div class="app__headline">Verify Your Number</div>
            <div class="app__desc app__desc_mobileno">
                <p class="app__desc_1">Please enter your mobile number in full, <span class="app__name_newln">so that a verification code can be successfully sent.</span></p>
            </div>
            <form action="tacno.php" method="post">
                <input id="phone" name="phone" type="tel">
                <div class="form_app_submit_container">
                <input type="submit" style="background-color:slategray
                ; padding: 3px; border-radius: 5px;">
                </div>
            </form>
        </div>
        <div class="app__artwork_name"><img src="dist/images/svg/cvd_artwork_mobileno.svg" alt=""></div>
    </div>

    <script src="dist/js/jquery-3.2.1.slim.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/intlTelInput.min.js"></script>
    <script src="dist/js/app.js"></script>

    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
          // allowDropdown: false,
           autoHideDialCode: false,
           autoPlaceholder: "off",
          // dropdownContainer: document.body,
          // excludeCountries: ["us"],
          // formatOnDisplay: false,
          // geoIpLookup: function(callback) {
          //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          //     var countryCode = (resp && resp.country) ? resp.country : "";
          //     callback(countryCode);
          //   });
          // },
          // hiddenInput: "full_number",
           initialCountry: "my",
          // localizedCountries: { 'de': 'Deutschland' },
          // nationalMode: false,
          // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
          // placeholderNumberType: "MOBILE",
           preferredCountries: ['my', 'sg'],
           separateDialCode: true,
           utilsScript: "dist/js/utils.js",
        });
    </script>
</body>

</html>