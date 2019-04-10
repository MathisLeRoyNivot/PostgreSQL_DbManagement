<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';

if (isset($_POST["create-table-submit"])) {
    $createTableQuery = $_POST["create-table-input"];
    if(strpos($createTableQuery, "CREATE") !== false) {
        $query = $conn->query($createTableQuery);
        if($query) {
            header("Location: ../../../../../PostgreSQL_TP/includes/queries/success/success.query.php");
        }
    } elseif (!$query) {
        header("Location: ../../../../../PostgreSQL_TP/includes/queries/error/error.query.php");
    }
}