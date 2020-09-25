<?php
session_start();
include_once("functions.php");
$email = $_SESSION['email'];
if (!isset($email)) {
    $location = "index.php";
    go_to($location);
	exit();
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
	<?php echo "$email"; ?>
	<br>
	<br>
	<form action="kingchatlogout.php" method="post">	
		<input type="submit" name="logout" value="Logout">
	</form>
	<br>
	<br>
	<form action="kingchataddcontact.php" method="post" onsubmit="return check('contact')";>
		<input type="text" name="name" value="<?php echo("$name"); ?>" hidden>
		<input type="text" name="email" value="<?php echo("$email"); ?>" hidden>
		<input type="text" name="contact" id ="contact" placeholder="Email">	
		<input type="submit" name="new_contact" value="Save Contact">
	</form>
	<?php
	$table = '`contacts`';
	mysqli_select_db($conn, $dbname);
	show_contacts($conn,$table,"email",$email);
	?>
	<?php include_once"form validation.html"; ?>
</body>
</html>