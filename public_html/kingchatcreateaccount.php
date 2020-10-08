<?php 
include_once("functions.php");
critical_check("email");
critical_check("security_key");
critical_check("name");
$email_info = sanitizeString($_POST['email']);
$security_key_info = sanitizeString($_POST['security_key']);
$name_info = sanitizeString($_POST['name']);
check_if_empty($email_info);
check_if_empty($security_key_info);
check_if_empty($name_info);
$table = "`accounts`";
create_account($conn,$table,"email",$email_info,"name","$name_info","security_key",$security_key_info);
$location = "index.php";
go_to($location);
exit("Account created.");