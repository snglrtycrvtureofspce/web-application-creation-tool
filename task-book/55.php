<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>55</title>
  </head>
  <body>
    <form method="post">
      <input type="checkbox" name="checkbox" id="checkbox" />
      <label for="checkbox">Checkbox</label>
      <button type="submit">Проверить</button>
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['checkbox'])) {
        echo "Отмечен";
    } else {
        echo "Не отмечен";
    }
}
?>
  </body>
</html>
