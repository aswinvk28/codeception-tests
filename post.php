<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('DB_HOST', 'mysql:host=localhost;dbname=db_form');
define('DB_USER', 'root');
define('DB_PASS', 'UnYrd56Bnu');

$connection = mysql_connect(DB_HOST, DB_USER, DB_PASS);

mysql_select_db('db_form', $connection);

$selectArray = $_POST['form_multiselect'];

if(!empty($selectArray)) {
    $text = $_POST['form_text'];
    $textarea = $_POST['form_textarea'];
    $radio = $_POST['form_radio'];
    foreach($selectArray as $select) {
        $insertQuery = "INSERT INTO form (text, textarea, select, radio) VALUES ('$text', '$textarea', $select, '$radio')";
        
        $result = mysql_query($insertQuery, $connection);
        
        echo "<blockquote>Value: $result</blockquote><br/>\n";
    }
}

mysql_close($connection);