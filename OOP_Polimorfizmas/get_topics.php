<?php
require 'sql_connection.php';

$sql = 'SELECT pavadinimas FROM temos';
$result = mysqli_query($link, $sql);

$count=1;

while ($row = mysqli_fetch_assoc($result)) { 
    echo '<input type="hidden" name="topic'.$count.'" value="">';
    echo '<input type="checkbox" name="topic'.$count.'" value="'.$row['pavadinimas'].'">';
    echo '<label for="topic'.$count.'">'.$row['pavadinimas'].'</label><br>';
    $count++;    
}