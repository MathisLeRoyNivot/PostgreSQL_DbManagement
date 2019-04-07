<?php
require_once '../includes/login.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTGRESQL | Create User</title>
    <?php require './components/favicons.com.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css">
</head>
<body>
    
    <?php require_once './components/navbar.com.php'; ?>

    <div class="container mt-5">
        <div class="col-md-10 centered">

            <form action="../includes/queries/create-user.query.php" method="post">
                <fieldset class="field1">
                <div class="row">
                    <a href="javascript:history.back()" class="btn btn-primary btn-lg col-3">Go Back</a>
                    <div class="col-9 align-self-center">
                        <h2>Create User</h2>
                    </div>
                </div>
                <hr class="my-4">
                <h3>Request user</h3>
                <div class="row">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Create user statement" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
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
                        CREATE USER name [ [ WITH ] option [ ... ] ]<br>
                        <hr>
                        Where option can be:<br>

                            SUPERUSER | NOSUPERUSER<br>
                            | CREATEDB | NOCREATEDB<br>
                            | CREATEROLE | NOCREATEROLE<br>
                            | CREATEUSER | NOCREATEUSER<br>
                            | INHERIT | NOINHERIT<br>
                            | LOGIN | NOLOGIN<br>
                            | REPLICATION | NOREPLICATION<br>
                            | CONNECTION LIMIT connlimit<br>
                            | [ ENCRYPTED | UNENCRYPTED ] PASSWORD 'password'<br>
                            | VALID UNTIL 'timestamp'<br>
                            | IN ROLE role_name [, ...]<br>
                            | IN GROUP role_name [, ...]<br>
                            | ROLE role_name [, ...]<br>
                            | ADMIN role_name [, ...]<br>
                            | USER role_name [, ...]<br>
                            | SYSID uid
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Scripts Call -->
    <script src="./js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>