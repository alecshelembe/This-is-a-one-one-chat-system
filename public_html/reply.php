<?php
session_start();
include_once("functions.php");
mysqli_select_db($conn, $dbname);
$email = $_SESSION['email'];
if (!isset($email)) {
    $location = "index.php";
	go_to($location);
	die();
}
$name = $_SESSION['name'];
?>
<?php include_once"header.php"; ?>
<body>
<?php
if (!isset($_GET['open_chat']) && !isset($_POST['send_message'])) {
	redirect_back();
}

if (isset($_GET['open_chat'])) {
	not_critical_check("contact");
	$contact = sanitizeString($_GET['contact']);
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
<br>
<a href="kingchatcontacts.php"><button>Back</button></a>
<?php include_once("form validation.html"); ?>
	<script type='text/javascript'>

	window.scrollTo({ left: 0, top: document.body.scrollHeight, behavior: "auto" });
		
	let typing = document.getElementById("new_message");

	window.setInterval(function(){
		if (typing.value =='') {
			window.location.reload(1);
		}
	}, 15000);

</script>
</body>
</html>