<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'sislogin');
    
    $conn = new MySQLi(HOST, USER, PASS, BASE);

    if($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
?>