<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'gb_lesson_6';

$conn = mysqli_connect($host, $user, $password, $db);

$query_img = mysqli_query($conn, 'SELECT * FROM images');
