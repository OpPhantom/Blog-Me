<?php

if(isset($_POST['submit'])){
    $name = $_POST['Name'];
    $clientMail = $_POST['Email'];
    $message = $_POST['Message'];

    $mailTo = "kv200729@gmail.com";
    $headers = "From: ".$clientMail;
    $txt = "You have recieved mail from ".$name.".\n\n".$message;

    mail($mailTo, $txt, $headers);
    header("Loaction: index.html?mailSend");
}
