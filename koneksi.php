<?php
    $dbserver = 'localhost';
    $dbname = 'kuliahweb';
    $dbuser= 'root';
    $dbpassword = '';
    $dsn = "mysql:host={$dbserver};dbname={$dbname}";

    $koneksi = null;
    try {
        $koneksi = new PDO($dsn, $dbuser, $dbpassword);
    }catch (Exception $exception){
        die("Terjadi error: {$exception->getMessage()}");
    }