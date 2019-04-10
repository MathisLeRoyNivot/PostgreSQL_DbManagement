<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';

if (isset($_POST["create-user-submit"])) {
    $createUserQuery = $_POST["create-user-input"];
    if(strpos($createUserQuery, "CREATE USER") !== false) {
        $query = $conn->query($createUserQuery);
        if($query) {
            header("Location: ../../../../../PostgreSQL_TP/includes/queries/success/success.query.php");
        }
    } elseif (!$query) {
        header("Location: ../../../../../PostgreSQL_TP/includes/queries/error/error.query.php");
    }
}