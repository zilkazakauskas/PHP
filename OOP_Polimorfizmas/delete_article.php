<?php
require 'sql_connection.php';

$id= $_GET['id'];

$sql = "DELETE FROM articles WHERE id = $id";
mysqli_query($link, $sql);
header('Location: perziura.php');

//echo '<pre>';
//print_r($_GET);
//echo'</pre>';

