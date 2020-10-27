<!DOCTYPE html>
<html lang="en">
<head>
    <?php define("title", "Registration"); ?>
    <meta charset="UTF-8">
    <title>Umbrella Registration Page</title>
    <link href="./CSS/stylesheet.css" rel="stylesheet" type="text/css"/>
    <link href="./CSS/background.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <?php include 'inputValidate.php'?>
    <div class="navbar navbar-fixed-top">
        <img src="./IMG/topbarlogo.jpg"  align="left" width=50 height=50 alt="Umbrella Corporation ™"/>
        <a href="index.php">Home</a>
        <a class="current" href="registration.php">Registration</a>
        <a href="animation.php">Animation</a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidenav">
        <div id="top">
            <br/>
            <h1><b>Register to Help Umbrella Today!</b></h1>
            <h2>Our Business Is Life Itself</h2>
        </div>
    </div>
    <form method="POST" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 sidenav">
        <div id="registration">
            <div id="userDiv">
                <label for="username" class="identify-text">Username: *</label><br/>
                <input id="username" type="text" name="username" class="form-text" placeholder="WeLoveRaccoonCity" value="<?php echo $username;?>"/><br/>
                <span id="userErr" class="error"><?php echo $userErr;?></span>
            </div>
            <div id="passDiv">
                <label for="password" class="identify-text">Password: *</label><br/>
                <input id="password" type="password" name="password" class="form-text"/><br/>
                <span id="passErr" class="error"><?php echo $passErr;?></span>
            </div>
            <div id="verPassDiv">
                <label for="repeatPassword" class="identify-text">Repeat Password:  *</label><br/>
                <input id="repeatPassword" type="password" name="repeatPassword" class="form-text"/><br/>
                <span id="verPassErr" class="error"><?php echo $verPassErr;?></span>
            </div>
            <div id ="firstDiv">
                <label for="firstName" class="identify-text">First Name:  *</label><br/>
                <input id="firstName" type="text" name="firstName" class="form-text" placeholder="Leon"/><br/>
                <span id="firstErr" class="error"><?php echo $firstErr;?></span>
            </div>
            <div id="lastDiv">
                <label for="lastName" class="identify-text">Last Name:  *</label><br/>
                <input id="lastName" type="text" name="lastName" class="form-text" placeholder="Kennedy"/><br/>
                <span id="lastErr" class="error"><?php echo $lastErr;?></span>
            </div>
            <div id="add1Div">
                <label for="address1" class="identify-text">Address Line 1:  *</label><br/>
                <input id="address1" type="text" name="address1" class="form-text" placeholder="123 Arklay Drive" /><br/>
                <span id="add1Err" class="error"><?php echo $add1Err;?></span>
            </div>
            <div id="add2Div">
                <label for="address2" class="identify-text">Address Line 2:</label><br/>
                <input id="address2" type="text" name="address2" class="form-text" placeholder="123 Arklay Drive"/><br/>
                <span id="add2Err" class="error"><?php echo $add2Err;?></span>
            </div>
            <div id="cityDiv">
                <label for="city" class="identify-text">City:  *</label><br/>
                <input id="city" type="text" name="city" class="form-text" placeholder="Raccoon City"/><br/>
                <span id="cityErr" class="error"><?php echo $add1Err;?></span>
            </div>
            <div id="stateDiv">
                <label for="state">State:  *</label><br/>
                <select id="state" name="state">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
            </select><br/>
            </div>
            <div id="zipDiv">
                <label for="zip" class="identify-text">Zip Code:  *</label><br/>
                <input id="zip" type="text" name="zip" class="form-text" placeholder="73110" onblur="formatZip(this);"/><br/>
                <span id="zipErr" class="error"><?php echo $zipErr;?></span>
            </div>
            <div id="phoneDiv">
                <label for="phone" class="identify-text">Phone Number:  *</label><br/>
                <input id="phone" type="text" name="phone" class="form-text" placeholder="314-955-3233" onblur="formatPhone(this);"/><br/>
                <span id="phoneErr" class="error" ><?php echo $zipErr;?></span>
            </div>
            <div id="emailDiv">
                <label for="email" class="identify-text">Email:  *</label><br/>
                <input id="email" type="text" name="email" class="form-text" placeholder="KennedyLeon@gmail.com"/><br/>
                <span id="emailErr" class="error"><?php echo $emailErr;?></span>
            </div>
            <div id="genderDiv">
                <label for="male" id="gender">Gender:  *</label><br/>
                <input type="radio" name="gender" id="male" value="male"/><label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female"/><label for="female">Female</label><br/>
                <input type="radio" name="gender" id="other" value="other"/><label for="other">Other</label><br/>
                <span id="genderErr" class="error"><?php echo $genderErr;?></span>
            </div>
            <div id="maritalDiv">
                <label for="single" id="marital">Martial Status:  *</label><br/>
                <input type="radio" name="marital" id="single" value="single"/><label for="single">Single</label>
                <input type="radio" name="marital" id="married" value="married"/><label for="married">Married</label><br/>
                <input type="radio" name="marital" id="widowed" value="widowed"/><label for="widowed">Widowed</label>
                <input type="radio" name="marital" id="divorced" value="divorced"/><label for="divorced">Divorced</label><br/>
                <span id="maritalErr" class="error"><?php echo $maritalErr;?></span>
            </div>
            <div id="birthDiv">
                <label for="birthday">Date of Birth:  *</label><br/>
                <input id="birthday" type="date" name="birthday"/><br/><br/>
                <span id="birthdayErr" class="error"><?php echo $birthdayErr;?></span>
            </div>
            <button>Submit</button>
            <button>Reset</button>
        </div>
    </div>
    </form>

    <?php
    			if ($isValid) {
    				?>
    				<form id="hiddenForm" name="hiddenForm"
    					method="POST" action="confirmation.php">
    					<?php
    						foreach($_POST as $key => $value) {
    							?>
    							<input name="<?php echo $key;?>"
    								value="<?php echo $value;?>"
    								type="hidden"/>
    							<?php
    						}
    					?>
    				</form>
    				<script>
    					document.createElement('form').submit.call(document.getElementById('hiddenForm'));
    				</script>
    				<?php
    			}
    		?>

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
</html>