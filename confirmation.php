<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title", "Confirmation"); ?>
    <meta charset="UTF-8">
    <title>Registration Confirmed!</title>
    <link href="./CSS/stylesheet.css" rel="stylesheet" type="text/css"/>
    <link href="./CSS/background.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="navbar navbar-fixed-top">
        <img src="./IMG/topbarlogo.jpg"  align="left" width=50 height=50 alt="Umbrella Corporation ™"/>
        <a href="index.php">Home</a>
        <a href="registration.php">Registration</a>
        <a href="animation.php">Animation</a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidenav">
        <div id="top">
            <br/>
            <h1><b>You have Successfully Registered!</b></h1>
            <h2>Thank you!</h2>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidenav">
        <div id="confirmation">
            <div id="userDiv">
                <?php
                    $fields = array("Username", "Password", "Verify Password", "First Name", "Last Name", "Address 1", "Address 2",
                    "City", "State", "Zip Code", "Phone Number", "Email", "Gender", "Marital Status", "Date of Birth", "Submission Date");
                    $i=0;
                	foreach($_POST as $key => $value) {
                	if ($value=="Submit") {
                	    $value=date("Y-m-d");
                	}
                		echo "<b>" . $fields[$i] . ": " . "</b>" . "$value<br/>";
                		$i++;
                	}
                ?>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidenav">
        <div id="bottom">
            <a href="https://twitter.com/RE_Games" target="_blank" title="RE_Games" style="color:gainsboro">Twitter</a><br/><br/>
            <a href="https://www.youtube.com/user/ResidentEvil" target="_blank" title="ResidentEvil" style="color:gainsboro">Youtube</a><br/><br/>
            <a href="https://www.instagram.com/re_games/" target="_blank" title="re_games" style="color:gainsboro">Instagram</a><br/><br/>
            <a href="https://www.capcom.com/us/" target="_blank" title="capcom" style="color:gainsboro">Capcom</a><br/><br/>
            <a href="https://www.evilresource.com/resident-evil-2-remake/files/guide-pamphlet" target="_blank" title="Pamphlet" style="color:gainsboro">Synopsis</a><br/><br/>
            <a href="https://residentevil.fandom.com/wiki/Raccoon_City" target="_blank" title="Wiki" style="color:gainsboro">Raccoon Citys History</a>
            <img align="right" width=34% height=34% src="./IMG/bottomlogo.png" alt="Umbrella Corporation ™"/><br/>
        </div>
    </div>
</body>
