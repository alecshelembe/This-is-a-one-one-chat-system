<?php
// sever
$dbsevername = "localhost";
$dbusername = "id14954189_kingchatuser";
$dbpassword = "a<K(Tw|(Y5~JIx0";
$dbname = "id14954189_kingchat";

$conn = mysqli_connect($dbsevername, $dbusername, $dbpassword);

function wait($var) {
	sleep($var);
}

function redirect_back() {
	echo("<script type=\"text/javascript\">
		window.history.go(-1);
		</script>");
}

function message_information_missing() {
	echo("<script type=\"text/javascript\">
		alert(\"Information missing\");
		</script>");
}

function check_if_empty($var) {
	if (empty($var)) {
		message_information_missing();
		redirect_back();
		die();
	}
}

function critical_check($var){
	if (!isset($_POST[$var])) {
		die("$var not found");
	}
}

function sanitizeString($var) {    
	if (get_magic_quotes_gpc())

		$var = stripsloashes($var);   
	$var = htmlentities($var);    
	$var = strip_tags($var); 

	if (strlen($var) > 400 ) {
		echo"Charachter break";
		die("fatal error"); 
	}
	$var = addslashes($var);
	return $var; 
}



function password_check($var,$var2) {
	if ($var !== $var2) {
		echo("<script type=\"text/javascript\">
			alert(\"Passwords don't match.\");
			</script>");
		redirect_back();
		die();
	}
}

function code_match($var,$var2) {
	if ($var !== $var2) {
		echo("<script type=\"text/javascript\">
			alert(\"Something went wrong\");
			</script>");
		redirect_back();
		die();
	}
}

function end_last_login($var) {
	if (isset($_SESSION[$var])) {
		session_reset();
	} 
}

function logout($var) {
	session_destroy();
}

function wrongpassword() {

	echo("<script type=\"text/javascript\">
		alert(\"Wrong password\");
		window.history.go(-1);
		</script>");

}

function loggod_out_message() {

	echo("<script type=\"text/javascript\">
		alert(\"Logged out. \");
		window.history.go(-1);
		</script>");
}

function account_created() {

	echo("<script type=\"text/javascript\">
		alert(\"Account created you may login. \");
		window.history.go(-1);
		</script>");
}

function account_exits() {

	echo("<script type=\"text/javascript\">
		alert(\"Email in use. \");
		window.history.go(-1);
		</script>");
}

function no_account_exits() {

	echo("<script type=\"text/javascript\">
		alert(\"Email not in use. \");
		window.history.go(-1);
		</script>");
}

function contact_added_message(){
    
echo("<script type=\"text/javascript\">
    alert(\"Contact saved.\");
    </script>");

}

function no_chat() {

	echo("<script type=\"text/javascript\">
		alert(\"asdf \");
		</script>");
}

function go_to($var){

	echo("<script type=\"text/javascript\">
		window.location.replace(\"$var\");
		</script>");
}

function create_account($varconn,$table,$email,$email_info,$name,$name_info,$security_key,$security_key_info) {

	$query = "SELECT * FROM $table WHERE $email = '$email_info';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

	$row = mysqli_num_rows($result);
	if ($row !== 0) {
		account_exits();
		exit();
	}

	$query = "INSERT INTO $table ($email,$name,$security_key,account_state) VALUES ('$email_info','$name_info','$security_key_info','1');";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

	account_created();
	redirect_back();

}

function pair_for_login($varconn,$table,$email,$email_info,$security_key,$security_key_info) {

	$query = "SELECT * FROM $table WHERE $email = '$email_info';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

	$row = mysqli_num_rows($result);
	if ($row == 0) {
		no_account_exits();
		exit();
	}

	$security_key = "";

	while ($row = mysqli_fetch_assoc($result)) {
		$security_key = $row['security_key'];
	}
	
	if ($security_key !== $security_key_info ){
		wrongpassword();
		exit();
	}


	$query = "SELECT * FROM $table WHERE $email = '$email_info';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));


	$account_state = "";
	$login_times="";
	
	while ($row = mysqli_fetch_assoc($result)) {
		$account_state = $row['account_state'];
		$login_times = $row['login_times'];
	}

	if($login_times == ""){
		$login_times = "0";
	}

	$login_times++;
	

	if ($account_state == 0 ){
		die("Contact Kingproteas");
	}

	$query = "SELECT * FROM $table WHERE $email = '$email_info';";

	$result = mysqli_query($varconn,$_SESSION['ready'] = $query) or die(mysql_error($varconn));

	while ($row = mysqli_fetch_assoc($result))
	{ 

		$email = $_SESSION['email'] = $row['email'];
		$name = $_SESSION['name'] = $row['name'];

	}

	$query = "UPDATE $table
	SET `login_times` = '$login_times' WHERE $table.`security_key` = '$security_key_info';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

}

function new_contact($varconn,$table,$email,$email_info,$name,$name_info,$contact_info){

	if ($email_info == $contact_info) {
		exit("Identical contact.");
	}

	$table ="`accounts`";

	$query = "SELECT * FROM $table WHERE $email = '$contact_info';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));


	$row = mysqli_num_rows($result);
	if ($row == 0) {
		no_account_exits();
		exit();
	}

	$table ="`contacts`";
	
	$query = "SELECT * FROM $table WHERE $email = '$email_info';";

	$result = mysqli_query($varconn,  $query) or die(mysqli_error($varconn));

	$row = mysqli_num_rows($result);
	if ($row == 0) {
		
		$query = "INSERT INTO `contacts` (`email`, `name`, `contact_1`, `contact_2`, `contact_3`, `contact_4`, `contact_5`, `contact_6`, `contact_7`, `contact_8`, `contact_9`, `contact_10`, `contact_11`, `contact_12`, `contact_13`, `contact_14`, `contact_15`, `contact_16`, `contact_17`, `contact_18`, `contact_19`, `contact_20`, `contact_21`, `contact_22`, `contact_23`, `contact_24`, `contact_25`, `contact_26`, `contact_27`, `contact_28`, `contact_`, `contact_30`) VALUES ('$email_info', '$name_info', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');";

		$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));
	}

	$x = 1;
	$contact_ = 'contact_';
	$row = "1";
	while ($row !== "") {

		$query = "SELECT `$contact_$x` FROM $table WHERE  $email = '$email_info';";

		$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

		$row = mysqli_fetch_assoc($result);
		$row = implode(" ",$row);

		if ($row == "") {

			$query = "UPDATE $table SET `$contact_$x` = '$contact_info' WHERE `contacts`.`email` = '$email_info';";

			$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));
		}

		$x++;
			
	}	

}

function show_contacts($varconn,$table,$email,$email_info) {

		$query = "SELECT * FROM $table WHERE $email = '$email_info';";

		$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

	$row = mysqli_num_rows($result);
	if ($row == 0) {
		echo ("No contacts saved");
	}
	
	if($row > 0 ){
	    $x = 1;
	    $contact_ = 'contact_';
    	$row = "1";
	
	    while ($row !== "") {

	    	$query = "SELECT `$contact_$x` FROM $table WHERE  $email = '$email_info';";

		    $result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

		    $row = mysqli_fetch_assoc($result);
		    $row = implode(" ",$row);

		    if ($row !== "") {

			     echo"<form action=\"reply.php\" method=\"post\">
					<input type=\"text\" value =\"$row\"
			 		name=\"contact\"><input type=\"submit\" name=\"open_chat\" value =\"Open chat\">
			    	</form>";
			 
	        	}

	    	$x++;
			
	    }	
	
	}

}

function see_messages($varconn,$table,$email,$email_info,$contact){

	$query = "SELECT * FROM $table WHERE $email = '$contact';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));


	$row = mysqli_num_rows($result);
	if ($row == 0) {
		no_account_exits();
		exit();
	}

	$table = '`chats`';

	if ($email_info == $contact) {
		exit("Identical contact.");
	}

	$query = "SELECT * FROM $table WHERE email1 = '$email_info' and email2 = '$contact';";

	$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

	$row = mysqli_num_rows($result);

	if ($row == 0) {
		
		$query = "SELECT * FROM $table WHERE email1 = '$contact' and email2 = '$email_info';";

		$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

		$row = mysqli_num_rows($result);
		
		if ($row == 0) {

			$query = "INSERT INTO `chats` (`email1`, `email2`, `message_1`, `message_2`, `message_3`, `message_4`, `message_5`, `message_6`, `message_7`, `message_8`, `message_9`, `message_10`, `message_11`, `message_12`, `message_13`, `message_14`, `message_15`, `message_16`, `message_17`, `message_18`, `message_19`, `message_20`, `message_21`, `message_22`, `message_23`, `message_24`, `message_25`, `message_26`, `message_27`, `message_28`, `message_29`, `message_30`) VALUES ('$email_info', '$contact', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');";

			$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

		}	

	}

	$x = 1;
	$message_ = 'message_';
	$row = "1";
	while ($row !== "") {

		$query = "SELECT `$message_$x` FROM $table WHERE  email1 = '$email_info' and email2 = '$contact';";

		$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

		$row = mysqli_num_rows($result);

		if ($row == 0) {

			$query = "SELECT `$message_$x` FROM $table WHERE  email1 = '$contact' and email2 = '$email_info';";

			$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));
		}

		$row = mysqli_fetch_assoc($result);
		$row = implode(" ",$row);

		if ($row !== "") {
			 echo"<br>$row";			 
		}

		$x++;
			
	}	

	///////////code

	
}

function send_message($varconn,$table,$email_info,$name,$contact_info,$new_message){

	$x = 1;
	$message_ = 'message_';
	$row = "1";
	while ($row !== "") {

		$query = "SELECT `$message_$x` FROM $table WHERE  email1 = '$email_info' and email2 = '$contact_info';";

		$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

		$row = mysqli_num_rows($result);

		if ($row == 0) {

			$query = "SELECT `$message_$x` FROM $table WHERE  email1 = '$contact_info' and email2 = '$email_info';";

			$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));
		}

		$row = mysqli_fetch_assoc($result);
		$row = implode(" ",$row);

		if ($row == "") {

			$query = "UPDATE $table SET `$message_$x` = '$name: $new_message' WHERE email1 = '$contact_info' and email2 = '$email_info';";


			$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));

			$query = "UPDATE $table SET `$message_$x` = '$name: $new_message' WHERE email1 = '$email_info' and email2 = '$contact_info';";


			$result = mysqli_query($varconn, $query) or die(mysqli_error($varconn));
		}

		$x++;
			
	}		

}

?>