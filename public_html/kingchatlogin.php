<?php
include_once("functions.php");
critical_check("email");
critical_check("security_key");
$email = sanitizeString($_POST['email']);
$security_key = sanitizeString($_POST['security_key']);
check_if_empty($email);
check_if_empty($security_key);
$table ="`accounts`";
end_last_login("email");
session_start();
pair_for_login($conn,$table,"email",$email,"security_key",$security_key);
$email = $_SESSION['email'];
header("location:profile.php");
exit();