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

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$message = stripslashes($_POST['message']);


$error = '';

// Check name

if(!$name)
{
$error .= 'Bitte geben Sie Ihren Namen ein.<br />';
}

// Check email

if(!$email)
{
$error .= 'Bitte geben Sie eine E-Mail Adresse an.<br />';
}

if($email && !ValidateEmail($email))
{
$error .= 'Bitte geben Sie eine gültige E-Mail Adresse an.<br />';
}

// Check message (length)

if(!$message)
{
$error .= "Möchten Sie uns nicht gerne etwas mitteilen?<br />";
}


if(!$error)
{
ini_set("sendmail_from", WEBMASTER_EMAIL); // for windows server
$mail = mail(WEBMASTER_EMAIL, "Eine neue Anfrage zur Verdammnis ist erfolgt.", $message,
     "From: ".$name." <".$email.">\r\n"
    ."Reply-To: ".$email."\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
echo 'Vielen Dank. Sie hören so schnell wie möglich von uns.';
}

}
else
{
echo '<div class="alert alert-error">'.$error.'</div>';
}

}
?>
