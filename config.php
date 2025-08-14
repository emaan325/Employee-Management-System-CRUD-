<?php
/* Database credentials */
define('DB_SERVER', 'localhost:3307'); // Port added here
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');

/* Connect to MySQL server (no DB selected yet) */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Create database if it doesn't exist
$db_sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
if (!mysqli_query($link, $db_sql)) {
    die("ERROR: Could not create database. " . mysqli_error($link));
}

// Select the database
mysqli_select_db($link, DB_NAME);

// Create table if not exists
$table_sql = "CREATE TABLE IF NOT EXISTS employees (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    address VARCHAR(255) NOT NULL,
    salary INT(10) NOT NULL
)";
if (!mysqli_query($link, $table_sql)) {
    die("ERROR: Could not create table. " . mysqli_error($link));
}

// Optional: Confirmation message
// echo "Database and table are ready!";
?>
