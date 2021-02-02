<?php
require 'sql_connection.php';
//echo '<pre>';
//print_r($_POST);
//echo'</pre>';

if(isset($_POST['submit'])){

$author = $_POST['author'];
$shortContent = $_POST['shortContent'];
$content = $_POST['content'];
$publishDate = $_POST['publishDate'];
$type = $_POST['type'];
$title = $_POST['title'];
$topic1 = $_POST['topic1'];
$topic2 = $_POST['topic2'];
$topic3 = $_POST['topic3'];
$topic4 = $_POST['topic4'];
$topic5 = $_POST['topic5'];
$addDate = $_POST['addDate'];
$previewImage = $_POST['previewImage'];
$image1 = $_POST['image1'];
$image2 = $_POST['image2'];
$image3 = $_POST['image3'];
}

mysqli_begin_transaction($link);
//PAGRINDINE INFO
$sql = "INSERT INTO articles (author,shortContent,content,publishDate,type,title,addDate,preview) VALUES
    ('$author','$shortContent','$content','$publishDate','$type','$title','$addDate','$previewImage');";
$query = mysqli_query($link, $sql);
//TEMOS
$sql = 


$sql = "SELECT * FROM articles";
$query = mysqli_query($link, $sql);

while ($row = mysqli_fetch_assoc($query)) {
    if($row['shortContent'] == $_POST['shortContent']){
        mysqli_rollback($link);
    }
}
