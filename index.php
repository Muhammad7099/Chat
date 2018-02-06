<?php  

function redirect_to( $new_location ){
	header("Location: " . $new_location);
	exit;
}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>Enter</title>
</head>
<body>

<div class="container">
	
	<form id="check_in" action="index.php" method="post">
		<h3>Hello!!!</h3>
		<h4>Пожалуйста выполните вход.</h4>

			<fieldset>
				<input placeholder="Your Login:" type="text" tabindex="1" name="login" required autofocus>
			</fieldset>

				<fieldset>
					<input placeholder="Your Password:" type="password" name="password" tabindex="2" required>
				</fieldset>

			

			<button name="submit" type="submit" id="contact_subnit">Enter</button>

			<a href="enter.php">Check_in</button></a>

		
	</form>

</div>

<?php  

include_once("include.php");

$login = strip_tags(trim($_POST['login']));
$password = strip_tags(trim($_POST['password']));
$number = strip_tags(trim($_POST['number']));
$email = strip_tags(trim($_POST['email']));

if($q = mysqli_query( $link, "SELECT * FROM chat WHERE login = '$login' AND password = '$password' ") ){
	$row = mysqli_num_rows($q);
}

if($row == 1){
	redirect_to("chat.php");
}

else{
	redirect_to("error.php");
}


?>

</body>
</html>