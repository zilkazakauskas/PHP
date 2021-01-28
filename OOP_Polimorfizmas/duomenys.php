<?php

require 'klases.php';

$publifications = array();
$publifications2 =array();

$link = mysqli_connect('localhost', 'root', '', 'articles');
if(mysqli_connect_errno()){
    $errors = mysqli_connect_error();
}

$sglByType = 'SELECT id, author, shortContent, content, publishDate, type, title, addDate, preview FROM articles ORDER BY type';
$resultByType = mysqli_query($link, $sglByType);

while ($row = mysqli_fetch_array($resultByType)) {
    $publifications[]=new $row['type']($row);
}

$sglByDate = 'SELECT id, author, shortContent, content, publishDate, type, title, addDate, preview FROM articles ORDER BY addDate';
$resultByDate = mysqli_query($link, $sglByDate);

while ($row = mysqli_fetch_array($resultByDate)) {
    $publifications2[]=new $row['type']($row);
}

