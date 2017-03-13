<html><head></head>
<body>
<?php
include './_email.php';
$name = $_POST['Name'];
$email = $_POST['Email'];
$comm = $_POST['Comments'];
$atSign = '@';
$periodSign = '@';



$pos1 = strpos ( $comm , $atSign);
$pos2 = strpos ( $comm , $periodSign);

$f = "WEBSITE COMMENT\n========================\n\n";
$f .= "Name: " . $name;
$f .= "\nEmail: " . $email;
$f .= "\nComments: " . $comm;


if (strlen($name) >= 10 && strlen($comm) >= 25 && $pos1 >= 0 && $pos2 >= 0){
	sendMyMail("sndriuss@gmail.com", "sndriuss@gmail.com", "Andrius Sirvys", "Website comment", $f);
	echo("Thank you!");
}
else
echo("Error");
?>
</body></html>