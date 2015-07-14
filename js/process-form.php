<?php

$name = $_POST ['name'];
$email = $_POST ['email'];
$tele = $_POST ['tele'];
$email = $_POST ['email'];
$message = $_POST ['message'];

$to = "herrera190@gmail.com";
$subject = "Contacto desde Web Page";

@mail ($to, $subject, $message, "From " . $name . $email. $tele};
echo "Bedankt. We nemen zo snel mogelijk contact met u op.";
$cleaned_voornaam = preg_replace("/[^ 0-9a-zA-Z]/", "_", $_POST['name']);

?>