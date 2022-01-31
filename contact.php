<?php

"php.executablePath": "C:/wamp64/bin/php/php7.1.9/php.exe",
"php.validate.executablePath": "C:/wamp64/bin/php/php7.1.9/php.exe"

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailForm = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "codyalexanderhill@gmail.com, chill31806@yahoo.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have a message " .$name"./n/n".$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: index.html?MessageSent");

}

?>