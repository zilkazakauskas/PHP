<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'duomenys.php';
        
        if(isset($errors)){
            echo $errors;
            exit();
        }
        foreach ($publifications as $item) {
            $item->printitem();
            echo '<br>';
        }
        
        echo '<hr>';
        
        foreach ($publifications2 as $item) {
            $item->printitem();
            echo '<br>';
        }
        ?>
    </body>
</html>
