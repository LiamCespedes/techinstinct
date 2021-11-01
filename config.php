<?php
    //change these to whatever your localhost database uses
    define('USER', 'root');
    define('PASSWORD', 'liam1234');
    define('HOST', 'localhost');
    define('DATABASE', 'techinstinct');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>