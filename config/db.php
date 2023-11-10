<?php
    $envFilePath = __DIR__ . '/../.env';

    if (file_exists($envFilePath)) {
        $env = parse_ini_file($envFilePath);

        if (
            isset($env['DB_HOST']) &&
            isset($env['DB_USERNAME']) &&
            isset($env['DB_PASSWORD']) &&
            isset($env['DB_DATABASE'])
        ) {
            $db = mysqli_connect($env['DB_HOST'], $env['DB_USERNAME'], $env['DB_PASSWORD']);

            mysqli_select_db($db, $env['DB_DATABASE']);

            mysqli_set_charset($db, 'utf8');
        } else {
            die('Error: Las variables de entorno de la base de datos no están configuradas correctamente.');
        }
    } else {
        die('Error: El archivo .env no se ha encontrado.');
    }
?>
