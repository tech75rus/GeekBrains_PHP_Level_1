<?php

function get_img($url){
	$arr = scandir($url);
	$count = count($arr);
	$result = '';
	$result .='<div class="row">';
		for($i = 2; $i < $count; $i++){		
			$result .= '<div class="img col-12 col-md-6 col-lg-4">'; 
				$result .= '<a href="img/origin/' . $arr[$i] . '" target="_blank">';
					$result .= '<img src="img/min/' . $arr[$i] . '" alt="">';
				$result .= '</a>';
			$result .= '</div>';
	}
	$result .= '</div>';
	return $result;
}
?>