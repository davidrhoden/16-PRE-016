<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sanders\Wingo Video Samples</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/scripts.js"></script>
    </head>
    <body>
    <div id="logo"><img src="images/swlogo.svg"></div>
    <div id="menu">
    	<a href="?video=alleyes">All Eyes On You</a> /
    	<a href="?video=seeingstars">Seeing Stars</a> /
    	<a href="?video=stronger">Stronger</a> /
    	<a href="?video=barnstorm">Barnstorm</a> /
    	<a href="?video=dancehall">Dance Hall</a> /
    	<a href="?video=mortgage">GECU Mortgages</a> /
    	<a href="?video=grad">Grad</a> /
    	<a href="?video=mission">Mission</a> /
    	<a href="?video=summerdrives">Summer Drives</a> /
    	<a href="?video=chihuahua">Chihuahua</a> /
    	<a href="?video=climber">Climber</a> /
    	<a href="?video=holidaycard">The Holiday Card</a> /
    	<a href="?video=vacation">Vacation</a> /
    	<a href="?video=youngguru">Young Guru</a> /
    </div>

    <div id="flex-container">
    <video src="<?php 

$i = $_GET["video"];
switch ($i) {
    case "alleyes":
        echo "AT_T_All_Eyes_on_You_30_070615.mov";
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
        echo "GECUMortgageEn.mov";
        break;
    case "grad":
        echo "Grad.mov";
        break;
    case "mission":
        echo "mission.mov";
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
        echo "AT_T_All_Eyes_on_You_30_070615.mov";
    break;
}
?>" autoplay autobuffer controls></video>
	</div>
    </body>
</html>