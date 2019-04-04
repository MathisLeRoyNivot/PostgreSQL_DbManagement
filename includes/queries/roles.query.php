<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';

$columnName = "SELECT column_name FROM information_schema.columns WHERE table_name = 'pg_roles'";
$columnNameQuery = $conn->query($columnName);
$userList = "SELECT * FROM pg_roles;";
$userListQuery = $conn->query($userList);

echo "<thead><tr>";
foreach($columnNameQuery as $row) {
    echo "<th scope='col'>$row[0]</th>";
}

echo "<th scope='col'>Manage</th>
    </tr>
</thead>
<tbody><tr>";

foreach($userListQuery as $row) {
    $columnCountQuery = $userListQuery->columnCount();
    for($i = 0; $i < $columnCountQuery; $i++) {
        echo "<td>$row[$i]</td>";
    }
    echo "<td><button type='button' class='btn btn-outline-success btn-sm'>Edit</button></td>";
    echo "</tr>";
}
