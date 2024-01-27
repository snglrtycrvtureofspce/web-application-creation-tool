// Задание 1
function task1() {
  const x = parseInt(document.getElementById("num1").value);
  let y = Math.sqrt(x + 9);
  if (TypeError) {
    alert("ошибка формата");
  } else {
    document.getElementById("result1").innerHTML = y;
  }
}

// Задание 2
function task2() {
  const x = parseInt(document.getElementById("num2a").value);
  const y = parseInt(document.getElementById("num2b").value);
  const z = parseInt(document.getElementById("num2c").value);
  let tallest;

  if (x > y && x > z) {
    tallest = "Первый человек самый высокий";
  } else if (y > x && y > z) {
    tallest = "Второй человек самый высокий";
  } else if (x == y && z < x && z < y) {
    tallest = "1-ый и 2-й человек самые высокие";
  } else if (y == z && x < y && x < z) {
    tallest = "2-ый и 3-й человек самые высокие";
  } else if (x == z && y < z && y < x) {
    tallest = "1-ый и 3-й человек самые высокие";
  } 
  else if (x == y && x == z && y == z) {
    tallest = "Все три человека высокие";
  } 
  else {
    tallest = "Третий человек самый высокий";
  }

  document.getElementById("result2").innerHTML = tallest;
}

// Задание 3
function task3() {
  const a = parseInt(document.getElementById("num3").value);
  let hasEvenDigit = false;
  while (a > 0) {
    if ((a % 10) % 2 === 0) {
      hasEvenDigit = true;
      break;
    }
    a = Math.floor(a / 10);
  }

  if (hasEvenDigit) {
    document.getElementById("result3").innerHTML = "В числе есть четные цифры";
  } else {
    document.getElementById("result3").innerHTML = "В числе нет четных цифр";
  }
}

// Задание 4
function task4() {
  const monthNumber = parseInt(document.getElementById("num4").value);
  let daysInMonth;

  switch (monthNumber) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
      daysInMonth = 31;
      break;
    case 4:
    case 6:
    case 9:
    case 11:
      daysInMonth = 30;
      break;
    case 2:
      daysInMonth = 28;
      break;
    default:
      daysInMonth = "Некорректный номер месяца";
      break;
  }

  document.getElementById("result4").innerHTML = daysInMonth;
}
