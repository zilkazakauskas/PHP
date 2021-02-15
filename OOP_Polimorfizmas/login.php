<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_COOKIE['vartotojas'])) {
            header('Location: perziura.php');
        }
        ?>

        <h2>Prisijungti</h2>
        
        <form action="validate_login.php" method="post">
            User Name: <input type="text" name="userName" placeholder="Vartotojo Vardas" required> &nbsp;
            Password: <input type="password" name="password" placeholder="Slaptazodis" required> &nbsp;
            <input type="submit" name="prisijungti" value="Prisijungti">
        </form>
        
        <p><strong><a href="perziura.php">Narsyti neprisijungus</a></strong></p>

    </body>
</html>