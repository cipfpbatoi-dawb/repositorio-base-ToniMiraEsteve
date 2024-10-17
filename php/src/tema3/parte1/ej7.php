<?php
$colorPreferit = isset($_COOKIE['color_preferit']) ? $_COOKIE['color_preferit'] : 'blau';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $colorPreferit = $_POST['color_preferit'];

    setcookie('color_preferit', $colorPreferit, time() + 3600, '/');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Preferències de Color</title>
</head>
<body style="background-color: <?php echo $colorPreferit; ?>">
    <h2>Preferències de Color</h2>
    <form method="post">
        <label for="color_preferit">Color preferit:</label>
        <select id="color_preferit" name="color_preferit">
            <option value="blau" <?php if ($colorPreferit === 'blau') echo 'selected'; ?>>Blau</option>
            <option value="vermell" <?php if ($colorPreferit === 'vermell') echo 'selected'; ?>>Vermell</option>
            <option value="verd" <?php if ($colorPreferit === 'verd') echo 'selected'; ?>>Verd</option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>