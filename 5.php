<?php

/**
 * Задача 5 Работа с сессиями
 *
 * Используя API https://bezkassira.by/api/activity/categoryList/ "Список главных категорий"
 * с auth_key=05f8b6c1d960664e2bbab30d0cdf9865aa00a6ac94f251d7563b7b51ada8b334
 * напишите PHP-скрипт, который делает GET-запрос к API и выводит на экран все главные категории в столбик.
 *
 * Каждый раз, когда происходит обращение к API, его счетчик посещений должен увеличиваться.
 * Выведите на экран количество обращений к API пользователя.
 * Количество всех категорий сохранить в сессионной переменной и в cookies с именем "count_category"
 *
 */

session_start();

$authKey = '05f8b6c1d960664e2bbab30d0cdf9865aa00a6ac94f251d7563b7b51ada8b334';
$apiUrl = 'https://bezkassira.by/api/activity/categoryList/?auth_key=' . $authKey;

if (!isset($_SESSION['apiRequestCounter'])) {
    $_SESSION['apiRequestCounter'] = 0;
}
$_SESSION['apiRequestCounter']++;
echo 'Количество обращений к API пользователя: ' . $_SESSION['apiRequestCounter'] . '<br>';
$json = file_get_contents($apiUrl);
$data = json_decode($json, true);

$_SESSION['count_category'] = count($data);
setcookie('count_category', count($data), time() + 3600);
$_COOKIE['count_category'] = count($data);

echo 'Список главных категорий в столбик: <br>';
foreach ($data as $category) {
    echo $category['type_name'] . '<br>';
}