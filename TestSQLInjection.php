<?php 

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "idad";
$pasword = "admin";
$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$pasword'";

$statement = $connection->query($sql);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    //sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukses login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login";
}

$connection = null;
