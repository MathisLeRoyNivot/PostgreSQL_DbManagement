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
        <h1>Select</h1>
        <hr>
        <h3 class="mt-3 mb-4">
            List - <small class="text-muted">All available tables with associated schema</small>
        </h3>

        <table id="schemas-table" class="table table-hover">
            <thead>
                <tr>
                <?php require_once '../includes/queries/select-table.query.php'; ?>



    
</body>
</html>