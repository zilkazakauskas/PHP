<?php

$link = mysqli_connect('localhost', 'root', '', 'articles');
if(mysqli_connect_errno()){
    $errors[] = mysqli_connect_error();
    echo $errors;
}