<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';


if (isset($_POST["insert-submit"])) {
    $tableQuery = $_POST["insert-input"];
    $query = $conn->query($tableQuery);

    if($query) {
        header("Location: ../../../../../PostgreSQL_TP/includes/queries/success/success.query.php");
    } elseif (!$query) {
        header("Location: ../../../../../PostgreSQL_TP/includes/queries/error/error.query.php");
    }
}