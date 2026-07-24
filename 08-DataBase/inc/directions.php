<?php

require_once __DIR__ .'/create_table_row.php';
//phpinfo();

$server_name = "Sergey";
$connection_info = array("Database" => "PD_321", "UID" => "PHP", "PWD" => "111", "CharacterSet" => "UTF-8");
$connection = sqlsrv_connect($server_name, $connection_info);

var_dump($connection);

$query = "SELECT * FROM Directions";
$results = sqlsrv_query($connection, $query);

var_dump($results);


//echo '<table>';

//echo '<tr>';
//echo '<th>';
//echo 'ID';
//echo '</th>';

//echo '<th>';
//echo 'Напрваление оюучения';
//echo '</th>';

$table_header = '<table><tr><th>ID</th><th>Направление</th></tr>';
$table_footer = '</tr></table>';

echo $table_header;


while ($row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC)) {
    //echo '<pre>';
    //echo print_r($row);
    //echo '</pre>';
    
    //echo '<tr>';
    //echo '<td>';
    //echo $row['direction_id'];
    //echo '</td>';
    //echo '<td>';
    //echo $row['direction_name'];
    //echo '</td>';
    //echo '</tr>';

    echo create_table_row($row);
   // echo create_table_row($row['direction_name']);
}

echo $table_footer;
?>