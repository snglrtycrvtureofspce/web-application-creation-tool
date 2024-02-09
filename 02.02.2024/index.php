<html>

<head>
  <title>Лабораторная работа №24</title>
</head>

<body>
  Этот текст представляет данные, полученные в результате работы PHP 5:
  Сегодня
  <?php
  // Task 1
  $todaysdate = date("m-d-Y", time());
  echo $todaysdate;

  $day = "Monday";
  ?>

  <br>

  <?php
  // Task 2
  switch ($day) {
    case "Monday":
      echo "It's Monday!";
      break;
    case "Tuesday":
      echo "It's Tuesday!";
      break;
    default:
      echo "It's another day!";
  }
  ?>

  <br>

  <?php
  // Task 3
  echo "Меня зовут Вася";
  // Это однострочный комментарий в стиле С++
  echo "Фамилия моя Петров";
  /* Это многострочный комментарий. Здесь можно написать несколько строк. При исполнении программы все, что находится здесь (закомментировано), будет игнорировано. */
  echo "Я изучаю PHP";
  # Это комментарий в стиле оболочки Unix
  ?>

  <br>

  <?php
  // Task 4
  define("PASSWORD", "qwerty");
  define("PI", "3.14", true);
  echo PASSWORD;  // Вывод значения константы
  echo constant("PASSWORD");  // Альтернативный способ вывода значения константы
  echo PI;  // Вывод значения константы PI
  ?>

  <br>

  <?php
  // Task 5
  $first = ' Text ';
  $second = $first;
  $first = ' New text ';
  echo "Переменная с именем first равна $first <br>";
  echo "Переменная с именем
    second равна $second";
  ?>

  <br>

  <?php
  // Task 6
  $first = ' Text ';
  $second = &$first;
  $first = ' New text ';
  echo "Переменная с именем first равна $first <br>";
  echo "Переменная с именем
    second равна $second";
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