<?php
// break and continue

$products = [
    ['name' => 'Lenovo', 'price' => '2000000'],
    ['name' => 'ASUS', 'price' => '3000000'],
    ['name' => 'Acer', 'price' => '3200000'],
    ['name' => 'HP', 'price' => '2500000'],
    ['name' => 'DELL', 'price' => '2000000'],
];

foreach ($products as $product) {
    if ($product['name'] === 'HP') {
        break;
    }

    if ($product['name'] === 'ASUS') {
        continue;
    }

    echo $product['name'] . ' => ' . $product['price'];
    echo '<br />';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>