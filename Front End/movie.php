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
        $movieId = $_GET['movie_id'];
        $_SESSION['movieid'] = $movieId;
        $checkMovie= "SELECT * FROM movie_list WHERE movieId = '$movieId'";
        $result = mysqli_query($conn, $checkMovie);

        $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEEFLIX</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="movie.css">
    <script src="home.js" defer></script>
</head>

<body>
    <!-- <header>
        <div id="logo">BEEFLIX</div>
        <nav>
            <a href="home.html">Home</a>
            <a href="upcoming.html">Upcoming</a>
            <a href="register.html">Register</a>
            <a href="login.html">Login</a>
        </nav>
        <div class="profile-icon"><a href="#"><i class="fa fa-user"></i></a></div>
    </header> -->
    
    <section class="movie-page">
        <div class="flex-container">
            <div class="left part">
             <img src="Assets/<?php echo $row['movie_image']; ?>" alt="">
            </div>
            <div class="right part">
                <h2><?php echo $row["movieName"] ?></h2>
                <br>
                <button onclick="goToSeats()">Buy Ticket</button><br>
                <button>Watch Trailer</button>
            </div>
        </div>
    </section>

    <section class="description">
        <div class="synopsis">
            <h3 id="movieTitle">Synopsis</h3>
            <p id="movieSynopsis"><?php echo $row["movieDesc"] ?></p>
        </div>
    </section>
    
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
</body>
</html>