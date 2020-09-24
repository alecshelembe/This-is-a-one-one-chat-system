<?php
session_start();
$email = $_SESSION['email'];
if (!isset($email)) {
	header("location:index.php");
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
	<?php echo "$email"; ?>
	<br>
	<br>
	<form action="kingchatlogout.php" method="post">	
		<input type="submit" name="logout" value="Logout">
	</form>
	<br>
	<br>
	<form action="kingchataddcontact.php" method="post">
		<input type="text" name="name" value="<?php echo("$name"); ?>" hidden>
		<input type="text" name="email" value="<?php echo("$email"); ?>" hidden>
		<input type="text" name="contact" placeholder="Email">	
		<input type="submit" name="new_contact" value="Save Contact">
	</form>
	<?php
	$table = '`contacts`';
	include_once("functions.php");
	mysqli_select_db($conn, $dbname);
	show_contacts($conn,$table,"email",$email);
	?>
</body>
</html>