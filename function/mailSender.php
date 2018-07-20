<?php
    if(!isset($_POST['email']) && !isset($_POST['name']) && !isset($_POST['human']) !isset($_POST['message'])){
        header('Location: http://home.elementarsti.com.br/contactus.php?error="missingFieldsParameters"');
    }else{
        header('Location: http://home.elementarsti.com.br/contactus.php?success=1');
    }
    // $to = "somebody@example.com";
    // $subject = "My subject";
    // $txt = "Hello world!";
    // $headers = "From: webmaster@example.com" . "\r\n" .
    // "CC: somebodyelse@example.com";

    // mail($to,$subject,$txt,$headers);

?>