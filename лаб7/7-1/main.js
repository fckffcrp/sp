let values = {
  number : +prompt('Введите число от 0 до 999'),     
    units : 0,
    tens : 0,
    thousend : 0
};

if (values.number <0){
    values.number = 0;
    console.log('Вы ввели число меньше 0');
 
} else if (values.number <= 999){
    values.units = Math.floor(values.number % 10);
    values.tens = Math.floor(values.number / 10 % 10);
    values.thousend = Math.floor(values.number / 100 % 10);
    console.log("Единицы: "+values.units);
    console.log("Десятки: " + values.tens);
    console.log("Сотни: " + values.thousend);
  } else {
    values.number = 0;
      console.log('Вы ввели число больше 999');
  }
 