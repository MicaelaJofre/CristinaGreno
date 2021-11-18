<?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mensaje = $_POST['mensaje'];
    $formcontent="Nombre: $nombre \n E-mail: $email \n Telefono: $tel \n Mensaje: $mensaje";
    $recipient = "mkjofre@gmail.com";
    $subject = "Consulta por el sitio web de arte";
    $header = "From: $email \r\n";
    $header .= "Content-Type: text/plain; charset=UTF-8";
    mail($recipient, $subject, $formcontent, $header) or die("Error!");
    header("Location:  ../index.html");
?>