<!DOCTYPE html>
<html>
<head>
    <title>Корзина</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="cart">
        <h1>Корзина</h1>
        <div id="cart-items">
        </div>
        <p>Total: $<span id="cart-total">0.00</span></p>
        <button id="checkout-button">Оформить заказ</button>
    </div>

    <?php include 'footer.php'; ?>
    <script src="cart.js"></script>
</body>
</html>
