<?php

/**
 * Задача 1 Создание функции для определения четности числа
 *
 * Напишите функцию PHP, которая принимает массив чисел и строк в качестве аргумента и
 * выводит на экран строку "Четное", если число четное, строку "Нечетное", если число нечетное,
 * и строку "Undefined" для других вариантов, если такие существую.
 * Функция вызвращает количество четных чисел
 */
function checkEvenNumber(array $arrayStr): int
{
    $countEvenNumber = 0;
    foreach ($arrayStr as $value) {
        if (is_numeric($value)) {
            if ($value % 2 === 0) {
                echo "Чётное <br>";
                $countEvenNumber++;
            } else {
                echo "Нечётное <br>";
            }
        } else {
            echo "Undefined <br>";
        }
    }
    return $countEvenNumber;
}

echo "Количество чётных чисел в массиве: " . checkEvenNumber([1, 2, '32', 43, 'fe', 1111, 44]);