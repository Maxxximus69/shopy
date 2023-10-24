<?php
include 'config.php';

$ch = curl_init($config['api_url']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$products = json_decode($response, true);

foreach ($products as $product) {
    // var_dump($product);
    echo '<div class="product">';
    echo '<img src="' . $product['image'] . '" alt="' . $product['title'] . '">';
    echo '<strong>' . $product['title'] . '</strong><br>';
    echo 'Категория: ' . $product['category'] . '<br>';
    echo 'Цена: $' . $product['price'] . '<br>';
    echo '<a href="add_to_cart.php?id=' . $product['id'] . '">Добавить в корзину</a>';
    echo '</div>';
}
?>
