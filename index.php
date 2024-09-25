<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Matrícula</title>
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
        
        .details strong {
            margin-right: 10px; /* Espaciado entre la etiqueta y el valor */
        }

        .checkbox-group {
            margin-top: 10px; /* Espaciado para la lista de checkboxes */
        }
    </style>
</head>
<body>
    
    <h2>Matrícula</h2>
    <form action="#card.php" method="POST">
        <div class="details">
            <input type="text" id="name" name="Nombre" placeholder="Nombre" required/>
            <input type="text" id="ap1" name="Apellido1" placeholder="Primer Apellido" required/>
            <input type="text" id="ap2" name="Apellido2" placeholder="Segundo Apellido" required/>
        </div>
        <div class="details">
            <input type="text" id="peso" name="peso" placeholder="Peso (Kg)" />
        </div>
        <div class="details">
            <input type="text" id="altura" name="altura" placeholder="Altura (cm)" />
        </div>
        <label>Asignaturas de Desarrollo de Aplicaciones Web:</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="asignatura[]" value="servidor"> Servidor</label><br>
            <label><input type="checkbox" name="asignatura[]" value="cliente"> Cliente</label><br>
            <label><input type="checkbox" name="asignatura[]" value="diseno"> Diseño</label><br>
            <label><input type="checkbox" name="asignatura[]" value="despliegue"> Despliegue</label><br>
            <label><input type="checkbox" name="asignatura[]" value="libre_configuracion"> Libre Configuración</label><br>
            <label><input type="checkbox" name="asignatura[]" value="empresa_iniciativa"> Empresa e Iniciativa Emprendedora</label><br>
            <label><input type="checkbox" name="asignatura[]" value="proyecto"> Proyecto (TFG)</label><br>
            <label><input type="checkbox" name="asignatura[]" value="fct"> Formación en Centro de Trabajo (FCT)</label><br>
        </div>
        <input type="submit" value="Enviar" />
    </form>

</body>
</html>
