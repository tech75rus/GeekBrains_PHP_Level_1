<?php

function get_img($img_origin, $img_min, $count = 3){

    $arr_origin = [];
    $arr_min = [];
    $result = '';

    while ($res = mysqli_fetch_assoc($img_origin)){
        $arr_origin[] = $res;
    }
    while ($res = mysqli_fetch_assoc($img_min)){
        $arr_min[] = $res;
    }


	$result .='<div class="row">';

    for($i = 0; $i < $count; $i++){
        $result .= '<div class="img col-12 col-md-6 col-lg-4">';
			$result .= '<a href="' . $arr_origin[$i]['path'] . $arr_origin[$i]['name'] . '" target="_blank">';
				$result .= '<img src="' . $arr_min[$i]['path'] . $arr_min[$i]['name'] . '" alt="" id="'.$arr_origin[$i]['id'].'">';
			$result .= '</a>';
		$result .= '</div>';
	}
	$result .= '</div>';
	return $result;
}
