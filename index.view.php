<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre))echo $nombre; ?>" id="nombre">

            <input type="email" class="form-control" name="correo" placeholder="correo:" value="<?php if(!$enviado && isset($correo))echo $correo; ?>" id="correo">

            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="mensaje" value="<?php if(!$enviado && isset($mensaje))echo $mensaje; ?>"></textarea>
            
            <?php if (!empty($errores)): ?>
                <div class="alert error">
                        <?php echo $errores; ?>
                </div>
            
            <?php elseif ($enviado): ?>
                <div class="alert success">
                        <p>Enviado Correctamente</p>
                </div>
            <?php endif ?>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>

    
</body>
</html>