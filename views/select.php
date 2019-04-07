<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POSTGRESQL | Select</title>
    <?php require './components/favicons.com.php'?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./styles/main.css">
    <script src="main.js"></script>
</head>
<body>

    <?php require_once './components/navbar.com.php'; ?>

    <div class="container mt-5">
        <h1>Select</h1>
        <hr>
        <h3 class="mt-3 mb-4">
            List - 
            <small class="text-muted">All available tables with associated schema</small>
        </h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Table</th>
                    <th scope="col">Schema</th>
                    <th scope="col">No. save</th>
                    <th scope="col">Select</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'C:\wamp64\www\PostgreSQL_TP\includes\queries\select-tables.query.php';?>
            </tbody>
        </table>

        <!-- <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Request successfully completed</a>.
        </div> -->
    </div>
</body>
</html>