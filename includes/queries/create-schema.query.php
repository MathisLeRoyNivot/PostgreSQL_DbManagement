<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';

if (isset($_POST["create-schema-submit"])) {
    $createSchemaQuery = $_POST["create-schema-input"];
    if(strpos($createSchemaQuery, "CREATE SCHEMA") !== false) {
        $query = $conn->query($createSchemaQuery);
        if($query) {
            header("Location: ../../../../../PostgreSQL_TP/includes/queries/success/success.query.php");
        }
    } elseif (!$query) {
        header("Location: ../../../../../PostgreSQL_TP/includes/queries/error/error.query.php");
    }
}