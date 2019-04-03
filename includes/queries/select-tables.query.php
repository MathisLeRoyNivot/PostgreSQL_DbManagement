<?php

require '../login.inc.php';

$tableList = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public';";
foreach ($conn->query($tableList) as $row) {
    print $row[0] . "\t";
}