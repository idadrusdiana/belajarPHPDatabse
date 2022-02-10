<?php

require_once __DIR__ . '/GetConnection.php';

$connection =  getConnection();

$connection->beginTransaction();

$connection->exec("INSERT INTO comments(email, comment) VALUES('idad@gmail.com', 'h1')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('idad@gmail.com', 'h1')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('idad@gmail.com', 'h1')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('idad@gmail.com', 'h1')");
$connection->exec("INSERT INTO comments(email, comment) VALUES('idad@gmail.com', 'h1')");

// $connection->commit(); // untuk memasukkan data
$connection->rollBack(); //untuk undo data yang di mauskkan

$connection = null;