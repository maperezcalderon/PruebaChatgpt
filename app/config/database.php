<?php

/**
 * Example of creating a PDO database connection.
 *
 * Update the DSN, username, and password according to your database server.
 */
function createDatabaseConnection(): PDO
{
    $dsn = 'mysql:host=localhost;dbname=mi_base_de_datos;charset=utf8mb4';
    $username = 'usuario';
    $password = 'contraseña_segura';

    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    return new PDO($dsn, $username, $password, $options);
}

// Usage example:
// try {
//     $pdo = createDatabaseConnection();
//     echo 'Conexión exitosa a la base de datos';
// } catch (PDOException $e) {
//     echo 'Error de conexión: ' . $e->getMessage();
// }
