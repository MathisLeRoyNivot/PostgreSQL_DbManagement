<?php

$columnName = "SELECT column_name FROM information_schema.columns WHERE table_name = 'pg_roles'";
$columnNameQuery = $conn->query($columnName);
$userList = "SELECT * FROM pg_roles;";
$userListQuery = $conn->query($userList);

echo "<table class='table table-hover'><thead><tr>";
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

echo "</table>";






$grantRolesColumn = "SELECT column_name FROM information_schema.columns WHERE table_schema = 'information_schema' AND table_name   = 'role_table_grants';";
$grantRolesColumnQuery = $conn->query($grantRolesColumn);
$grantRoles = "SELECT * FROM information_schema.role_table_grants WHERE table_schema != 'pg_catalog' AND table_schema != 'information_schema';";
$grantRolesQuery = $conn->query($grantRoles);

echo "<table class='table table-hover mt-5'><thead><tr>";
foreach($grantRolesColumnQuery as $row) {
    echo "<th scope='col'>$row[0]</th>";
}

echo "<th scope='col'>Manage</th>
    </tr>
</thead>
<tbody><tr>";

foreach($grantRolesQuery as $row) {
    $grantRolesColumnQuery = $grantRolesQuery->columnCount();
    for($j = 0; $j < $grantRolesColumnQuery; $j++) {
        echo "<td>$row[$j]</td>";
    }
    echo "<td><button type='button' class='btn btn-outline-success btn-sm'>Edit</button></td>";
    echo "</tr>";
}
