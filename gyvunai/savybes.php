<?php
session_start();
$_SESSION['tipas'] = $_POST['tipas'];

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
        if ($_SESSION['tipas'] == 'zole') {
            ?>
            <form action="savybes3.php" method="post">
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
                <input type="submit" name="submit2" value="Toliau">
            </form>   
            <?php
        } else {
            ?>  
            <form action="savybes2.php" method="post">
                <label>Pasirinkite savybe:</label>
                <br>
                <select name="mityba">
                    <option value="mesedis">Mesedis</option>
                    <option value="zoliaedis">Zoliaedis</option>
                </select>
                <br><br>
                <input type="submit" name="submit2" value="Toliau">
            </form>  
            <?php
        }
        ?>    
    </body>
</html>
