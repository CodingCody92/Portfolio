<?php

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