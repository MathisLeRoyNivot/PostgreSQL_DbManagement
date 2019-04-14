<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTGRESQL | Select Table</title>
    <?php require './components/favicons.com.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css">
</head>
<body>

    <?php require_once './components/navbar.com.php'; ?>

    <div class="container mt-5">
        <div class="row">
            <a href="javascript:history.back()" class="btn btn-primary btn-lg col-3">Go Back</a>
            <div class="col-9 align-self-center">
            <h2>SELECT</h2>
        </div>
    </div>
    <hr>
    <h3 class="mt-3 mb-4">
        List - <small class="text-muted">Table : <?php echo $_GET["table"] ?> & Schema : <?php echo $_GET["schema"] ?></small>
    </h3>

    <table id="schemas-table" class="table table-hover">
        <thead>
            <tr>
                <?php require_once '../includes/queries/select-table.query.php'; ?>

</body>
</html>