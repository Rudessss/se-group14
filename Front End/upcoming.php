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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upcoming - BEEFLIX</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="upcoming.css">
    <script src="upcoming.js" defer></script>
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
    
    <div class="container">
        <div id="slide">
            
            <div class="item" style="background-image: url(./Assets/DespicableMe4.jpg);">
                <div class="content">
                    <div class="name">Despicable Me 4</div>
                    <div class="sinopsis">
                        Fourth installment of the 'Despicable Me' franchise.
                        <br>
                        <br>
                        Directed by:
                        <br>
                        Patrick Delage
                        <br>
                        Chris Renaud
                        <br><br>
                        Produced by
                        <br>
                        Chris Meledandri
                        <br><br>
                        Starring
                        <br>
                        Steve Carell
                        <br>
                        Pierre Coffin
                    </div>
                </div>
            </div>
            
            <div class="item" style="background-image: url(./Assets/KingdomPlanetApes.jpg);">
                <div class="content">
                    <div class="name">Kingdom of the Planet of the Apes</div>
                    <div class="sinopsis">Many years after the reign of Caesar, a young ape goes on a journey that will lead him to question everything he's been taught about the past and make choices that will define a future for apes and humans alike.
                        <br><br>
                        Directed by:
                        <br>
                        Wes Ball
                        <br><br>
                        Produced by:
                        <br>
                        Wes Ball
                        <br>
                        Joe Hartwick Jr.
                        <br>
                        Rick Jaffa
                        <br>
                        Amanda Silver
                        <br>
                        Jason Reed
                        <br><br>
                        Starring:
                        <br>	
                        Owen Teague
                        <br>
                        Freya Allan
                        <br>
                        Kevin Durand
                        <br>
                        Peter Macon
                        <br>
                        William H. Macy
                    </div>
                </div>
            </div>
            
            <div class="item" style="background-image: url(./Assets/Deadpool3.jpg);">
                <div class="content">
                    <div class="name">Deadpool 3</div>
                    <div class="sinopsis">Wolverine joins the "merc with a mouth" in the third installment of the Deadpool film franchise.
                        <br><br>
                        Directed by:
                        <br>
                        Shawn Levy
                        <br><br>
                        Produced by:
                        <br>
                        Kevin Feige
                        <br>
                        Ryan Reynolds
                        <br>
                        Shawn Levy
                        <br><br>
                        Starring:
                        <br>	
                        Ryan Reynolds
                        <br>
                        Hugh Jackman
                        <br>
                        Morena Baccarin
                        <br>
                        Brianna Hildebrand
                        <br>
                        Jennifer Garner
                    </div>
                </div>
            </div>

            <div class="item" style="background-image: url(./Assets/KungFuPanda4.jpg);">
                <div class="content">
                    <div class="name">Kung Fu Panda 4</div>
                    <div class="sinopsis">Follow Po on his wide-eyed adventures in ancient China, whose love of kung fu is matched only by an insatiable appetite.
                        <br><br>
                        Directed by:
                        <br>
                        Mike Mitchell
                        <br><br>
                        Produced by:
                        <br>
                        Rebecca Huntley
                        <br><br>
                        Starring:
                        <br>
                        Jack Black</div>
                    </div>
                </div>
            </div>
            
            <div class="buttons">
                <button id="prev"><i class="fa fa-angle-left"></i></button>
                <button id="next"><i class="fa fa-angle-right"></i></button>
            </div>

        </div>
    </div>
    
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