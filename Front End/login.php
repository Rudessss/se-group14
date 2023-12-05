<?php
    include("database.php");

    $email = $_POST["email"];
    $pass = $_POST["password"];

    $checkUser= "SELECT * FROM UserInfo WHERE Email = '$email' AND Password = '$pass'";
    $res = mysqli_query($conn, $checkUser);

    if(mysqli_num_rows($res) > 0){
        header("Location: home.html");
    }else{
        echo '<script type="text/javascript"> 
        window.onload = function () { alert("Wrong Email or Pasword!");} 
        </script>';
    }

    mysqli_close($conn);
?>