<?php 
    include_once("config/config.php");
    include_once("config/slug.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Csiszér Alex Dominik porfóliója">
    <meta name="author" content="Csiszér Alex Dominik">
    <meta name="keywords" content="Csiszér Dominik, porfólió, Csiszér Alex Dominik">

    <title>Csiszér Alex Dominik</title>

    <!--==== STYLESHEET ====-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--===== BOX ICONS =====-->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="assets/img/favico.ico">
</head>
<body>
    <div class="nav__container">
        <ul class="nav__list" data-aos="zoom-in">
            <li class="nav__item"><a href="#" class="nav__link">Munkáim</a></li>
            <li class="nav__item"><a href="about.php" class="nav__link">Magamról</a></li>
        </ul>
    </div>
        <img class="header__img" src="assets/img/profileSmall.png" alt="Profile Pic">
    <div class="container">
        <div class="header">

            <div class="header__content" data-aos="fade-left">
                <div class="cube" data-aos="zoom-in"></div>
                <div class="cube" data-aos="zoom-in"></div>
                <div class="cube" data-aos="zoom-in"></div>
                <div class="cube" data-aos="zoom-in"></div>
                <div class="cube" data-aos="zoom-in"></div>
                <div data-aos="fade-right" data-aos-delay="100" class="header__text">
                    <h1 class="linear-text">Sziasztok,<br>
                        Csiszér Dominik vagyok.
                    </h1>
                    <p>A Számalk-Szalézi iskola tanulója, szoftverfejlesztő és -tesztelő.</p>
                </div>
            </div>
        </div>
        <div class="works">
            <h2>Munkáim</h2>

            <div class="works__container">
            <?php 
                $sql = "SELECT * FROM iskolaVerseny";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo '<a href="works.php?link='.createSlug(''. $row["workCategory"] . ' ' . $row["workName"].'').'" class="works__item">';
                        echo '<img class="works__img" src="assets/img/'.$row["workImg"].'/'.$row["workImg"].'.png" alt="Work img">';
                        echo '<div class="works__text">';
                        echo '<div class="works__category"><h3>'.$row["workCategory"].'</h3></div>';
                        echo '<div class="works__name"><h3>'.$row["workName"].'</h2></div>';
                        echo '</div>';
                        echo '</a>';
                    }
            
                }
            ?>
            </div>
        </div>
    </div>

    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>