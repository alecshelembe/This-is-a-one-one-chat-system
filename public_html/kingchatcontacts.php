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
<?php include_once"header.php"; ?>
<body>
	<?php echo "$email"; ?>
	<br>
	<a href="profile.php"><button>Back</button></a>
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
	show_contacts($conn,$table,"email",$email);
	?>
	<?php include_once"form validation.html"; ?>
</body>
</html>