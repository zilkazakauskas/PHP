<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Add new Article:</h3>
        <form method="POST" action="straipsnio_pridejimas.php">
            <div>
                <label>Author</label>
                <p><input type="text" placeholder="Author..." name="author"></p>
            </div>
            <div>
                <label>Short Content</label>
                <p><input type="text" placeholder="Short Content..." name="shortContent"></p>
            </div>
            <div>
                <label>Content</label>
                <p><textarea type="content" placeholder="Enter Content..." name="content" rows="4" cols="50"></textarea></p>
            </div>
            <div>
                <label>Publish date</label>
                <p><input type="date" name="publishDate"></p>
            </div>
            <div>
                <label>Type</label>
                <p><input type="text" name="type" placeholder="Enter type..."></p>
            </div>
            <div>
                <label>Title</label>
                <p><input type="text" name="title" placeholder="Enter title..."></p>
            </div>
            <div>
                <label>Add date</label>
                <p><input type="date" name="addDate" placeholder="Todays date..."></p>
            </div>
            <div>
                <label>Add preview</label>
                <p><input type="text" name="preview" placeholder="Preview..."></p>
            </div>
            <input type="submit" value="Add article" name="submit">
        </form>
    </body>
</html>
