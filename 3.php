<?php

/**
 * Задача 3. Работа с массивами
 *
 * Напишите функцию PHP, которая принимает массив значений и возвращает сумму чисел.
 */

function arraySum(array $arrayNumber): float
{
    $resultSum = 0;
    foreach ($arrayNumber as $arrayItem) {
        if (is_numeric($arrayItem)) {
            $resultSum += $arrayItem;
        }
    }
    return $resultSum;
}

echo arraySum([2, 4, 77, 43, 43.45, 'hello', 543, 331]);