<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // Start the session

include('database.php');

// Check if the user is logged in
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true) {
    include 'header_logged_in.php';
} else {
    include 'header_logged_out.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="showTicket.css">
</head>
<body>
    <!-- <header>
        <div id="logo">BEEFLIX</div>
        <nav>
            <a href="home.html">Home</a>
            <a href="upcoming.html">Upcoming</a>
            <a href="register.html">Register</a>
            <a href="login.html">Login</a>
            <a href="showTicket.html">Ticket</a>
        </nav>
        <div class="profile-icon"><a href="#"><i class="fa fa-user"></i></a></div>
    </header> -->

    <h1>Owned Ticket</h1>
    <section class="tickets">
        <table class="ticket">
            <tr>
                <td><img src="Assets/AntMan-Quantumania.jpg" alt=""></td>
                <td>
                    <h2>Ant-Man</h2>
                    <p>[List of seats number]</p>
                    <p>Date-Time</p>
                </td>
            </tr>
            <tr>
                <td><img src="Assets/AntMan-Quantumania.jpg" alt=""></td>
                <td>
                    <h2>Ant-Man</h2>
                    <p>[List of seats number]</p>
                    <p>Date-Time</p>
                </td>
            </tr>
            <tr>
                <td><img src="Assets/AntMan-Quantumania.jpg" alt=""></td>
                <td>
                    <h2>Ant-Man</h2>
                    <p>[List of seats number]</p>
                    <p>Date-Time</p>
                </td>
            </tr>
        </table>
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