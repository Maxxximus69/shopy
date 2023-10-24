<?php
$api_url = 'https://fakestoreapi.com/products';
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$products = json_decode($response, true);

$file_path = 'products.json';
file_put_contents($file_path, json_encode($products));

if (file_exists($file_path)) {
    echo "Данные успешно сохранены в файл: $file_path";
} else {
    echo "Ошибка при сохранении данных в файл";
}
?>
