<?php 
session_start();
include_once("functions.php");
$email = $_SESSION['email'];
if (!isset($email)) {
	$location = "index.php";
	go_to($location);
	die("Error.");
}
critical_check("logout");
$logout = sanitizeString($_POST['logout']);
check_if_empty($logout);
logout($email);
loggod_out_message(); 
exit("Loggod out.");