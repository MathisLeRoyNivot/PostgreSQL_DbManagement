<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTGRESQL | Manage</title>
    <?php require './components/favicons.com.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css">

</head>

<body>

    <?php require_once './components/navbar.com.php'; ?>

    <div class="mt-5">
        <div class="col-md-5 centered">

            <form>
                <fieldset class="field1">
                <div class="row">
                    <div class="col-9 align-self-center">
                        <h1>Manage Right</h1>
                    </div>
                </div>
                <hr class="my-4">
                <h3 class="mt-3 mb-4">
                    List - 
                    <small class="text-muted">All users & their rights</small>
                </h3>
                <?php include 'C:\wamp64\www\PostgreSQL_TP\includes\queries\roles.query.php';?>
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