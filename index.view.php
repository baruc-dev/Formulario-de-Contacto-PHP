<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Formulario de Contacto</title>
</head>
<body>
    
<div class="wrap">

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" id="formprincipal">

    <input type="text" class="form-control" name="nombre" placeholder="Nombre:" id="nombre">
    <input type="email" class="form-control" name="correo" placeholder="Correo:" id="correo">

    <textarea name="mensaje" class="form-contro" id="mensaje" placeholder="Mensaje"></textarea>
    
    <?php if (!empty($errores)): ?>
    <div class="alert error">
        <?php echo $errores; ?>
    </div>


    <?php elseif($enviado) : ?>

        <div class="alert success">
        <p>Enviado Correctamente</p>
        </div>
    <?php endif ?>
   

    <input type="submit" value="enviar" name="submit" class="disabled btn" disabled>

    </form>


</div>


</body>

<script src="js/app.js"></script>
</html>