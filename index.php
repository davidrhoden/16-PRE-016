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
    <video src="<?php 

$i = $_GET["video"];
switch ($i) {
    case "alleyes":
        echo "AT_T_All_Eyes_on_You_30_070615.mov";
        break;
    case "knowyourballs":
        echo "TCF_KnowYourBalls_34_033116.mp4";
        break;
    case "seeingstars":
        echo "ATT_SeeingStars_30.mp4";
        break;
    case "stronger":
        echo "ATT_Stronger_1280×720.mov";
        break;
    case "barnstorm":
        echo "barnstorm.mov";
        break;
    case "dancehall":
        echo "dancehall.mov";
        break;
    case "mortgage":
        echo "GECUMortgageEn-LowRes.mov";
        break;
    case "grad":
        echo "Grad.mov";
        break;
    case "mission":
        echo "mission.mov";
        break;
        case "bandits":
        echo "bandits.mov";
        break;
    case "summerdrives":
        echo "SummerDrives.mp4";
        break;
    case "chihuahua":
        echo "SWET150004_DEP_Culture & Entertainment_Chihuahua.mov";
        break;
    case "climber":
        echo "SWET150005_DEP_Outdoor_Climber_Video_Eng.mov";
        break;
    case "holidaycard":
        echo "the_holiday_card_120715-H264.mov";
        break;
    case "vacation":
        echo "vacation.mov";
        break;
    case "youngguru":
        echo "YoungGuruTV.mov";
        break;
    default:
        echo "TCF_KnowYourBalls_34_033116.mp4";
    break;
}
?>" autoplay autobuffer controls></video>
	</div>
    </body>
</html>