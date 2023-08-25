<?php

    if (!empty($_POST['nombre']) && !empty($_POST['telefono']) && !empty($_POST['email'])){
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $asunto = "CATÁLOGO EMPRESA YUNTAS";
        $msg = "De click en el siguiente enlace para visualizar el catálogo: https://drive.google.com/file/d/1LexA-GMVwtBLiKiDq4SRPZrcKo-pbSak/view";
        $email = $_POST['email'];
        $header = "From: noreply@example.com" . "\r\n";
        $header.= "Reply-To: noreply@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email,$asunto,$msg,$header);
        if($mail){
            echo '<script language="javascript">alert("Catálogo enviado con exito revisar en span");</script>';
            
        }
    }
