<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h2>Leave a comment</h2>
<?php
$id = $_GET['id'];
?>
        <form action="comment_submit.php?id=<?php echo $id?>" method="post">
            <div>
                <label for="comment">Comment</label>
                <p><textarea type="comment" placeholder="Leave a comment.." name="comment" rows="4" cols="50" required></textarea></p>
            </div>
            <input type="submit" value="Add comment" name="submit">
        </form>
    </body>
</html>
