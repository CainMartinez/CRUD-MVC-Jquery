<?php
function console_log($data){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
}
// Para llamar a esta función desde cualquier parte de tu código, simplemente incluye el archivo debug.php
// y llama a la función console_log() con los datos que quieras mostrar en la consola del navegador:

// include 'debug.php'; // Asegúrate de que la ruta al archivo debug.php sea correcta

// $data = array("color1" => "red", "color2" => "blue"); Tus datos aquí

// console_log($data); Llama a la función con tus datos
?>