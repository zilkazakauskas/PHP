<?php

function printTopicsSelection() {
    require 'sql_connection.php';

    $sql = 'SELECT pavadinimas FROM temos';
    $result = mysqli_query($link, $sql);

    $count = 1;

    while ($row = mysqli_fetch_assoc($result)) {
//        echo '<input type="hidden" name="topic' . $count . '" value="">';
        echo '<input type="checkbox" name="topic' . $count . '" value="' . $row['pavadinimas'] . '">';
        echo '<label for="topic' . $count . '">' . $row['pavadinimas'] . '</label><br>';
        $count++;
    }
}

function setTopicsVariables() {
    require 'sql_connection.php';

    $sql = 'SELECT pavadinimas FROM temos';
    $result = mysqli_query($link, $sql);

    $count = 1;

    while ($row = mysqli_fetch_assoc($result)) {
        if (array_key_exists("topic$count", $_POST)) {
            $topics["topic$count"] = $_POST["topic$count"];
        }
        $count++;
    }
    if (isset($topics)) {
        return $topics;
    }
}

function printComments($id) {
    require 'sql_connection.php';

    $sql = "SELECT user_article_comment.id, users.username, user_article_comment.comment FROM users, user_article_comment, articles "
            . "WHERE user_article_comment.article_id = $id AND user_article_comment.user_id = users.id GROUP BY user_article_comment.id";
    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo'<h2>Komentarai:</h2>';
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<p>User name: " . $row['username'] . "<br>Comment : " . $row['comment'] . "</p>";
    }
}

function printAllPhotos($id) {
    require 'sql_connection.php';

    $sgl = "SELECT image FROM preview_images WHERE article_id = " . $id . ";";
    $result = mysqli_query($link, $sgl);

    while ($row = mysqli_fetch_array($result)) {
        ?>
        <img src="<?php echo $row['image'] ?>" alt="image">
        <?php
    }
}
