<?php

$tableSelected = $_GET["table"];
$schemaSelected = $_GET["schema"];

$tableColumn = "SELECT column_name FROM information_schema.columns WHERE table_name = '$tableSelected' AND table_schema = '$schemaSelected';";
$columnQuery = $conn->query($tableColumn);

$queryTable = "SELECT * FROM $tableSelected";
$queryTableExec = $conn->query($queryTable);

echo "<table class='table table-hover mt-5'><thead><tr>";
foreach($columnQuery as $row) {
    echo "<th scope='col'>$row[0]</th>";
}

echo "</tr>
</thead>
<tbody><tr>";

foreach($queryTableExec as $row) {
    $columnQuery = $queryTableExec->columnCount();
    for($j = 0; $j < $columnQuery; $j++) {
        echo "<td>$row[$j]</td>";
    }
    echo "</tr>";
}
echo "</table>";