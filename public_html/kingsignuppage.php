<?php include_once"header.php"; ?>
<body>
<h2>Create Account</h2>
	<form action="kingchatcreateaccount.php" method="post" onsubmit="return check_sign_up();">	
		<br>
		<input type="text" name="name" id="name" placeholder="Username">
		<br>
		<input type="text" name="email" id="e_mail" placeholder="Email">
		<br>
		<input type="password" name="security_key" id="s_security_key" placeholder="Password">
		<br>
		<input type="password" name="security_key" id="confirm_password" placeholder="Confirm Password">
		<br>
		<input type="submit" value="Create account">
	</form>
	<br>
	<a href="index.php"><button>Login</button></a>
	<?php include_once"form validation.html"; ?>
</body>
</html>