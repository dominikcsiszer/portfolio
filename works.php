
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
            <li class="nav__item"><a href="index.php" class="nav__link">Munkáim</a></li>
            <li class="nav__item"><a href="about.php" class="nav__link">Magamról</a></li>
        </ul>
    </div>
        <div class="header__work">

            <div class="works__content" data-aos="fade-left">
                <div data-aos="fade-right" data-aos-delay="100" class="header__text">
                <?php
                    $sql = "SELECT * FROM iskolaVerseny WHERE slug = '" . $_GET['link'] . "'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);

                        echo '<div data-aos="fade-right" data-aos-delay="100" class="works__textMain">';
                        echo '<h1 class="linear-text">'.$row["workName"].'</h1>';
                        echo '<p class="text-left">'.$row["workCategory"].'</p>';
                        echo '</div>
                        </div>';
                        echo '<img class="works__bigImg" src="assets/img/'.$row["workImg"].'/'.$row["workImg"].'-big.png" alt="Works img">';
                        echo '<img class="works__smallImg" src="assets/img/'.$row["workImg"].'/'.$row["workImg"].'-small.png" alt="Works img">';
                        echo '</div>

                        <div class="works__desc">
                        <div class="works__descText">
                        <h3>Leírás</h3>';
                        echo '<p>'.$row["workDesc"].'</p>';
                        echo '</div>
                        </div>';
                        
                    } else {
                        echo "There are no content yet.";
                    }
                ?> 

    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>