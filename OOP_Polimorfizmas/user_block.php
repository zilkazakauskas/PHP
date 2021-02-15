<?php

require 'sql_connection.php';

$sql = "UPDATE users SET user_status='blocked' WHERE id=".$_GET['id'];
mysqli_query($link, $sql);

if(mysqli_errno($link)){
    echo mysqli_error($link);
}else{
header('location:users_manage_panel.php');
}