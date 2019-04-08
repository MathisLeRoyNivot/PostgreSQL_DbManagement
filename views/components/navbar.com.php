
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="./home.php">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
    
    <?php 
    require 'C:\wamp64\www\PostgreSQL_TP\includes\queries\users-roles.query.php';

    if ($userCanInsert === "YES" && $userCanSelect === "YES" && $userCanUpdate === "YES" && $userCanDelete === "YES"  && $userCanTruncate == "YES" && $userCanTrigger === "YES") {
        echo "<li class='nav-item'>
                <a class='nav-link' href='./select.php'>Select</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='./insert.php'>Insert</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='./create.php'>Create</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='./manage.php'>Manage</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='./load.php'>Load</a>
            </li>";
    } elseif ($userCanInsert === "YES" && $userCanSelect === "YES" && $userCanUpdate === "NO" && $userCanDelete === "NO"  && $userCanTruncate === "NO" && $userCanTrigger === "NO") {
        echo "<li class='nav-item'>
                <a class='nav-link' href='./select.php'>Select</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='./insert.php'>Insert</a>
            </li>";
    } elseif ($userCanInsert === "NO" && $userCanSelect === "YES" && $userCanUpdate === "NO" && $userCanDelete === "NO"  && $userCanTruncate === "NO" && $userCanTrigger === "NO") {
        echo "<li class='nav-item'>
                <a class='nav-link' href='./select.php'>Select</a>
            </li>";
    } else {
        echo "<p class='my-2 mr-4'>no assigned rights</p>";
    }
    ?>

        </ul>
        <p class="my-2 mr-4">Connected with : <?php echo $userSession ?></p>
        <form class="form-inline my-2 my-lg-0" action="../includes/logout.inc.php">
            <button class="btn btn-danger my-2 my-sm-0" type="submit">Log out</button>
        </form>
    </div>
</nav>