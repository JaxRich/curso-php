<?php 

$alex = array('telefono' => '8122041676', 'edad' => 25, 'apellido' => 'juanjolote', 'pais' => 'MEX');

$alex['pais'] = 'ARG';

# Para acceder a los datos
echo $alex['telefono'] . '<br />';
echo $alex['pais'] . '<br />' . '<br />';
echo 'El telefono de Alex es: ' . $alex['telefono'] . ' y su pais es: ' . $alex['pais'];


?>