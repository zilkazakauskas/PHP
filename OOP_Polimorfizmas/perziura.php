<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require 'duomenys.php';
            
            if(!isset($_COOKIE['vartotojas'])){
                echo "<a href='login.php'>Login</a>";
            }

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
            <?php
            if(isset($_COOKIE['vartotojas'])){
            ?>
            <br>
            <p><strong><a href="logout.php">Logout</a></strong></p>
            <?php
            }
//            echo '<pre>';
//            print_r($_COOKIE);
//            echo'</pre>';
        ?>
    </body>
</html>
