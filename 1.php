<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="1.css">
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
// $dbname = "myguests";

// Create connection
$conn =new mysqli($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: ".mysqli_error());
}

// sql to create table
$sql = "CREATE DATABASE testDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$sql_table = "CREATE TABLE table ( `id` INT NOT NULL ,
  `title` VARCHAR NOT NULL ,
  `description` TEXT NOT NULL ,
  `image` VARCHAR NOT NULL ,
  `status` INT NOT NULL ,
  `create_at` DATETIME NOT NULL ,
  `update_at` DATETIME NOT NULL ) ENGINE = InnoDB";

?>