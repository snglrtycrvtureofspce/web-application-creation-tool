<?php
    $products = array(
        "Товар 1" => 100,
        "Товар 2" => 200,
        "Товар 3" => 150,
    );

    $products["Товар 4"] = 180;
    $products["Товар 5"] = 220;

    echo "Список товаров и их цен:<br>";
    foreach ($products as $product => $price) {
        echo "$product - $price<br>";
    }

    $products["Товар 6"] = 190;
    $products["Товар 7"] = 250;

    $totalProducts = count($products);
    $totalPrice = array_sum($products);

    echo "<br>Общее количество товаров: $totalProducts<br>";
    echo "Суммарная стоимость всех товаров: $totalPrice<br>";

    $sortType = "desc"; 

    if ($sortType === "desc") {
        arsort($products);
        echo "<br>Сортировка по убыванию цены:<br>";
    } else {
        asort($products);
        echo "<br>Сортировка по возрастанию цены:<br>";
    }

    foreach ($products as $product => $price) {
        echo "$product - $price<br>";
    }

    ksort($products);
    echo "<br>Сортировка по алфавиту:<br>";
    foreach ($products as $product => $price) {
        echo "$product - $price<br>";
    }

?>
