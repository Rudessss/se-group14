<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    include("database.php");

    if (isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $checkUser= "SELECT * FROM user_identity WHERE email = '$email' AND pass= '$password'";
        $res = mysqli_query($conn, $checkUser);
    
        if(mysqli_num_rows($res) > 0){
            $row = mysqli_fetch_array($res);
            
            $_SESSION['user_logged_in'] = true;
            $_SESSION['id_logged_in'] = $row ['id'];
            header("Location: home.php");
            exit();
        }else{
            echo '<script>';
            echo 'alert("' . "Wrong Password or Email" . '");';
            echo 'window.location.href = "login.php";'; 
            echo '</script>';
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BEEFLIX</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="login.css">
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
        <!-- Login Form -->
        <form id="loginForm" action="" method="post">
            <h2>Login</h2>
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <button type="submit" name="submit" onclick="validateLoginForm()">LOGIN</button>
        </form>
        <!-- End of Login Form -->
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