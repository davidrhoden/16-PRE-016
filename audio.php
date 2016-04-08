<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sanders\Wingo Video Samples</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
    <div id="menu_button">MENU</div>
    <div id="logo"><img src="images/swlogo.png" style="height:48px;"></div>
    <?php include 'menu.php'; ?>

    <div id="flex-container">
    <audio src="<?php 

$i = $_GET["audio"];
switch ($i) {
    case "chihuahuabaseball":
        echo "ChihuahuaBaseball.mp3";
        break;
    case "backtoschoolradio":
        echo "BackToSchool.mp3";
        break;
    case "gururadio":
        echo "YoungGuruRadio.mp3";
        break;
    default:
        echo "ChihuahuaBaseball.mp3";
    break;
}
?>" autoplay autobuffer controls></video>
	</div>
    </body>
</html>