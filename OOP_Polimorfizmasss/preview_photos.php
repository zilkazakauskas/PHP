<?php
//print_r($_GET);
//echo '<br>';
require 'sql_connection.php';

$sgl = "SELECT image FROM preview_images WHERE article_id = " . $_GET['id'] . ";";
$result = mysqli_query($link, $sgl);

while ($row = mysqli_fetch_array($result)) {
    ?>
<img src="<?php echo $row['image'] ?>" alt="image">
    <?php
}
?>