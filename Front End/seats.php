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

$movieId = $_SESSION['movieid'];
$checkMovie= "SELECT * FROM movie_list WHERE movieId = '$movieId'";
$result = mysqli_query($conn, $checkMovie);

$row = mysqli_fetch_assoc($result);
?>

<?php
    if(isset($_POST["reserve"])){
        $selectedSeats = $_POST['selectedSeats'];
        $totalPrice = $_POST['totalPrice'];
        $filmname = "Captain Marvel";

        $sql = "INSERT INTO ticket_info (fullName, phoneNumber, email, pass) VALUES ('$name', '$phone', '$email', '$pass')";

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEEFLIX</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="seats.css">
    <script src="home.js" defer></script>
</head>

<body>
    <!-- <header>
        <div id="logo">BEEFLIX</div>
        <nav>
            <a href="home.php">Home</a>
            <a href="upcoming.html">Upcoming</a>
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
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
                <br><br>
                <h2>Synopsis</h2>
                <br>
                <p><?php echo $row["movieDesc"] ?></p>
            </div>
        </div>
    </section>

    <section class="description">
        <table id="grid">
            <!-- You can use JavaScript to populate the grid -->
        </table>
        <p id="selectedSeats" name="selectedSeats">Selected Seats: </p>
        <p id="totalPrice" name="totalPrice">Total Price: $0</p>
        <button onclick="toggleSelectedToPreselected()" name="reserve">Toggle Selected to Preselected</button>
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