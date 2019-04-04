<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';
require 'C:\wamp64\www\PostgreSQL_TP\includes\queries\select-schemas.query.php';



foreach ($conn->query($schemaList) as $row1) {

    $tableList = "SELECT table_name FROM information_schema.tables WHERE table_schema ='".$row1[0]."';";
    foreach ($conn->query($tableList) as $row) {
        $dataList = "SELECT * FROM $row[0];";
        $result = $conn->query($dataList);
        $row5 = $result->rowCount();

        echo "<tr>
        <td>$row[0]</td>
            <td>$row1[0]</td>
            <td>$row5</td>
            <td><button type='button' class='btn btn-outline-success btn-sm'>Select table</button></td>
        </tr>";
    }
}