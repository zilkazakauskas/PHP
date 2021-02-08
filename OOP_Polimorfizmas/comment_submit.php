<?php

require 'sql_connection.php';

$id = $_GET['id'];
$userId = $_COOKIE['user_id'];
$comment = $_POST['comment'];

$sql = "INSERT INTO user_article_comment(article_id, user_id, comment) VALUES ($id, $userId, '$comment')";
$query = mysqli_query($link, $sql);

if(!mysqli_errno($link)){
    ?>
<h3>Thank you for your comment!</h3>
<a href="perziura.php">Back to main page.</a>
<?php
}


echo '<pre>';
print_r($_GET);
echo'</pre>';

echo '<pre>';
print_r($_POST);
echo'</pre>';

echo '<pre>';
print_r($_COOKIE);
echo'</pre>';
