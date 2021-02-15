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
        <h2>Manage users</h2>
        <?php
        require 'sql_connection.php';

        $sql = 'SELECT * FROM users';
        $query = mysqli_query($link, $sql);

        if (mysqli_errno($link)) {
            echo mysqli_error($link);
        } else {

            foreach ($query as $user) {

                if ($user['role'] != 'admin') {
                    ?>
                    <p><strong>User id: </strong><?php echo $user['id'] ?> </p>
                    <p><strong>User name: </strong><?php echo $user['username'] ?> </p>
                    <p><strong>Full name: </strong><?php echo $user['full_name'] ?> </p>
                    <p><strong>User role: </strong><?php echo $user['role'] ?> </p>
                    <p><strong>User status: </strong><?php echo $user['user_status'] ?> </p>
                    <h3>Actions:</h3>
                    <?php
                    if ($user['user_status'] == 'active' || $user['user_status'] == null) {
                        ?>
                        <p><a href="user_block.php?id=<?php echo $user['id'] ?>">Block user</a></p>
                        <?php
                    } else if ($user['user_status'] == 'blocked') {
                        ?>
                        <p><a href="user_unblock.php?id=<?php echo $user['id'] ?>">Unblock user</a></p>
                        <?php
                    }
                    ?>
                    <p><a href="user_delete.php?id=<?php echo $user['id'] ?>">Delete user</a></p>
                    <p><a href="user_comments_delete.php?id=<?php echo $user['id'] ?>">Delete user comments</a></p>
                    <p><a href="user_articles_delete.php?author=<?php echo $user['full_name'] ?>">Delete user articles</a></p>
                    <p><a href="user_delete_all.php?id=<?php echo $user['id'] ?>&author=<?php echo $user['full_name'] ?>">Delete all user data</a></p>
                    <p><hr></p>
                <?php
//                echo '<pre>';
//                print_r($user);
//                echo'</pre>';
            }
        }
    }
    ?>
    <a href="perziura.php">Back to main</a>
</body>
</html>
