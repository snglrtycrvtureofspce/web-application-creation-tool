<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>54</title>
</head>

<body>

    <?php
    $week = array(
        0 => 'Воскресенье',
        1 => 'Понедельник',
        2 => 'Вторник',
        3 => 'Среда',
        4 => 'Четверг',
        5 => 'Пятница',
        6 => 'Суббота'
    );

    $currentDayOfWeek = date('w');

    echo "Сегодня " . $week[$currentDayOfWeek] . "<br>";

    $dayOfWeek_09_06_2003 = date('w', strtotime('2003-06-09'));
    echo "09.06.2003 был " . $week[$dayOfWeek_09_06_2003] . "<br>";

    $birthday = '2004-15-11';
    $birthdayDayOfWeek = date('w', strtotime($birthday));
    echo "Мой день рождения был в " . $week[$birthdayDayOfWeek] . "<br>";
    ?>
</body>

</html>