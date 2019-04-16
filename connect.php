<?php

$host = 'localhost';
$db = 'gb_lesson_5';
$name = 'root';
$pass = '';

$conn = mysqli_connect($host, $name, $pass, $db) or die('Нет подключение к базе данных');

$img_origin = mysqli_query($conn, 'SELECT * FROM images_origin') or die('Не выполнился запрос');
$img_min = mysqli_query($conn, 'SELECT * FROM images_min') or die('Не выполнился запрос');