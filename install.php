<?php

require "config.php";
try {
$connection = new PDO("mysql:host=$host", $username = "root", $password = "Lavender0506",
$options);
$sql = file_get_contents("data/init.sql");
$connection->exec($sql);
echo "Database and table users created successfully.";
} catch(PDOException $error) {
echo $sql . "<br>" . $error->getMessage();
}
