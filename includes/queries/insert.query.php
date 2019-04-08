<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';

echo "Salut";
if (isset($_POST['submit'])) {
    $tableQuery = $_POST['insert-input'];
    $query = $conn->query($tableQuery);

    if($query) {
        header("Location: C:\wamp64\www\PostgreSQL_TP\views\insert.php");
    } else {
        header("Location: C:/wamp64/www/PostgreSQL_TP/views/insert.php");
        echo ('error');
    }
}