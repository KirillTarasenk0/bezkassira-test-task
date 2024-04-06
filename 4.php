<?php

/**
 * Задача 4 Работа с файлами
 *
 * Напишите PHP-скрипт, который открывает файл "example.txt" для чтения, считывает его содержимое и выводит на экран.
 * Затем напишите функцию, которая открывает файл для записи и записывает в него новую строку.
 * Проверьте работу функции, вызвав ее и затем снова открыв файл для чтения и проверив, что новая строка была записана.
 */

function readingFile(string $fileName): void
{
    $file = fopen($fileName, 'r');
    if ($file) {
        while (!feof($file)) {
            echo fgets($file) . "<br>";
        }
    } else {
        echo 'Файл нельзя прочитать. Проверьте имя файла. <br>';
    }
    fclose($file);
}
function writingFile(string $fileName, string $textToWrite): void
{
    $file = fopen($fileName, 'a+');
    if (is_writable($fileName)) {
        if (fwrite($file, $textToWrite) !== false) {
            echo 'Информация была успешно записана в файл. <br>';
        } else {
            echo 'Не удаётся произвести запись в файл. <br>';
        }
    } else {
        echo 'В файл нельзя записать информацию. Проверьте имя файла. <br>';
    }
    fclose($file);
}
echo 'Изначальное содержимое файла: <br>';
readingFile('example.txt');
writingFile('example.txt', ' Тестовое задание');
echo 'Содержимое файла после записи в него новой строки: <br>';
readingFile('example.txt');