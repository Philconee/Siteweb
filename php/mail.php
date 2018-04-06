<?
$email = "ico@istrium.com";

$mail = $_POST['email'];

$msg .= "E-mail: ".$mail."\r\n";

$headers = 'From: '.$mail."\r\n".
'Reply-To: '.$mail."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email, 'Istrium', $msg, $headers);
echo "Sent from ".$mail;
?>