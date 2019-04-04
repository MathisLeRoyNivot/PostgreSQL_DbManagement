<?php

session_start();
require_once '../db/db-config.php';

// $dbServer = "localhost";
// $dbPort = 5432;
// $dbName = "bdd-tp";

if (isset($_POST['submit'])) {
    try {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
    } catch (PDOException $e) {
        echo 'Please login you back';
        die();
    }
}

if(empty($_SESSION)) {
  header("Location: ../../../../PostgreSQL_TP/views/login.php");
} elseif (!empty($_SESSION)) {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
}
    

$dbInfo = "pgsql:host=$dbServer;port=$dbPort;dbname=$dbName;user=$username;password=$password";
// create a PostgreSQL database connection
$conn = new PDO($dbInfo);