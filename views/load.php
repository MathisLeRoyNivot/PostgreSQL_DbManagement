<?php
require_once '../includes/login.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTGRESQL | Load</title>
    <?php require './components/favicons.com.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css">
</head>
<body>
    
    <?php require_once './components/navbar.com.php'; ?>
    
    <div class="container mt-5">
        <h1>Load - <small class="text-muted">Loading flat file</small></h1>
        <hr>
        <form class="form-group" action="" method="post">
            <label for="exampleInputFile">Import file</label>
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <button type='submit' class='btn btn-outline-success mt-3'>Load file</button>
        </form>
    </div>
    
    <script src="main.js"></script>
</body>
</html>