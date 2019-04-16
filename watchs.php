<?php
mysqli_query($conn, 'UPDATE images_origin SET watchs += 1 WHERE id = 1') or die('error click');