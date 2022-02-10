<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = <<<SQL
    INSERT INTO customers(id, name, email)
    VALUES("2", "Idad", "idadgmail.com");
SQL;

$connection->exec($sql); //exec disini untuk mengeksekusi inputkan data

$connection = null;   