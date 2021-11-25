<?php

if(isset($_POST["submit"])) {

	//Grabbing the data
	$uid = $_POST["uid"];
	$psw = $_POST["psw"];
	$pswrepeat = $_POST["pswrepeat"];
	$email = $_POST["email"];

	//Instantiate SignupColtr class
	include "../classes/signup.classes.php";
	include "../classes/signup-contr.classes.php";
	$signup = new SignupContr($uid, $psw, $pswrepeat, $email);
	// Running error handless and user signup

	//Going to back to front page
}