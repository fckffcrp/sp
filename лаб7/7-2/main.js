 let basket = {

    goodList: [],
    
    countTotalPrice() {
    
    let totalPrice = 0;
    
    for (let i = 0; i < products.length; i++) {
    
    let goodsItem = this.goodList[i];
    
    totalPrice += goodsItem.price * goodsItem.count;
    
    }
    
    return totalPrice;
    
    },
    
    countTotalNumber() {
    
    let totalCount = 0;
    
    for (let i = 0; i < products.length; i++) {
    
    let goodsItem = this.goodList[i];
    
    totalCount += goodsItem.count;
    
    }
    
    return totalCount;
    
    },
    
    putProduct(product, count) {
    
    let goodsItem = {
    
    product,
    
    price: product.price,
    
    count
    
    };
    
    this.goodList.push(goodsItem);
    
    }
    
    };
    
    let products = [];
    
    for (let i = 1; i < (parseInt(Math.random() * 10) + 2); i++) {
    
    let product = {
    
    name: 'Товар' + i,
    
    price: parseInt(Math.random() * 100)  
    
    };
    
    products.push(product);
    
    }
    
    console.log(products);
    
    for (let i = 1; i <= products.length; i++) {
    
    // положить в корзину по одному товару на четной позиции и по 2 товара на нечетной позиции
    
    let count = i % 2 ? 2 : 1;
    
    basket.putProduct(products[i - 1], count);
    
    }
    
    console.log(basket);
    
    console.log('Общая цена: ' + basket.countTotalPrice().toFixed(2));
    
    console.log('Общее количество: ' + basket.countTotalNumber());