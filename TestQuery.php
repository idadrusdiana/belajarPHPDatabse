<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statement = $connection->query($sql);

foreach ($statement as $row) {  //cara iterasi buat query
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];

    echo "id : $id" . PHP_EOL;
    echo "Name : $name" . PHP_EOL;
    echo "Email : $email" . PHP_EOL;
}

$connection = null;