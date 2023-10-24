<?php

session_start();

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity']++;
    } else {

        $api_url = 'https://fakestoreapi.com/products/' . $product_id;
        $ch = curl_init($api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        $product = json_decode($response, true);

        $_SESSION['cart'][$product_id] = [
            'title' => $product['title'],
            'price' => $product['price'],
            'quantity' => 1
        ];
    }
}

header('Location: cart.php');
