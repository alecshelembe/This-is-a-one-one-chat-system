<?php include_once"header.php"; 
if (isset($_COOKIE['email'])) {
  $email = $_COOKIE['email'];
} else {
  $email = "";
}
?>
<body>
	<h1>KingChat</h1>
	<form action="kingchatlogin.php" method="post" onsubmit="return check_login();">		
		<input type="text" name="email" id="email" placeholder="Email" value="<?php echo"$email" ?>">
		<br>
		<input type="password" name="security_key" id="l_security_key" placeholder="Password">
		<br>
		<input type="submit" value="Login">
	</form>
	<br>
	<a href="kingsignuppage.php"><button>Sign Up</button></a>
	<?php include_once"form validation.html"; ?>
</body>
</html>