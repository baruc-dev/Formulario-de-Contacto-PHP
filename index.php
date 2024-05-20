<?php


$enviado = '';
$errores = '';

if(isset($_POST['submit']))
{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if(!empty($nombre))
    {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

    }
    else
    {
        $errores .= 'Ingresa un Nombre <br />';
    }

    if(!empty($correo))
    {
        $correo = trim($correo);
        $correo = filter_var($nombre, FILTER_SANITIZE_EMAIL);
        
        
    }
    else
    {
        $errores .= 'Ingresa un Correo <br />';
    }

    if(!empty($mensaje))
    {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
        
    }
    else
    {
        $errores .= 'Ingresa un mensaje <br />';
    }

    $enviar_a = '';
    $asunto = 'Correo enviado desde X';
    $mensajecorreo = "De: $nombre \n ";
    $mensajecorreo .= "Correo: $correo \n";
    $mensajecorreo .=  'Mensaje: ' .$mensaje;


   mail($enviar_a, $asunto, $mensajecorreo);
    $enviado = 'true';

}


require 'index.view.php';



?>
