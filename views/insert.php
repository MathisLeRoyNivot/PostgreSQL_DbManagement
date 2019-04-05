<?php
require_once '../includes/login.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTGRESQL | Insert</title>
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
                <li class="nav-item active">
                    <a class="nav-link" href="./insert.php">Insert</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./create.php">Create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./manage.php">Manage</a>
                </li>
                <li class="nav-item">
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
        <div class="col-md-10 centered">

            <form action="../includes/queries/create-schema.query.php" method="post">
                <fieldset class="field1">
                <div class="row">
                    <div class="col-9 align-self-center">
                        <h2>Insert</h2>
                    </div>
                </div>
                <hr class="my-4">
                <h3>Request schema</h3>
                <div class="row">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Query insert statement" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Execute request</button>
                        </div>
                    </div>
                </div>

                <p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        HELP
                    </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        INSERT INTO table [ ( column [, ...] ) ]<br>
                        { DEFAULT VALUES | VALUES ( { expression | DEFAULT } [, ...] ) | query }
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="main.js"></script>
</body>
</html>