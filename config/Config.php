<?php

// Obtener el host del servidor
$server_host = $_SERVER['HTTP_HOST'];

//echo $server_host;

// Definir la URL base
define('BASE_URL', 'http://' . $server_host . '/');

