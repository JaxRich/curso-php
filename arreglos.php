<?php 

$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

# Ó

# Arreglo de tipo indexado
$arreglo = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', array('uno', 4, false), 'Domingo', true];
# En los arreglos de PHP se pueden guardar cualquier cosa, es decir, multiples valores enteros, arreglos, boleanos, etc.

# Para acceder a los valores
$semana[7] = 'Loredas';

#Para dar un salto de línea se utiliza --> . '<br />'
echo $semana[5] . '<br />';
echo $semana[6] . '<br />';
echo $semana[7] . '<br />';

#Para mostrar en pantalla un elemento del arreglo
# echo $semana[1];

# En un arreglo asociativo nos permite acceder a los valores mediante cadenas que se especifiquen
# es decir, mediante asociaciones

?>