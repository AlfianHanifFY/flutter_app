<?php


$host = 'postgres';
$user = 'db_user';
$pass = 'db_password';
$db = 'test_database';

$conn = new PDO("pgsql:host=$host;dbname=$db", $user, $pass);

if (!$conn) {
    die("Connection failed");
}
else{
    echo "Connected to PostgreSQL successfully\n";
}
