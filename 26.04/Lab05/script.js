// Задание 1
function calculateFunction() {
  let a = +document.getElementById("a").value;
  let b = +document.getElementById("b").value;
  let h = +document.getElementById("h").value;

  let table = document.getElementById("functionTable");
  table.innerHTML = "<tr><th>x</th><th>y</th></tr>";

  for (let x = a; x <= b; x += h) {
    let y = Math.sin(x) - Math.cos(x);
    table.innerHTML += "<tr><td>" + x + "</td><td>" + y + "</td></tr>";
  }
}

// Задание 2
function calculateTraining() {
  let a1 = +document.getElementById("a1").value;
  let b1 = +document.getElementById("b1").value / 100;
  let c1 = +document.getElementById("c1").value;

  let distance = a1;
  let days = 1;

  while (distance < c1) {
    distance += distance * b1;
    days++;
  }

  let result =
    "Чтобы пробежать " + c1 + " км, марафонецу понадобится " + days + " дней.";
  document.getElementById("trainingResult").innerHTML = result;
}

// Задание 3
function getOddNumbers() {
  let a2 = +document.getElementById("a2").value;
  let b2 = +document.getElementById("b2").value;

  let oddNumbers = "";
  for (let i = a2; i <= b2; i++) {
    if (i % 2 !== 0) {
      oddNumbers += i + " ";
    }
  }

  document.getElementById("oddNumbers").innerHTML =
    "Нечетные числа: " + oddNumbers;
}

// Задание 4
function twoDigitNumber() {
  for (let i = 10; i <= 99; i++) {
    const sumOfDigits = Math.floor(i / 10) + (i % 10);
    const sumOfDigitsCubed = sumOfDigits ** 3;
    const squareOfNumber = i ** 2;

    if (sumOfDigitsCubed === squareOfNumber) {
      document.getElementById("twoDigitNumberResult").innerHTML = i;
      break;
    }
  }
}

// Задание 5
function checkPalindrome() {
  let a3 = +document.getElementById("a3").value;

  let reversed = parseInt(a3.toString().split("").reverse().join(""));
  let result =
    a3 === reversed
      ? "Число является палиндромом"
      : "Число не является палиндромом";

  document.getElementById("palindromeResult").innerHTML = result;
}
