<?php

require 'C:\wamp64\www\PostgreSQL_TP\includes\queries\select-schemas.query.php';
// require 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';
// require 'D:\wamp64\www\PostgreSQL_TP\includes\queries\select-schemas.query.php';

foreach ($conn->query($schemaList) as $row1) {
    
    $tableList = "SELECT table_name FROM information_schema.tables WHERE table_schema = '$row1[0]';";
    foreach ($conn->query($tableList) as $row) {
        $dataList = "SELECT * FROM $row[0];";
        $result = $conn->prepare($dataList);
        $result->execute();
        
        $test = $result->execute();
        $test2 = $result->fetch();
        
        if ($result === false) {
            // Si le résultat de la requete préparé est faux alors on affiche une erreur lors 
            echo "<tr>
            <td>$row[0]</td>
            <td>$row1[0]</td>
            <td style='color:red'>Internal Error</td>
            <td> 
            <a type='submit' name='select-submit-btn' class='btn btn-outline-success btn-sm' data-toggle='collapse' href='#collapseExample' role='button' aria-expanded='false' aria-controls='collapseExample'>Select table</a>
            
                </td>
            </tr>";
                
            } else {
                // $numSave compte le nombre d'enregistrement dans la table
                $numSave = $result->rowCount();
                echo "<tr>
                <td class='tables'>$row[0]</td>
                <td class='schema'>$row1[0]</td>
                <td class='number-of-save'>$numSave</td>
                <td>    
                    <button type='button' onclick='getId(this)' name='select-submit-btn' class='btn btn-outline-success btn-sm'>Select table</button>
                </td>
                </tr>";
            }
            
        }
}

// if (isset($_POST['select-submit-btn'])) {
    
//     $table = array();
    
//     $html = file_get_html('localhost/PostgreSQL_TP/views/select.php');
//     foreach($html->find('tr') as $row) {
//         $time = $row->find('td',0)->plaintext;
//         $artist = $row->find('td',1)->plaintext;
//         $title = $row->find('td',2)->plaintext;
    
//         // $table[$artist][$title] = true;
//     }
//     // print_r($table);

// }