<?php

require 'sql_connection.php';

$id = $_GET['id'];
//TRINAM STRAIPSNI , JO TEMAS IR NUOTRAUKAS
mysqli_begin_transaction($link);
$sql = "DELETE FROM articles WHERE id = $id";
mysqli_query($link, $sql);
//TRINAM STRAIPSNIO KOMENTARUS
$sql = "DELETE FROM user_article_comment WHERE article_id = $id";
mysqli_query($link, $sql);

if (mysqli_errno($link)) {
    mysqli_rollback($link);
} else {
    mysqli_commit($link);
    header('Location: perziura.php');
}
//echo '<pre>';
//print_r($_GET);
//echo'</pre>';

