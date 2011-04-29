<?php
	require_once("../config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>OPRF Tech Signup</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
		<header>
			<h2>Get More Information on the Technology Club</h2>
		</header><br />
		
		<article>
			<form method="post" action="<?php echo $kiosk; ?>/signup/processor.php">
				<label for="firstName">First Name:</label> <br /><input tabindex="1" type="text" name="firstName" id="firstName" /><br />
				
				<label for="lastName">Last Name:</label> <br /><input tabindex="2" type="text" name="lastName" id="lastName" /><br />
				
				<label for="email">E-mail Address:</label> <br /><input tabindex="3" type="text" name="email" id="email" /><br />
				
				<input type="submit" id="submit" value="Get Some Info!" tabindex="4" /><br />
				
			</form>
		</article>
	</body>
</html>
