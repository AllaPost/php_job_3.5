<?php

echo "<strong>Задание 1: Создание простого массива</strong> <br>";

// Массив с именами
$friends = ['Маша', 'Алина', 'Вера', 'Таня'];

// Вывод имен на новую строку
foreach ($friends as $friend) {
    echo $friend . "<br>";
}

echo "<strong>Задание 2: Индексы массива</strong> <br>";

// Массив из 5 произвольных чисел
$numbers = [10, 20, 30, 40, 50];

// Элемент с индексом 2
echo $numbers[2] . "<br>";

echo "<strong>Задание 3: Ассоциативный массив</strong> <br>";

// Ассоциативный массив с информацией о друге
$friend = [
    'name' => 'Маша',
    'age'  => 29,
    'city' => 'Воронеж'
];

// Вывод имени и возраста
echo "Имя: " . $friend['name'] . "<br>";
echo "Возраст: " . $friend['age'] . "<br>";

echo "<strong>Задание 4: Массивы с циклами</strong> <br>";

// Массив из 5 чисел
$numbers = [5, 12, 8, 20, 15];

// Цикл foreach для перебора массива
foreach ($numbers as $number) {
    // Проверка
    if ($number > 10) {
        echo $number . "<br>";
    }
}

echo "<strong>Задание 5: Работа с массивами функций</strong> <br>";

// Массив из 5 чисел
$numbers = [5, 10, 15, 20, 25];

// Сумма всех чисел в массиве
$sum = array_sum($numbers);

// Вывод суммы на экран
echo "Сумма чисел: " . $sum . "<br>";

echo "<strong>Задание 6: Учет товаров в магазине</strong> <br>";

// Массив товаров
$products = [
    [
        'name' => 'Телевизор',
        'price' => 30000,
        'quantity' => 10
    ],
    [
        'name' => 'Холодильник',
        'price' => 25000,
        'quantity' => 5
    ],
    [
        'name' => 'Смартфон',
        'price' => 15000,
        'quantity' => 20
    ],
    [
        'name' => 'Ноутбук',
        'price' => 40000,
        'quantity' => 7
    ],
    [
        'name' => 'Микроволновка',
        'price' => 8000,
        'quantity' => 15
    ]
];

// Функция вывода списка товаров с их наименованием, ценой и количеством
function displayProducts($products) {
    foreach ($products as $product) {
        echo "Товар: " . $product['name'] . ", Цена: " . $product['price'] . ", Количество: " . $product['quantity'] . "<br>";
    }
}

// Функция добавления нового товара
function addProduct(&$products, $name, $price, $quantity) {
    $newProduct = [
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity
    ];
    $products[] = $newProduct;
}

// Функция обновления количества товара
function updateQuantity(&$products, $name, $newQuantity) {
    foreach ($products as &$product) {
        if ($product['name'] === $name) {
            $product['quantity'] = $newQuantity;
            break;
        }
    }
}

// Вывод списка всех товаров
displayProducts($products);
echo "<br>";

// Добавление нового товара
addProduct($products, 'Пылесос', 10000, 12);
echo "После добавления нового товара:<br>";
displayProducts($products);
echo "<br>";

// Обновление количества товара
updateQuantity($products, 'Телевизор', 8);
echo "После обновления количества товара 'Телевизор':<br>";
displayProducts($products);

echo "<strong>Задание 10: Фильтрация массива</strong> <br>";
// Массив с числами
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Функция фильтрации четных чисел
function filterEvenNumbers($numbers) {
    $evenNumbers = []; 

    // Проходим по массиву и проверяем каждое число
    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $evenNumbers[] = $number;
        }
    }

    // Возврат массива с четными числами
    return $evenNumbers;
}

// Вызов функции и вывод результата
$evenNumbers = filterEvenNumbers($numbers);
echo "Четные числа: " . implode(", ", $evenNumbers);

?>