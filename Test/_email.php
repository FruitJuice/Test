<?php
function sendMyMail($fromEmail, $toEmail, $fromName, $subject, $body) {
$headers = 'From: ' . $fromName . "\r\n" .
'Reply-To: ' . $fromEmail . "\r\n" .
'X-Mailer: PHP/' . phpversion();
return mail($toEmail, $subject, $body, $headers);
}
?>