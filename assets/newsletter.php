<?php
/*
Credits: Bit Repository
URL: http://www.bitrepository.com/
*/

include dirname(dirname(__FILE__)).'/config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{
include 'functions.php';

$email = trim($_POST['e-mail']);

$error = '';

// Check email

if(!$email)
{
$error .= 'Bitte geben Sie eine E-Mail Adresse an.';
}

if($email && !ValidateEmail($email))
{
$error .= 'Bitte geben Sie eine gültige E-Mail Adresse an.';
}

// Check message (length)


if(!$error)
{
ini_set("sendmail_from", WEBMASTER_EMAIL); // for windows server

// The e-mail message being sent to the admin - you can change the content of the message below.
$mail = mail(WEBMASTER_EMAIL, "Eine neue Bekehrung ist erfolgt.", "Super, nimm " . $email . " in deinen Bann auf!",
     "From: <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
echo 'Vielen Dank. Sie hören bald von uns.';
}

}
else
{
echo '<div class="alert alert-error">'.$error.'</div>';
}

}
?>
