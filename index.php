<?php 
    //start Session
    session_start();

    //Init bug reporter
    ini_set('display_errors' , 1);
    ini_set('log_errors' , 1);
    error_reporting("F_ALL");
    
    //init Session
    $_SESSION['nom'] = "FORT";
    $_SESSION['prenom'] = "Yoann" ;
    $_SESSION['age'] = 22;

    // if user name and password set put data to COOKIE
    if (isset($_POST['userName']) && isset($_POST['userPsw'])){
        setcookie('id' , $_POST['userName'] , 0 , '/' );
        setcookie('pass' , $_POST['userPsw'] , 0 , '/');
        $_SESSION['id'] = $_COOKIES['userName'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Exercice Php</title>
</head>
<body>
   <div class=" flex-container">
    <?php 
        require 'components/Header.html';
        require 'components/userInfo.html';
    ?>
    </div>
</body>
</html>