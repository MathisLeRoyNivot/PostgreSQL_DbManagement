<?php

require_once './select-tables.query.php';

if (isset($_POST['select-submit-btn'])) {
    
    $table = array();
    
    $html = file_get_html('localhost/PostgreSQL_TP/views/select.php');
    foreach($html->find('tr') as $row) {
        $time = $row->find('td',0)->plaintext;
        $artist = $row->find('td',1)->plaintext;
        $title = $row->find('td',2)->plaintext;
    
        // $table[$artist][$title] = true;
    }
    // print_r($table);

}