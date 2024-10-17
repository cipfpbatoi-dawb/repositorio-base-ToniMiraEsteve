<?php
session_start();


$producte = [
    'product1' => 'Poma',
    'product2' => 'Plàtan',
    'product3' => 'Taronja',
];

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['products'])) {
    foreach ($_POST['producte'] as $product) {
        if (isset($_SESSION['cart'][$product])) {
            $_SESSION['cart'][$product]++;
        } else {
            $_SESSION['cart'][$product] = 1;
        }
    }
}


?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Selecció de productes</title>
</head>
<body>
    <h1>Afegir productes al carret</h1>
    <?php foreach ($producte as $key => $name): ?>
    <form action="" method="post">
        <label for="producte">Tria un producte:</label>

        <input type="checkbox" name="producte[]" value="<?php echo $key; ?>">
            <?php echo $name; ?>
        </input>
        <?php endforeach; ?>
        <button type="submit">Afegir al Carret</button>
    </form>
    <a href="mostrar.php">Veure carret</a>
    <br>
    <h2>Contingut del Carret</h2>
    <?php if (empty($_SESSION['cart'])): ?>
        <p>El teu carret està buit.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['cart'] as $key => $quantity): ?>
                <li>
                    <?php echo $products[$key]; ?> x <?php echo $quantity; ?>
                    <a href="remove_from_cart.php?product=<?php echo $key; ?>">Eliminar</a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <br>
    <a href="cart.php">Veure Carret Completo</a>
</body>
</html>