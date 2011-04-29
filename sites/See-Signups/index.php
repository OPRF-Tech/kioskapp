<?php
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>OPRF Technology Club Sign-In beta 0.2</title>
</head>

<body>
<h1 style="display: inline-block;">Table of people in the signup db, just to show that they're processed</h1>
<form method="post" action="assets/php/signInProcess.php">
	<table style="display:inline-block;">
		<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>
		<?php 
			
			$connection = mysql_connect('127.0.0.1', 'root', ' ');
			mysql_select_db('techin');
			$query = "SELECT * FROM members";
			$result = mysql_query($query);
			$num = mysql_numrows($result);
			
			for ($i = 0; $i < $num; $i++) {
				$fname = mysql_result($result,$i,"firstName");
				$lname = mysql_result($result,$i,"lastName");
				$email = mysql_result($result,$i,"email");
				echo "<tr><td>" . $fname . "</td><td>" . $lname . "</td><td>" . $email . "</td></tr>";
			}
			
		?>
	</table>
</form>
<!--<div id="signedIn" style="border: 1px #000000 solid; height: 48px; overflow:scroll; width: 1000px; display:inline-block">-->

<!--</div>-->

</body>

</html>
