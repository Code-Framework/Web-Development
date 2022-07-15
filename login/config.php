<?php
    define('USER', 'id19251342_checklog');
    define('PASSWORD', 'Aa@123456789');
    define('HOST', 'localhost');
    define('DATABASE', 'id19251342_conn');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
        echo '<p hello </p>';
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>