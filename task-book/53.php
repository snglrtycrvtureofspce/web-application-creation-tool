<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>53</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .highlight {
            font-weight: bold;
            color: blue;
        }
    </style>
</head>

<body>

    <?php
    $data = array(
        array('name' => 'Тестовый Тест Тестович', 'age' => 1, 'gender' => 'мужской', 'education' => 'высшее'),
        array('name' => 'Тестовый Тест Тестович', 'age' => 22, 'gender' => 'женский', 'education' => 'среднее'),
        array('name' => 'Тестовый Тест Тестович', 'age' => 44, 'gender' => 'мужской', 'education' => 'высшее')
    );

    function displayData($data)
    {
        echo "<table>";
        echo "<tr><th>ФИО</th><th>Возраст</th><th>Пол</th><th>Образование</th></tr>";
        foreach ($data as $person) {
            echo "<tr>";
            foreach ($person as $key => $value) {
                if ($key == 'gender') {
                    $value = ($value == 'мужской') ? '<span class="highlight">' . $value . '</span>' : $value;
                } elseif ($key == 'age') {
                    $value = ($value >= 30) ? '<span class="highlight">' . $value . '</span>' : $value;
                }
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    displayData($data);
    ?>
</body>

</html>