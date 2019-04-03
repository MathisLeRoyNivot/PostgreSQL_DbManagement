<?php

require '../includes/queries/select-tables.query.php';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTGRESQL | Select</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css">
    <script src="main.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="./home.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link active" href="./select.php">Select</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./insert.php">Insert</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./create.php">Create</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Manage</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="../includes/logout.inc.php">
                <button class="btn btn-danger my-2 my-sm-0" type="submit">Log out</button>
            </form>
        </div>
    </nav>
</body>
</html>