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

$userId = $_SESSION['id_logged_in'];
$sql = "SELECT* FROM ticket_info ti JOIN movie_list ml ON ti.movieId = ml.movieId WHERE userId = '$userId'";
$result = mysqli_query($conn, $sql);

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

    <h1>Owned Ticket</h1>
    <section class="tickets">
        <table class="ticket">
            <?php
                if (mysqli_num_rows($result) > 0){
                    while ($row = mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td><img src="Assets/<?php echo $row['movie_image']; ?>" alt=""></td>
                            <td>
                                <h2><?php echo $row['movieName']; ?></h2>
                                <p>Seats: <?php echo ($row['ticketPrice'] / 50); ?> seats</p>
                                <p>Transaction Date: <?php echo $row['ticketDate']; ?></p>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "User has not book the ticket";
                }
            ?>
            
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