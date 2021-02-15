<?php

require 'sql_connection.php';

$sql = "DELETE FROM articles WHERE author='".$_GET['author']."'";
mysqli_query($link, $sql);

if(mysqli_errno($link)){
    echo mysqli_error($link);
}else{
header('location:users_manage_panel.php');
}