<?php

require 'klases.php';
require 'sql_connection.php';

$publifications = array();


$sgl = 'SELECT id, author, shortContent, content, publishDate, type, title, addDate, preview FROM articles ORDER BY type, addDate DESC';
$result = mysqli_query($link, $sgl);

while ($row = mysqli_fetch_array($result)) {
    $publifications[]=new $row['type']($row);
}


