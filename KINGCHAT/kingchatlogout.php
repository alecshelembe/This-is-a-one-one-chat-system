<?php include_once("functions.php");
session_start();
$email = $_SESSION['email'];
if (!isset($email)) {
	header("location:index.php");
	die();
}
critical_check("logout");
$logout = sanitizeString($_POST['logout']);
check_if_empty($logout);
logout($email);
loggod_out_message(); 
exit("Loggod out.");