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
	<form action="kingchatlogout.php" method="post">	
		<input type="submit" name="logout" value="Logout">
	</form>
	<br>
	<a href="kingchatcontacts.php"><button>Contacts</button></a>
</body>
</html>