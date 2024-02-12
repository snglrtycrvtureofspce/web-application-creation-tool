<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12.02.2024</title>
</head>

<body>
    <p>Посетители страницы:
        <?php
        // Часть A: Счетчик
        $filename = "counter.dat";
        $fp = @fopen($filename, "r");

        if ($fp) {
            $counter = fgets($fp, 10);
            fclose($fp);
        } else {
            $counter = 0;
        }

        $counter++;
        echo $counter;

        $fp = @fopen($filename, "w");
        if ($fp) {
            fputs($fp, $counter);
            fclose($fp);
        }
        ?>
    </p>

    <hr>

    <h3>Список файлов:</h3>
    <ul>
        <?php
        // Часть B, C, D: Файловые операции
        $directory = "."; // Current directory
        $files = scandir($directory); // Get list of files

        foreach ($files as $file) {
            if ($file != "." && $file != "..") {
                echo "<li>";

                // Часть B: Выделите файлы PHP зеленым цветом
                if (pathinfo($file, PATHINFO_EXTENSION) == "php") {
                    echo '<span style="color: green;">' . $file . '</span>';
                } else {
                    echo $file;
                }

                // Часть C: Отображение первых 30 символов для текстовых файлов
                if (pathinfo($file, PATHINFO_EXTENSION) == "txt") {
                    $content = file_get_contents($file);
                    echo " - " . substr($content, 0, 30);
                }

                // Часть D: Отображение "Картинка" для файлов изображений
                $imageExtensions = array("gif", "jpg", "bmp");
                if (in_array(pathinfo($file, PATHINFO_EXTENSION), $imageExtensions)) {
                    echo " (" . "Картинка" . ")";
                }

                echo "</li>";
            }
        }
        ?>
    </ul>

    <hr>

    <h3>Текущая дата и время:</h3>
    <?php
    // Задание 6: Отображение текущей даты и времени в различных форматах
    echo "Сегодня " . date('d F Y') . " г.\n" . "<br>";          // Формат: Сегодня 26 December 2012 г.
    echo "Сегодня " . date('d.m.Y') . " г.\n" . "<br>";        // Формат: Сегодня 26.12.2012 г.
    echo "Сегодня " . date('d/m/y') . "\n" . "<br>";           // Формат: Сегодня 26/12/12

    echo "\nСейчас " . date('H:i:s') . "\n" . "<br>";          // Формат: Сейчас 18:07:55
    echo "Сейчас " . date('H-i') . "\n" . "<br>";              // Формат: Сейчас 18-07
    echo "Этот файл датирован " . date('d.m.Y') . "\n" . "<br>";  // Формат: Этот файл датирован 26.12.2012
    ?>

    <hr>

    <h3>Годы с 2000 года:</h3>
    <?php
    // Задание 7: Подсчитайте годы с 2000 года
    $currentYear = date("Y");
    $yearsSince2000 = $currentYear - 2000;
    echo "<p>Years since 2000: $yearsSince2000</p>";
    ?>
</body>

</html>