<?php

require 'sql_connection.php';

if (isset($_POST['prisijungti'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password, role, full_name, user_status FROM users WHERE username='$userName'";
    $query = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) > 0) {
        if ($row['password'] == $password && $row['username'] == $userName) {
            setcookie('vartotojas', $userName, time() + 60 * 60);
            setcookie('role', $row['role'], time() + 60 * 60);
            setcookie('vardas', $row['full_name'], time() + 60 * 60);
            setcookie('user_id', $row['id'], time() + 60 * 60);
            setcookie('user_status', $row['user_status'], time() + 60 * 60);
            header('Location: perziura.php');
        }
        else{
            echo 'Neteisingi duomenys!';
        }
    } else {
        echo 'Neteisingi duomenys!';
    }
} else {
    header('Location: login.php');
}
?>