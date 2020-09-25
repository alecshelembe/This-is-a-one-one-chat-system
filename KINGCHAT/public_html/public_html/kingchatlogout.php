<?php 
session_start();
include_once("functions.php");
$email = $_SESSION['email'];
if (!isset($email)) {
	
	die("wait.");
}
critical_check("logout");
$logout = sanitizeString($_POST['logout']);
check_if_empty($logout);
logout($email);
loggod_out_message(); 
$location = "index.php";
go_to($location);
exit("Loggod out.");