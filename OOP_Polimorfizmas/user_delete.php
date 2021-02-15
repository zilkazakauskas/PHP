<?php

require 'sql_connection.php';

$sql = "DELETE FROM users WHERE id=".$_GET['id'];
mysqli_query($link, $sql);

if(mysqli_errno($link)){
    echo mysqli_error($link);
}else{
header('location:users_manage_panel.php');
}