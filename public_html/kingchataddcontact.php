<?php
include_once("functions.php");
critical_check("email");
critical_check("name");
critical_check("contact");
critical_check("new_contact");
$email_info = sanitizeString($_POST['email']);
$name_info = sanitizeString($_POST['name']);
$contact_info = sanitizeString($_POST['contact']);
check_if_empty($email_info);
check_if_empty($name_info);
check_if_empty($contact_info);
$table = "table";
new_contact($conn,$table,"email",$email_info,"name",$name_info,$contact_info);
contact_added_message();
$location = "kingchatcontacts.php";
go_to($location);
exit("Contact added.");