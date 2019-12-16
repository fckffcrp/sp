console.log('Задание 3.1');
let a = [
    [{name: 'Mary', age: 23}, {name: 'Mike', age: 45}, {name: 'Nick', age: 11}],
    [{name: 'Adam', age: 56}, {name: 'Sara', age: 21}, {name: 'Don', age: 22}],
    [{name: 'Karl', age: 34}, {name: 'Marta', age: 76}, {name: 'John', age: 19}]
   ];

let b = a;

console.log(b[0]);
console.log(b[1]);
console.log(b[2]);

console.log('Задание 3.2')
let priceIn = 0;

let inBasket = [
    {name: 'Футболка', price: 999}, {name: 'Худи', price: 1999}
]
inBasket.push({name: 'Чехол', price: 500},{name: 'Альбом', price: 1000});

//посчитаем общую стоимост товаров

function countBasketPrice() {
    for(let i = 0; i < inBasket.length; i++){
        priceIn = priceIn + inBasket[i].price;
    }
    return priceIn;
}

console.log('В корзине ')
for (i=0;i<inBasket.length;i++){
    console.log(inBasket[i].name + ' : ' + inBasket[i].price +' рублей');
}
console.log('Стоимость заказа: '+countBasketPrice(inBasket)+' рублей');