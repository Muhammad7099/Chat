<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>check in</title>
</head>
<body>

<div class="container">
	
	<form id="check_in" action="enter.php" method="post">
		
		<h3>Welcome!!!</h3>
		<h4>Пожалуйста, пройдите регистрацию.</h4>

			<fieldset>
				<input placeholder="Your Login:" type="text" tabindex="1" name="login" required autofocus>
			</fieldset>

				<fieldset>
					<input placeholder="Your Password:" type="password" name="password" tabindex="2" required>
				</fieldset>

			<fieldset>
				<input placeholder="Your Phone Number:" type="tel" name="number" tabindex="3" required>
			</fieldset>

				<fieldset>
					<input placeholder="Your Email Address:" type="email" name="email" tabindex="4" required>
				</fieldset>

			<fieldset>
				<textarea placeholder="Type your Message here..." tabindex="5" ></textarea>
			</fieldset>

			<button name="submit" type="submit" id="contact_subnit" formaction="index.php">Authorization</button>
	
	</form>

</div>

<?php  

include_once("include.php");

$login = strip_tags(trim($_POST['login']));
$password = strip_tags(trim($_POST['password']));
$number = strip_tags(trim($_POST['number']));
$email = strip_tags(trim($_POST['email']));

$q = mysqli_query( $link, "INSERT INTO chat ( login, password, `number`, email ) VALUES ( '$login', '$password', '$number', '$email' )" );

?>

</body>
</html>