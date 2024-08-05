<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $datetime = $_POST['datetime'];
    $numpeople = $_POST['numPeople'];
    $message = $_POST['message'];

    $mailTo = "taveras123n@gmail.com";
    $headers = "From: ".$email;
    $txt = "You have a message ".$name".\n\n".$message;

    mail($mailTo, $name, $txt, $headers);

    header("Location: index.html?MessageSent");

}
?>