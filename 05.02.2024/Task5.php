<?php

$peoples = array(
    1 => array('fio' => 'Сонный Антон Петрович', 'age' => 20, 'sex' => 'м', 'education' => 'среднее'),
    2 => array('fio' => 'Павлова Александра Анатольевна', 'age' => 28, 'sex' => 'ж', 'education' => 'высшее'),
    3 => array('fio' => 'Никольский Алексей Николаевич', 'age' => 31, 'sex' => 'м', 'education' => 'высшее'),
    4 => array('fio' => 'Коленкова Анна Сергеевна', 'age' => 20, 'sex' => 'ж', 'education' => 'среднее'),
    5 => array('fio' => 'Питонова Карина Фёдоровна', 'age' => 21, 'sex' => 'ж', 'education' => 'среднее'),
);

function displayPeoplesTable($peoples) {
    echo "<table border='1'>";
    echo "<tr><th>ФИО</th><th>Возраст</th><th>Пол</th><th>Образование</th></tr>";

    foreach ($peoples as $person) {
        echo "<tr>";
        echo "<td>" . $person['fio'] . "</td>";
        echo "<td>" . $person['age'] . "</td>";

        echo "<td style='color:";
        echo ($person['sex'] == 'м') ? 'blue' : 'red'; 
        echo "'>" . $person['sex'] . "</td>";

        echo "<td style='font-weight:";
        echo ($person['education'] == 'высшее') ? 'bold' : 'normal';
        echo "'>" . $person['education'] . "</td>";

        echo "</tr>";
    }

    echo "</table>";
}

displayPeoplesTable($peoples);

?>
