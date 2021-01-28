<?php
include 'klases.php';
session_start();
if ($_SESSION['tipas'] != 'zole') {
    $_SESSION['gyvunas'] = $_POST['gyvunas'];
} if (isset($_SESSION['mityba'])) {
    if ($_SESSION['mityba'] != 'zoliaedis' && $_SESSION['tipas'] != 'zole') {
        $_SESSION['dantuAstrumas'] = $_POST['dantuAstrumas'];
    }
}
$_SESSION['svoris'] = $_POST['svoris'];
$_SESSION['regionas'] = $_POST['regionas'];


if (isset($_SESSION['dantuAstrumas'])) {
    $gyvunas = eval("return new " . $_SESSION['gyvunas'] . "(" . $_SESSION['svoris'] . ",'" . $_SESSION['regionas'] . "'," . $_SESSION['dantuAstrumas'] . ");");
}
if (!isset($_SESSION['dantuAstrumas']) && $_SESSION['tipas'] != 'zole') {
    $gyvunas = eval("return new " . $_SESSION['gyvunas'] . "(" . $_SESSION['svoris'] . ",'" . $_SESSION['regionas'] . "');");
}
if ($_SESSION['tipas'] == 'zole') {
   $gyvunas = eval("return new " . $_SESSION['tipas'] . "(" . $_SESSION['svoris'] . ",'" . $_SESSION['regionas'] . "');");
}

echo '<pre>';
print_r($gyvunas);
echo '</pre>';


session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="index.php">I pradzia.</a>
        

    </body>
</html>
