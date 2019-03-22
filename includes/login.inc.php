<?php

require_once 'dbconfig.inc.php';

if(isset($_POST['submit-btn'])) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    $dbInfo = "pgsql:host=$dbServer;port=$dbPort;dbname=$dbName;user=$username;password=$password"; 

    // create a PostgreSQL database connection
    $conn = new PDO($dbInfo);
    try{
        // display a message if connected to the PostgreSQL successfully
        if($conn){
            echo "<script>console.log('%c Connexion établie avec la base de données PostgreSQL', 'color: #bada55')</script>";
            header("Location: ../../../views/home.php");
            echo "<script>console.log('Successfully connected.')</script>";
        }
    } catch (PDOException $e){
        // report error message
        echo $e->getMessage();
        echo "<script>console.error('%c Impossible d'établir une connexion avec la base de données PostgreSQL', 'color: #bada55')</script>";
    }
}
