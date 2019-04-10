<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';

if (isset($_POST["insert-submit"])) {
    $insertQuery = $_POST["insert-input"];
    if(strpos($insertQuery, "INSERT") !== false) {
        $query = $conn->query($insertQuery);
        if($query) {
            header("Location: ../../../../../PostgreSQL_TP/includes/queries/success/success.query.php");
        }
    } elseif (!$query) {
        header("Location: ../../../../../PostgreSQL_TP/includes/queries/error/error.query.php");
    }
}