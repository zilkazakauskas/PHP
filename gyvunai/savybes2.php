<?php
session_start();
    $_SESSION['mityba'] = $_POST['mityba'];

$mysqli = new mysqli("localhost", "root", "", "regionai");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
    $result = $mysqli->query("SELECT pavadinimas FROM regionai;");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if ($_SESSION['mityba'] == 'mesedis' && $_SESSION['tipas'] == 'zemesGyvis') {
            ?>
            <form action="savybes3.php" method="post">
                <label>Pasirinkite gyvuna:</label>
                <br>
                <select name="gyvunas">
                    <option value="liutas">Liutas</option>
                </select>
                <br>
                <label for="svoris">Iveskite svori:</label>
                <br>
                <input type="number" step="0.01" min="0.01" name="svoris" placeholder="Svoris" required>
                <br>
                <label>Pasirinkite regiona:</label>
                <br>
                <select name="regionas">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row["pavadinimas"] ?>"><?php echo $row["pavadinimas"] ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>
                <label for="dantuAstrumas">Iveskite dantu astruma:</label>
                <br>
                <input type="number" min="1" max="10" name="dantuAstrumas" placeholder="1-10" required>
                <br><br>
                <input type="submit" name="submit2" value="Sukurti Objekta">
            </form>
            <?php
        } else if ($_SESSION['mityba'] == 'zoliaedis' && $_SESSION['tipas'] == 'zemesGyvis') {
            ?>
            <form action="savybes3.php" method="post">
                <label>Pasirinkite gyvuna:</label>
                <br>
                <select name="gyvunas">
                    <option value="kiskis">Kiskis</option>
                </select>
                <br>
                <label for="svoris">Iveskite svori:</label>
                <br>
                <input type="number" step="0.01" min="0.01" name="svoris" placeholder="Svoris" required>
                <br>
                <label>Pasirinkite regiona:</label>
                <br>
                <select name="regionas">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row["pavadinimas"] ?>"><?php echo $row["pavadinimas"] ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br><br>
                <input type="submit" name="submit2" value="Sukurti Objekta">
            </form>
            <?php
        } else if ($_SESSION['mityba'] == 'mesedis' && $_SESSION['tipas'] == 'vandensGyvis') {
            ?>
            <form action="savybes3.php" method="post">
                <label>Pasirinkite gyvuna:</label>
                <br>
                <select name="gyvunas">
                    <option value="ryklys">Ryklys</option>
                </select>
                <br>
                <label for="svoris">Iveskite svori:</label>
                <br>
                <input type="number" step="0.01" min="0.01" name="svoris" placeholder="Svoris" required>
                <br>
                <label>Pasirinkite regiona:</label>
                <br>
                <select name="regionas">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row["pavadinimas"] ?>"><?php echo $row["pavadinimas"] ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br>
                <label for="dantuAstrumas">Iveskite dantu astruma:</label>
                <br>
                <input type="number" min="1" max="10" name="dantuAstrumas" placeholder="1-10" required>
                <br><br>
                <input type="submit" name="submit2" value="Sukurti Objekta">
            </form>
            <?php
        } else if ($_SESSION['mityba'] == 'zoliaedis' && $_SESSION['tipas'] == 'vandensGyvis') {
            ?>
            <form action="savybes3.php" method="post">
                <label>Pasirinkite gyvuna:</label>
                <br>
                <select name="gyvunas">
                    <option value="tunas">Tunas</option>
                </select>
                <br>
                <label for="svoris">Iveskite svori:</label>
                <br>
                <input type="number" step="0.01" min="0.01" name="svoris" placeholder="Svoris" required>
                <br>
                <label>Pasirinkite regiona:</label>
                <br>
                <select name="regionas">
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row["pavadinimas"] ?>"><?php echo $row["pavadinimas"] ?></option>
                        <?php
                    }
                    ?>
                </select>
                <br><br>
                <input type="submit" name="submit2" value="Sukurti Objekta">
            </form>
            <?php
        }
        ?>
    </body>
</html>

