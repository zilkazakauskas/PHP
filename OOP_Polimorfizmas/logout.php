<?php

setcookie('vartotojas', '', time() -3600);
setcookie('role', '', time() -3600);
header('Location: perziura.php');

