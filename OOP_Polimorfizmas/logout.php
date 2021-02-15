<?php

setcookie('vartotojas', '', time() - 3600);
setcookie('role', '', time() - 3600);
setcookie('vardas', $row['full_name'], time() -3600);
setcookie('user_id', $row['id'], time() -3600);
setcookie('user_status', $row['user_status'], time() -3600);
header('Location: perziura.php');

