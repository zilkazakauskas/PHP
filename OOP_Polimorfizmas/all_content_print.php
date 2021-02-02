<?php
require 'sql_connection.php';
require 'klases.php';

//PRINTINA VISA STRAIPSNIO INFO

$sgl = "SELECT id, author, shortContent, content, publishDate, type, title, addDate, preview FROM articles WHERE id=" . $_GET['id'] . ";";
$result = mysqli_query($link, $sgl);
while ($row = mysqli_fetch_array($result)) {
    $publification = new Article($row);
}
$publification->printAllArticleContent();

$sql = "SELECT temos.pavadinimas,articles.id FROM articles,straipsniai_temos,temos WHERE straipsniai_temos.straipsnio_id=articles.id AND straipsniai_temos.temos_id=temos.id AND articles.id=" . $_GET['id'] . ";";
$result = mysqli_query($link, $sql);

if(!mysqli_connect_errno()){
echo '<h2>Temos:</h2>';
}

while ($row = mysqli_fetch_array($result)) {
    echo $row['pavadinimas']."<br>";
}

//PRINTINA NUOTRAUKAS IS PREVIEW_IMAGES

$sgl = "SELECT image FROM preview_images WHERE article_id = " . $_GET['id'] . ";";
$result = mysqli_query($link, $sgl);

while ($row = mysqli_fetch_array($result)) {
    ?>
    <img src="<?php echo $row['image'] ?>" alt="image">
    <?php
}
?>