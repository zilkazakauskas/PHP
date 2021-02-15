<?php

require 'sql_connection.php';
//TRINAM VARTOTOJA
mysqli_begin_transaction($link);
$sql = "DELETE FROM users WHERE id=".$_GET['id'];
mysqli_query($link, $sql);
//TRINAM VARTOTOJO STRAIPSNIUS
$sql = "DELETE FROM articles WHERE author='".$_GET['author']."'";
mysqli_query($link, $sql);
//TRINAM VARTOTOJO KOMENTARUS
$sql = "DELETE FROM user_article_comment WHERE user_id=".$_GET['id'];
mysqli_query($link, $sql);

if(mysqli_errno($link)){
    echo mysqli_error($link);
    mysqli_rollback($link);
}else{
    mysqli_commit($link);
header('location:users_manage_panel.php');
}