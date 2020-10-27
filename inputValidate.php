<?php

$username = $password = $repeatPassword = $firstName = $lastName = $address1 = $address2 =
$city = $zip = $phone = $email = $gender = $marital = $birthday = "";

$userErr = $passErr = $verPassErr = $firstErr = $lastErr = $add1Err = $add2Err =
$cityErr = $zipErr = $phoneErr = $emailErr = $genderErr = $maritalErr = $birthdayErr = "";



$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isValid = true;
    $username = clean_input($_POST["username"]);
    		if (empty($username)) {
    			$userErr = "Name is required";
    			$isValid = false;
    		} else {
    			if (!preg_match("/^[a-zA-Z ]+$/", $username) || strlen($username) > 50) {
    				$userErr = "Must be less than 50 characters with only letters and white space allowed";
    				$isValid = false;
    			}
    		}
}

function clean_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}


?>