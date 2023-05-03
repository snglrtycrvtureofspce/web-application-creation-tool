function areaHeight() {
  let a = document.forma1.t1.value * 71.12;
  let b = document.forma1.t2.value * 4.445;
  let c = 1 * document.forma1.t3.value;
  let s = (a + b + c) / 3;
  document.forma1.res1.value = s;
}

function areaHours() {
  let z = (40 * 7) / 60;
  document.forma2.res2.value = z;
}

function areaDigit() {
  let o = (document.forma3.t4.value / 100) | 0;
  let os = document.forma3.t4.value % 10;
  let str = String(o);
  let str1 = String(os);
  document.forma3.res3.value = str + str1;
}

function areaTime() {
  let h = Math.sqrt((2 * document.forma4.t5.value) / 9.8);
  document.forma4.res4.value = h;
}
