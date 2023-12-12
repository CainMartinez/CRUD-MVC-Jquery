<?php
    $env = parse_ini_file('C:/sites/.env.ini');

	$db_host = $env['DB_HOST'];
    $db_name = $env['DB_NAME'];
    $db_password = $env['DB_PASSWORD'];
    $db_user = $env['DB_USER'];

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
?>
