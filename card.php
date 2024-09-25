<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de Matrícula</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        
        .details {
            display: flex;
            align-items: center; /* Alinea verticalmente el contenido */
            margin-bottom: 10px; /* Espaciado entre líneas */
        }
        
        /* Estilo para los nombres y apellidos */
        .details p {
            margin-left: 5px;  /* Espacio pequeño a la izquierda */
            margin-right: 30px; /* Espacio más grande a la derecha */
        }
        .asignaturas {
            margin-top: 10px; /* Espaciado para la lista de asignaturas */
        }
    </style>
</head>
<body>
    
    <h2>Detalles de Matrícula</h2>
        
    <?php
    // Obtener datos del formulario
    $nombre = $_POST['Nombre'];
    $apellido1 = $_POST['Apellido1'];
    $apellido2 = $_POST['Apellido2'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $asignaturas = isset($_POST['asignatura']) ? $_POST['asignatura'] : [];
    ?>

    <div class="details">
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Primer Apellido:</strong> <?php echo $apellido1; ?></p>
        <p><strong>Segundo Apellido:</strong> <?php echo $apellido2; ?></p>
    </div>
    <div class="details">
        <p><strong>Peso:</strong> <?php echo $peso." "; ?> kg</p>
    </div>
    <div class="details">
        <p><strong>Altura:</strong> <?php echo $altura." "; ?> cm</p>
    </div>

    <p class="asignaturas"><strong>Asignaturas Seleccionadas:</strong></p>
    <ul>
        <?php foreach ($asignaturas as $asignatura): ?>
            <li><?php echo $asignatura; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
