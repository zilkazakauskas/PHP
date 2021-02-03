<?php

require 'sql_connection.php';
require 'get_topics.php';

echo '<pre>';
print_r($_POST);
echo'</pre>';

if (isset($_POST['submit'])) {

    $author = $_POST['author'];
    $shortContent = $_POST['shortContent'];
    $content = $_POST['content'];
    $publishDate = $_POST['publishDate'];
    $type = $_POST['type'];
    $title = $_POST['title'];
    $addDate = $_POST['addDate'];
    $previewImage = $_POST['previewImage'];

    if ($_POST['image1'] != '') {
        $images[] = $_POST['image1'];
    }if ($_POST['image2'] != '') {
        $images[] = $_POST['image2'];
    }if ($_POST['image3'] != '') {
        $images[] = $_POST['image3'];
    }
}

mysqli_begin_transaction($link);
//PAGRINDINES INFO IKELIMAS I DB
$sql = "INSERT INTO articles (author,shortContent,content,publishDate,type,title,addDate,preview) VALUES
    ('$author','$shortContent','$content','$publishDate','$type','$title','$addDate','$previewImage');";
$query = mysqli_query($link, $sql);
//PASKUTINIS SUGENERUOTAS ARTICLE ID (AUTO INCREMENT)
$articleId = mysqli_insert_id($link);
//TEMU IKELIMAS I DB
$topics = setTopicsVariables();
if (isset($topics)) {
    foreach ($topics as $key => $value) {
        $sql = "SELECT id FROM temos WHERE pavadinimas='$value'";
        $query = mysqli_query($link, $sql);
//        if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        $topicId = $row['id'];
//        }
//        echo $key . " yra " . $value . "<br>";
        $sql = "INSERT INTO straipsniai_temos(straipsnio_id,temos_id) VALUES($articleId,$topicId)";
        $query = mysqli_query($link, $sql);
    }
}
//PREVIEW IMAGES IKELIMAS I DB
if (isset($images)) {
    foreach ($images as $image) {
        $sql = "INSERT INTO preview_images(article_id,image) VALUES($articleId,'$image')";
        $query = mysqli_query($link, $sql);
    }
}

$sql = "SELECT * FROM articles";
$query = mysqli_query($link, $sql);
$dublicateCount = 0;
while ($row = mysqli_fetch_assoc($query)) {
    if ($row['shortContent'] == $_POST['shortContent']) {
        $dublicateCount++;
    }
}
if ($dublicateCount > 1) {
    mysqli_rollback($link);
}else{
    mysqli_commit($link);
}
//echo '<pre>';
//print_r($images);
//echo'</pre>';