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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="./home.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./select.php">Select</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./insert.php">Insert</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./create.php">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./manage.php">Manage</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./load.php">Load</a>
                </li>
            </ul>
            <p class="my-2 mr-4">Connected with : <?php echo $_SESSION['username'] ?></p>
            <form class="form-inline my-2 my-lg-0" action="../includes/logout.inc.php">
                <button class="btn btn-danger my-2 my-sm-0" type="submit">Log out</button>
            </form>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Load - <small class="text-muted">Loading flat file</small></h1>
        <hr>
        <form class="form-group" action="" method="post">
            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
            <button type='submit' class='btn btn-outline-success mt-3'>Load file</button>
        </form>
    </div>
    
    <script src="main.js"></script>
</body>
</html>