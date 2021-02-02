<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'duomenys.php';
        

        if (isset($errors)) {
            echo $errors;
            exit();
        }
        foreach ($publifications as $item) {
            $item->printItem();
            $item->printPhotosLink();
            $item->printAllContentLink();
            echo '<hr>';
            
        }
       ?>
        <a href="straipsnio_forma.php">Add new article</a>

    </body>
</html>
