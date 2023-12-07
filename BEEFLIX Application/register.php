<?php
    include("database.php");

    if (isset($_POST['submit'])){
        $name = $_POST["fullName"];
        $phone = $_POST["phoneNumber"];
        $email = $_POST["email"];
        $pass = $_POST["password"];
        $cpass = $_POST["confirmPassword"];

        $checkUser = "SELECT * FROM user_identity WHERE email = '$email' OR phoneNumber = '$phone' OR fullName = '$name'";
        $res = mysqli_query($conn, $checkUser);
    
        if(mysqli_num_rows($res) > 0){
            echo '<script>';
            echo 'alert("' . "FullName Or Email or Phone Number is already used" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if ($pass != $cpass){
            echo '<script>';
            echo 'alert("' . "Password is not matched" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if (empty($name)) {
            echo '<script>';
            echo 'alert("' . "Name cannot be empty" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        }else if (empty($phone)) {
            echo '<script>';
            echo 'alert("' . "Phone number cannot be empty" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if (strlen($phone) < 10) {
            echo '<script>';
            echo 'alert("' . "Phone number must be longer than 10 digits." . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        }
        else if (empty($email)) {
            echo '<script>';
            echo 'alert("' . "Email address cannot be empty" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo '<script>';
            echo 'alert("' . "Please enter a valid email address" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        }else if (empty($pass)) {
            echo '<script>';
            echo 'alert("' . "Password cannot be empty" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if (strlen($pass) < 8) {
            echo '<script>';
            echo 'alert("' . "Password must be at least 8 characters" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if (!preg_match('/[a-z]/', $pass)) {
            echo '<script>';
            echo 'alert("' . "Password must contain at least one lowercase letter" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if (!preg_match('/[A-Z]/', $pass)) {
            echo '<script>';
            echo 'alert("' . "Password must contain at least one uppercase letter" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if (!preg_match('/[0-9]/', $pass)) {
            echo '<script>';
            echo 'alert("' . "Password must contain at least one number" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        } else if ($cpass != $pass) {
            echo '<script>';
            echo 'alert("' . "The confirm password confirmation does not match" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
        }else{
            $sql = "INSERT INTO user_identity (fullName, phoneNumber, email, pass) VALUES ('$name', '$phone', '$email', '$pass')";
            mysqli_query($conn, $sql);
            echo '<script>';
            echo 'alert("' . "Register successfully" . '");';
            echo 'window.location.href = "register.php";'; 
            echo '</script>';
            header("Location: login.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - BEEFLIX</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="register.css">
    <script src="script.js"></script>
</head>

<body>
    <header>
        <div id="logo">BEEFLIX</div>
        <nav>
            <a href="home.php">Home</a>
            <a href="upcoming.html">Upcoming</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </nav>
        <div class="profile-icon"><a href="#"><i class="fa fa-user"></i></a></div>
    </header>

    <section>
        <!-- Registration Form -->
        <form id="registrationForm" action="" method="post">
            <h2>Register</h2>
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName">

            <label for="phoneNumber">Phone Number</label>
            <input type="tel" id="phoneNumber" name="phoneNumber">

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword" name="confirmPassword">

            <button type="submit" name="submit"">SUBMIT</button>
        </form>
        <!-- End of Registration Form -->
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-logo">BEEFLIX</div>
            <div class="footer-social">
                <a href="https://www.facebook.com/?locale=id_ID"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/home?lang=id"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2023 BEEFLIX. All Rights Reserved.
        </div>
    </footer>
    <!-- End of Footer -->
    
</body>
</html>