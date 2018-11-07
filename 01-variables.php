<?php 


# Las var deben de iniciar con "$", son sensibles a mayusculas y minusculas
# String: Cadena de texto
$nombre = 'Saul';

# Integer: numeros enteros
$numero = 7;

# Double: Numeros con decimales
$numero_decimal = 75.42;

# Boolean: Verdadero o falso (true/false)
$esVerdad = "false";

# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando a una var n s ele asigna valor

echo "Hola, $nombre";
echo ' Hola,' . $numero;
echo gettype($numero_decimal);

 ?>