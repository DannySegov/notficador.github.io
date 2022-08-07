<?php

if (isset($_POST['enviar'])) {
    if (!empty($_POST['name']) && !empty($_POST['asunto']) && !empty($_POST['msg']) && !empty($_POST['email'])) {
        $name = $_POST['email'];
        $asunto = $_POST['asunto'];
        $msg = $_POST['msg'];
        $email = $_POST['email'];
        $header = "From: noreply@example.com" ."\r\n";
        $header.= "Reply-To: noreply@example.com" ."\r\n";
        $header.= "X-Mailer: PHP/".phpversion();
        $mail = mail($email,$asunto,$msg,$header);
        if ($mail) {
            echo "<h4>¡Mail enviado exitosamemente!</h4>";
        } 
    }
}