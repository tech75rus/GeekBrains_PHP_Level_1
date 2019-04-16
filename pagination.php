<?php

$limit = 3;
$count_img = mysqli_query($conn, 'SELECT COUNT(*) FROM images_min') or die('Not query images_min');
$count_img = mysqli_fetch_row($count_img);
$count_img = $count_img[0];

$total_pages = ceil($count_img / $limit);
