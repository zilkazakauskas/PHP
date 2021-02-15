<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Add new Article:</h3>
        <form method="POST" action="straipsnio_pridejimas.php">
            <div>
                <!--AUTHOR NAME-->
                <p><input type="text" name="author" value="<?php echo $_COOKIE['vardas'] ?>" hidden></p>
            </div>
            <div>
                <label for="shortContent">Short Content</label>
                <p><input type="text" placeholder="Short Content..." name="shortContent"></p>
            </div>
            <div>
                <label for="content">Content</label>
                <p><textarea type="content" placeholder="Enter Content..." name="content" rows="4" cols="50"></textarea></p>
            </div>
            <div>
                <label for="publishDate">Publish date</label>
                <p><input type="date" name="publishDate"></p>
            </div>
            <div>
                <label for="type">Type</label>
                <p>
                    <select name="type">
                        <option value="NewsArticle">News article</option>
                        <option value="PhotoArticle">Photo article</option>
                        <option value="ShortArticle">Short article</option>
                    </select>
                </p>
            </div>
            <div>
                <label for="title">Title</label>
                <p><input type="text" name="title" placeholder="Enter title..."></p>
            </div>
            <div>
                <label>Topics</label>
                <p>
                    <?php
                    require'functions.php';
                    printTopicsSelection();
                    ?>
                </p>
            </div>
            <div>
                <!--ADD DATE-->
                <p><input type="date" name="addDate" placeholder="Todays date..." value="<?php echo date('Y-m-d'); ?>" hidden></p>
            </div>
            <div>
                <label for="previewImage">Add preview</label>
                <p><input type="url" name="previewImage" placeholder="Preview..."></p>
            </div>
            <div>
                <label for="image1">Add more photos</label>
                <p><input type="url" name="image1" placeholder="Image 1 link.."></p>
                <p><input type="url" name="image2" placeholder="Image 2 link.."></p>
                <p><input type="url" name="image3" placeholder="Image 3 link.."></p>
            </div>

            <input type="submit" value="Add article" name="submit">
        </form>
    </body>
</html>
