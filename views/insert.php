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
    
    <?php require_once './components/navbar.com.php'; ?>

    <div class="container mt-5">
        <div class="col-md-10 centered">
            <div class="row">
                <div class="col-9 align-self-center">
                    <h1>Insert</h1>
                </div>
            </div>
            <hr class="my-4">
            <h3>Request insert</h3>

            <form action="../includes/queries/insert.query.php" method="post">
                <fieldset class="field1">
                <div class="row">
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="insert-input" placeholder="Query insert statement" id="exampleTextarea" rows="3" style="min-height:45px;"></textarea>
                        <!-- <input type="text" class="form-control" name="insert-input" placeholder="Query insert statement" aria-label="Recipient's username" aria-describedby="basic-addon2" required> -->
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" name="insert-submit" type="submit">Execute request</button>
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
    
    <script src="./js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>