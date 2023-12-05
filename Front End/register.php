<?php
    include("database.php");

    $name = $_POST["fullName"];
    $phone = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $checkUser = "SELECT * FROM UserInfo WHERE Email = '$email' OR PhoneNumber = '$phone'";
    $res = mysqli_query($conn, $checkUser);

    if(mysqli_num_rows($res) > 0){
        echo '<script type="text/javascript"> 
        window.onload = function () { alert("Email or Phonenumber are already registered!");} 
        </script>';
    }else{
        $sql = "INSERT INTO user (Name, PhoneNumber, Email, Password) VALUES ('$name', '$phone', '$email', '$pass')";
        mysqli_query($conn, $sql);
        header("Location: login.html");
    }
    mysqli_close($conn);

?>