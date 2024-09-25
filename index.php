<?php require("metodos.php")?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Matrícula</title>
</head>
<body>
    
    <!-- Dado el array = [3,7,11,8,1,4]

1) Mostrar por pantalla el valor de cada elemento multiplicado por vuestra edad. La edad debe pedirla por un formulario. -->

    <?php
        $numero = [3,7,11,8,1,4];
    ?>

    <h2>Ejercicio 1: MULTIPLICACIÓN</h2>
            <form action="#numero" method="GET">
                <input type="text" id="edad" name="edad" placeholder="edad"/>
                <input type="submit" value="Enviar" />
            </form>

    <p id = "numero">

        <?php
        // Inicializar la variable $edad
        $edad = null;

        // Comprobar si se ha enviado el formulario
        if (isset($_GET["edad"])) {
            // Verificar si el valor ingresado es numérico
            if (is_numeric($_GET["edad"])) {
                $edad = (int)$_GET["edad"]; // Convertir a entero
            } else {
                echo "Por favor, ingresa un número válido.";
            }
        }
        ?>

        <ul>
            <?php foreach($numero as $i):?>
                <li><?= $i * $edad; ?></li>
            <?php endforeach ?>
        </ul>
    </p>


<!-- 2) Modificar el valor de cada elemento del array por el resto de dividir cada elemento entre 2. -->

    <h2>Ejercicio 2: </h2>

        <ul>
            <?php foreach($numero as $i):?>
                <li><?= $i * ($i % 2); ?></li>
            <?php endforeach ?>
        </ul>
    </p>

<!-- Dado el string = "Jurado, Alberto, Marcelo, Pablo, Maria" -->

<h2>Ejercicio 1 de String: </h2>

    <?php
        $string = "Jurado, Alberto, Marcelo, Pablo, Maria";
    ?>

<!-- 1) Definir un array en cuya cada posición esté cada nombre del string anterior. -->

    <?php
        $arrayCadena = explode(",", $string);
        imprimirArray($arrayCadena);
    ?>


<!-- 2) Dado el array anterior, mostrar por pantalla en que posición se encuentra la letra a en cada elemento del array. -->

<h2>Ejercicio 2 de String: Mostrar en que posición se encuentra la letra indicada (en este caso la a y A)</h2>
<!-- stripos no distingue entre mayusculas y minusculas -->
<!-- strpos solo la letra q especifique, si es mayuscula solo te coge mayus y si es minu solo minus. -->
    <ul>
        <?php foreach($arrayCadena as $i):?>
            <li><?= $i." ".stripos($i, "a");?></li>
        <?php endforeach ?>
    </ul>
   

<!-- 3) Dado el array anterior, cambiar en cada elemento del array anterior la letra a por la e. -->

<h2>Ejercicio 3 de String: Remplazar una letra o cadena por otra</h2>
<!-- str_ireplace no distingue entre mayusculas y minusculas -->
<!-- str_replace solo la letra q especifique, si es mayuscula solo te coge mayus y si es minu solo minus. -->

    <ul>       
        <?php 
            foreach($arrayCadena as $i){
            // Reemplaza 'a' por 'e' en el elemento actual
                $nuevoElemento = str_ireplace("a", "e", $i);
            // Imprime el nuevo elemento dentro de una etiqueta <li>
                echo "<li>$nuevoElemento</li>";
            }
        ?>
    </ul>

<!-- 4) Crear una función que dado un array devuelva el array al revés (la posición 0 ahora tendrá el valor de la última posición y viceversa). Crearla como función normal y como función flecha. -->


<!-- 5) Dado el array de nombres, poner cada nombre en mayúsculas y al revés -->
<!-- 
1)Crea un array de números de 100 posiciones, que contendrá los números del 1 al 100. Partiendo del array ya creado y completamente relleno, obtener la suma de todos ellos y la media.
2)Crear un array de enteros donde indicamos por teclado el tamaño del array, rellenamos el array con números aleatorios entre 0 y 9, y mostramos por pantalla el valor de cada posición y la suma de todos los valores.
3)Pedir por formulario  un numero entero y crear un array de ese tamaño, con valores aleatorios entre 1 y 300. A continuación, pedir un número entero entre 0 y 9, e imprimir todas las posiciones del array que tengan un número acabado en ese dígito. Esos números, además de imprimirlos, almacenarlos en un array de salida con el tamaño adecuado.
4)Introduce por un formulario el número de tu DNI, y vuelve a imprimirlo seguido de la letra. Para calcular la letra, cogeremos el resto de dividir nuestro dni entre 23, el resultado debe estar entre 0 y 22. Tendrás que crear un array que contenga (ver imagen)

1) Define una función que reciba un número n y devuelva si es primo o no
2) Dado el array [5,1,7,8,2,4,6,3,9], comprueba si hay algún número primo
3) 

Dado el array [5,1,7,8,2,4,6,3,9], comprueba si todos son números primos
4) 

Dado el array [5,1,7,8,2,4,6,3,9], comprueba en que posición está el primer número primo
5) 
Dado el array [5,1,7,8,2,4,6,3,9], comprueba cual es el primer número primo
6) 
Dado el array [5,1,7,8,2,4,6,3,9], quédate sólo con los números primos
7)  Dado el array de números primos, dame el producto de todos los elementos del array
8)  Define una función que reciba un String y devuelva si es palíndromo o no
9) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], comprueba si hay algún palíndromo
10) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], 

comprueba si todos son palíndromos
11) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], 

comprueba en que posición está el primer palíndromo
12) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], 

comprueba cual es el primer palíndromo
13) Dado el array ["ana", "mesa", "radar","seres","folio","sudoku","amor a roma", "sol", "mar", "oso", "salas"], 

quédate sólo con los palíndromos
14)  Dado el array de números palíndromos, dame la concatenación de todos los elementos del array

Otros:
1) Dado un array de números, verifica si hay algún número negativo
2) Dado un array de Strings, encuentra el índice del primer String que empiece por la letra 'A'
3) Dado un array de números de 3 o más cifras, calcula la suma de las últimas cifras de cada número
4) Dado un array de arrays, filtra el array para que sólo queden los arrays de longitud 5
5) Dado un array de Strings, encuentra el primer string de longitud 3
6) Dado un array de números, verifica que todos los números sean de 2 cifras o más -->

</body>
</html>