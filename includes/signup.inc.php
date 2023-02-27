<?php

if(isset($_POST["submit"])){

//grabbing the data
$uid = $_POST["submit"];
$uid = $_POST["pwd"];
$uid = $_POST["pwdRepeat"];
$uid = $_POST["email"];

//Instantiate Signup Controller class
include "../classes/signup.classes.php";
include "../classes/signup-contr.classes.php";
$signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

//Running error handlers and user signup

//Going back to front page

}