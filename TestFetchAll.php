<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->Query($sql);

$customers = $statement->fetchAll(); // fetch all disni untuk manggil data secara keseluruhan
var_dump($customers);

$connection = null;