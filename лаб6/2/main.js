console.log("Задание 2.2");

let a = 2;
let x = 1 + (a*=2);
console.log(x);

console.log("Задание 2.3");

let per1 = prompt('Введите a: ');
let per2 = prompt('Введите b: ');

if (per1 > 0 || per2 > 0) {
    console.log(per1 - per2);
} 
else if (per1 < 0 || per2 < 0){
    console.log(per1 * per2)
} 
else if(per1 > 0 || per2 < 0) {
    console.log (per1 + per2);
}

console.log("Задание 2.4");

let val1 = prompt('Введите первую переменную: ');
let val2 = prompt('Введите вторую переменную: ');
function sum() {
    
    return  val1- -val2;
}
function um() {
    return val1 * val2;
}
function del() {
    return val1 / val2;
}
function unsum() {
    return val1 - val2;
}
console.log(
    'Сумма:' +' '+ sum()+';',
   'Умножение:' + ' '+  um()+';',
   'Деление' +' '+ del()+';',
    'Вычитание' +' '+ unsum()
    );

console.log("Задание 2.5");

function zadanie() {

    var a = +prompt('ЗАДАНИЕ 5. Введите значение "a" '),
    
    b = +prompt('Введите значение "b"'),
    
    operation = prompt('Выберите операцию "+", "-", "*", "/"'),
    
    result;
    
    function operationAddition (a, b) {
    
    return a+b;
    
    }
    
    function operationSubtraction(a, b) {
    
    return a-b;
    
    }
    
    function operationMultiplication (a, b) {
    
    return a*b;
    
    }
    
    function operationDivision (a, b) {
    
    return a/b;
    
    }
    
    function mathOperation(a, b, operation) {
    
    switch (operation) {
    
    case("+"):
    
    return operationAddition (a, b);
    
    case("-"):
    
    return operationSubtraction (a, b);
    
    case("*"):
    
    return operationMultiplication (a, b);
    
    case("/"):
    
    return operationDivision (a, b);
    
    default:
    
    return "Неправильно введена арифметическая операция!";
    
    }
    
    }
    
    console.log ('a = ' + a +
    
    '\nb = ' + b +
    
    '\nоперация: ' + operation +
    
    '\nрезультат: ' + mathOperation(a, b, operation));
    
    }
    
    zadanie();