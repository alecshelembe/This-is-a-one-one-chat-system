<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173395669-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-173395669-1');
	</script> 
	<title>Chat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>KINGCHAT</h1>
	<h2>Login</h2>
	<form action="kingchatlogin.php" method="post" onsubmit="return check_login();">		
		<input type="text" name="email" id="email" placeholder="Email">
		<br>
		<input type="password" name="security_key" id="l_security_key" placeholder="Password">
		<br>
		<input type="submit" value="Login">
	</form>
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
	<?php include_once"form validation.html"; ?>
</body>
</html>