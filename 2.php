<?php

/**
 * Задача 2 Работа со строками
 *
 * Есть некоторая переменная $number.
 * Как умножить ее на 9 без использования оператора умножения "*" ?
 */

function multiplicationNumber(int $number): int
{
    $resultNumber = 0;
    for ($i = 0; $i < 9; $i++) {
        $resultNumber += $number;
    }
    return $resultNumber;
}

echo multiplicationNumber(33);