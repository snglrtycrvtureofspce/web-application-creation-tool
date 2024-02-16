<?php

    $products = array("Товар 3", "Товар 2", "Товар 4", "Товар 5", "Товар 4");

    $products[] = "Товар 6";
    array_push($products, "Товар 7");

    $count = count($products);
    echo "Количество товаров в массиве: $count<br>";
    echo "Список товаров:<br>";
    foreach ($products as $product) {
        echo "$product<br>";
    }

    echo "<br>";

    $products[] = "Товар 8";
    $count = count($products);
    echo "Количество товаров в массиве: $count<br>";
    echo "Список товаров:<br>";
    foreach ($products as $product) {
        echo "$product<br>";
    }
    echo "<br>";
    sort($products);
    foreach ($products as $product) {
        echo "$product<br>";
    }
    echo "<br>";
    echo "Исходный массив:<br>";
    print_r($products);

    sort($products);
    echo "Массив после сортировки:<br>";
    print_r($products);
?>
