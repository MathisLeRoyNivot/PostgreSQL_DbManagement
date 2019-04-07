<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\queries\select-schemas.query.php';


// $test = $conn->query($schemaList);

foreach ($conn->query($schemaList) as $row1) {

    $tableList = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$row1[0]';";
    foreach ($conn->query($tableList) as $row) {
        $dataList = "SELECT * FROM $row[0];";
        $result = $conn->prepare($dataList);
        $result->execute();
        
        if ($result === false) {
            // Si le résultat de la requete préparé est faux alors on affiche une erreur lors 
            echo "<tr>
            <td>$row[0]</td>
                <td>$row1[0]</td>
                <td style='color:red'>Internal Error</td>
                <td><button type='button' class='btn btn-outline-success btn-sm'>Select table</button></td>
            </tr>";
        } else {
            // $numSave compte le nombre d'enregistrement dans la table
            $numSave = $result->rowCount();
            echo "<tr>
            <td>$row[0]</td>
                <td>$row1[0]</td>
                <td>$numSave</td>
                <td><button type='button' class='btn btn-outline-success btn-sm'>Select table</button></td>
            </tr>";
        }
        
    }
}