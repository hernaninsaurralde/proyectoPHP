<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <h1>Synth</h1>
    <h3>Nombre: <?php echo $contacto['nombre'] ?> </h3>
    <h3>Apellido: <?php echo $contacto['apellido'] ?> </h3>
    <h3>Correo: <?php echo $contacto['correo'] ?></h3>

    <p> <?php echo $contacto['mensaje'] ?></p>
</body>
</html>