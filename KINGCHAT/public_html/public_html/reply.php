<?php
session_start();
include_once("functions.php");
mysqli_select_db($conn, $dbname);
$email = $_SESSION['email'];
if (!isset($email)) {
    $location = "index.php";
	//go_to($location);
	die();
}
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
if (!isset($_POST['open_chat']) && !isset($_POST['send_message'])) {
	redirect_back();
}

if (isset($_POST['open_chat'])) {
	critical_check("contact");
	$contact = sanitizeString($_POST['contact']);
	check_if_empty($contact);
	$table = '`accounts`';
	see_messages($conn,$table,"email",$email,$contact);
	echo "<br><br><form action=\"reply.php\" autocomplete=\"off\" method =\"post\" onsubmit=\"return check('new_message');\">
		<input type=\"text\" name=\"new_message\" id=\"new_message\" placeholder=\"type\">
		<input type=\"text\" name=\"email\" value=\"$email\" hidden>
		<input type=\"text\" name=\"contact\" value=\"$contact\" hidden>
		<input type=\"submit\" name=\"send_message\" value=\"Send\">
	</form>";
}

if (isset($_POST['send_message'])) {
	critical_check("new_message");
	critical_check("email");
	critical_check("contact");
	critical_check("send_message");
	$new_message = sanitizeString($_POST['new_message']);
	$email_info = sanitizeString($_POST['email']);
	$contact = sanitizeString($_POST['contact']);
	check_if_empty($new_message);
	check_if_empty($email_info);
	check_if_empty($contact);
	$table = "`chats`";
	send_message($conn,$table,$email_info,$name,$contact,$new_message);
	$table = '`accounts`';
	see_messages($conn,$table,"email",$email_info,$contact);
	echo "<br><br><form action=\"reply.php\" autocomplete=\"off\" method =\"post\" onsubmit =\"return check('new_message');\">
		<input type=\"text\" name=\"new_message\" id=\"new_message\" placeholder=\"type\">
		<input type=\"text\" name=\"email\" value=\"$email_info\" hidden>
		<input type=\"text\" name=\"contact\" value=\"$contact\" hidden>
		<input type=\"submit\" name=\"send_message\"  value=\"Send\">
	</form>";
}

?>
<form action="reply.php" method="post">
		<input type="text" name="name" value="<?php echo("$name"); ?>" hidden>
		<input type="text" name="email" value="<?php echo("$email"); ?>" hidden>
		<input type="text" name="contact" value="<?php echo"$contact"; ?>" hidden>
		<br>	
		<br>	
		<input type="submit" id="reload" name="open_chat" value="Reload">
	</form>
<br>
<a href="profile.php"><button>Profile</button></a>
<?php include_once("form validation.html"); ?>
	<script type='text/javascript'>
    //Store your button reference at a "global" level
    var button2 = document.getElementById('reload');

    //Trigger your event every 3 seconds
    setInterval(function () { button2.click(); }, 180000);
</script>
</body>
</html>