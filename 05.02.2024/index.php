<html>

<head>
  <title>Лабораторная работа №25</title>
</head>

<body>
  <?php
  // Task 1
  $products = array("Product1", "Product5", "Product3", "Product4", "Product2");
  ?>

  <br>

  <?php
  // Task 2
  $products[] = "Product6";
  $products[] = "Product7";
  ?>

  <br>

  <?php
  $products[] = "Product6";
  $products[] = "Product7";

  $count = count($products);

  for ($i = 0; $i < $count; $i++) {
    echo $products[$i] . "<br>";
  }
  ?>

  <br>

  <?php
  // Task 4
  $products = array("Product1", "Product5", "Product3", "Product4", "Product2");
  $products[] = "Product6";
  $products[] = "Product7";

  sort($products);

  echo "Исходный массив: " . implode(", ", $products) . "<br>";

  // Сортировка в алфавитном порядке
  sort($products);
  echo "Отсортированный массив: " . implode(", ", $products);
  ?>

  <br>

  <?php
  // Task 5
  // Создание ассоциативного массива: ТОВАР => ЦЕНА
  $prices = array(
    "Товар1" => 100,
    "Товар2" => 50,
    "Товар3" => 200,
    "Товар4" => 75,
    "Товар5" => 120
  );

  // Добавление элементов непосредственно в операторе присваивания
  $prices["Товар6"] = 90;
  $prices["Товар7"] = 150;

  // Вывод товаров и цен с использованием цикла foreach
  foreach ($prices as $product => $price) {
    echo "$product - $price<br>";
  }

  // Подсчет количества товаров и их суммарной стоимости
  $productCount = count($prices);
  $totalPrice = array_sum($prices);

  echo "Общее количество товаров: $productCount<br>";
  echo "Суммарная стоимость: $totalPrice<br>";

  // Выбор видов сортировки
  $sortingType = "ascending"; // Можно изменить на "descending" для сортировки по убыванию

  if ($sortingType === "descending") {
    arsort($prices);
  } else {
    asort($prices);
  }

  // Вывод отсортированного массива
  echo "Отсортированный массив:<br>";
  foreach ($prices as $product => $price) {
    echo "$product - $price<br>";
  }
  ?>

  <br>

  <?php
  // Task 6
  $peoples = array(
    1 => array('fio' => 'Сонный Антон Петрович', 'age' => 20, 'sex' => 'м', 'education' => 'среднее'),
    2 => array('fio' => 'Павлова Александра Анатольевна', 'age' => 28, 'sex' => 'ж', 'education' => 'высшее'),
    3 => array('fio' => 'Никольский Алексей Николаевич', 'age' => 31, 'sex' => 'м', 'education' => 'высшее'),
    4 => array('fio' => 'Коленкова Анна Серегеевна', 'age' => 20, 'sex' => 'ж', 'education' => 'среднее'),
    5 => array('fio' => 'Питонова Карина Фёдоровна', 'age' => 21, 'sex' => 'ж', 'education' => 'среднее'),
  );

  function displayTable($data)
  {
    echo '<table border="1">';
    echo '<tr><th>№</th><th>ФИО</th><th>Возраст</th><th>Пол</th><th>Образование</th></tr>';

    foreach ($data as $key => $person) {
      echo "<tr>";
      echo "<td>$key</td>";
      echo "<td>{$person['fio']}</td>";
      echo "<td>{$person['age']}</td>";
      echo "<td>{$person['sex']}</td>";
      echo "<td>{$person['education']}</td>";
      echo "</tr>";
    }

    echo '</table>';
  }

  // Вызов функции для отображения таблицы
  displayTable($peoples);
  ?>

  <br>

  <?php
  // Task 7
  $variable1 = 5;
  $variable2 = 10;
  $sum = $variable1 + $variable2;
  echo $sum;
  ?>

  <br>

  <?php
  // Task 8
  $variable1 = 5;
  $variable2 = 10;
  $result = (float)($variable1 + $variable2);
  echo $result;
  ?>

  <br>

  <?php
  // Task 9
  $variable = 10;
  if ($variable == 10) {
    echo "OK";
  } elseif (
    $variable >
    10
  ) {
    echo "Больше";
  } else {
    echo "Меньше";
  }
  ?>

  <br>

  <?php
  // Task 10
  $variable = 10;
  switch ($variable) {
    case 10:
      echo "1 - Переменная равна 10";
      break;
    case 20:
      echo "2 - Переменная равна 20";
      break;
    case 30:
      echo "3 - Переменная равна 30";
      break;
    default:
      echo "4 - Ни одно из условий не выполнилось";
  }
  ?>
</body>

</html>