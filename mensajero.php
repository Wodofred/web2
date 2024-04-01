<?php
if(isset($_POST['submit']))
{
    $para = "182308@upslp.edu.mx";
    $asunto = "Enviando informacion";
    $nombre = $_POST['nombre'];
    $correo = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $headers = "MIME-Version: 1.0\r\n";/*Multipurpose Internet Mail Extensions*/
    $headers = "Content-type: text/html; charset=utf8\r\n";
    $cuerpo = "Enviado por: $nombre\n E-mail: $correo\n Mensaje: $mensaje\n";

    $bool = mail($para,$asunto,$cuerpo,$headers);
}
else{
    echo "Ocurrio un error";
}