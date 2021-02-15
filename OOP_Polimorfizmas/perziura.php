<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'duomenys.php';
        
        if (isset($_COOKIE['user_status']) && $_COOKIE['user_status'] == 'blocked') {
            echo 'Vartotojas užblokuotas! Susisiekite su administratoriumi! <br>';
            ?>
        <p><a href="logout.php">Gryžti atgal</a></p>
        
        <?php
        } else {
            

            if (!isset($_COOKIE['vartotojas'])) {
                echo "<a href='login.php'>Login</a>";
            } else if (isset($_COOKIE['vardas']) && $_COOKIE != null) {
                echo "<h2>Sveiki: " . $_COOKIE['vardas'] . "</h2>";
            }

            if (isset($errors)) {
                echo $errors;
                exit();
            }
            foreach ($publifications as $item) {
                $item->printItem();
                $item->printArticleCommentCount();
                $item->printPhotosLink();
                $item->printAllContentLink();
                echo '<hr>';
            }
            if (isset($_COOKIE['vartotojas'])) {
                if ($_COOKIE['role'] == 'author') {
                    ?>
                    <a href="straipsnio_forma.php">Add new article</a><br>
                    <?php
                }
            }
            if (isset($_COOKIE['vartotojas'])) {
                if ($_COOKIE['role'] == 'admin') {
                    ?>
                    <br>
                    <p><a href="users_manage_panel.php">Manage users</a></p>
                    <?php
                }
                ?>
                <p><strong><a href="logout.php">Logout</a></strong></p>
                <?php
            }
        }
//            echo '<pre>';
//            print_r($_COOKIE);
//            echo'</pre>';
        ?>
    </body>
</html>
