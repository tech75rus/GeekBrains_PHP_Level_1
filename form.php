<?php

// пороверю есть массив
if(empty(!$_FILES)){

	// проверяю тип чтоб не было загружено не нужних файлов
	if($_FILES['photo']['type'] === 'image/png' || $_FILES['photo']['type'] === 'image/jpeg' 
		|| $_FILES['photo']['type'] === 'image/gif'){

		// Ограничение закачки 20 мегабайт
		if ($_FILES['photo']['size'] < 20971520) {
			
			$tmp = $_FILES['photo']['tmp_name'];
			$filename = $_FILES['photo']['name'];

			// загружаю оригинальный файл
			move_uploaded_file($tmp, 'img/origin/'. $filename);
			
			$origin_image = 'img/origin/'. $filename;
			// существует ли файл?
			if(file_exists($origin_image)){

				// проверка какой формат пришел
				if(substr($filename, -4, 4) == '.jpg'){

					jpg_check($filename, $origin_image);
					
					// проверка какой формат пришел
				}elseif(substr($filename, -4, 4) == '.png'){

					png_check($filename, $origin_image);
					
					// проверка какой формат пришел
				}elseif(substr($filename, -4, 4) == '.gif'){

					gif_check($filename, $origin_image);
					
				}else{
					echo 'Не верный формат';
				}

			}else{
				echo 'Не могу найти файл' . $filename;
			}
		}else{
			echo 'Размер изображения не должен превышать 20 Mb';
		}

	}else{
		echo 'Не верный формат файла или введены пустые данные';
	}

}else{
	var_dump($_FILES);
	echo 'Нет данных';
}
	

function jpg_check($filename, $origin_image){
	
	$percent = 0.3;

	// получение нового размера
	list($width, $height) = getimagesize($origin_image);
	$newwidth = $width * $percent;
	$newheight = $height * $percent;

	// загрузка
	$thumb = imagecreatetruecolor($newwidth, $newheight);
	$source = imagecreatefromjpeg($origin_image);

	// изменение размера
	imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

	// загружаю сжатое изображение
	imagejpeg($thumb, 'img/min/' . $filename, 100);

	// думаю нужно все очистить чтобы пямять не забивалась
	imagedestroy($thumb);
	imagedestroy($source);

	// возвращаюсь на главную страницу
	header("Location: ../lesson_4");
}

function png_check($filename, $origin_image){
		
		$percent = 0.3;

		// получение нового размера
		list($width, $height) = getimagesize($origin_image);
		$newwidth = $width * $percent;
		$newheight = $height * $percent;

		// загрузка
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$source = imagecreatefrompng($origin_image);

		// изменение размера
		imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

		// загружаю сжатое изображение
		imagepng($thumb, 'img/min/' . $filename, 9);

		// думаю нужно все очистить чтобы пямять не забивалась
		imagedestroy($thumb);
		imagedestroy($source);

		// возвращаюсь на главную страницу
		header("Location: ../lesson_4");
}

function gif_check($filename, $origin_image){
		
		$percent = 0.3;

		// получение нового размера
		list($width, $height) = getimagesize($origin_image);
		$newwidth = $width * $percent;
		$newheight = $height * $percent;

		// загрузка
		$thumb = imagecreatetruecolor($newwidth, $newheight);
		$source = imagecreatefromgif($origin_image);

		// изменение размера
		imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

		// загружаю сжатое изображение
		imagegif($thumb, 'img/min/' . $filename);

		// думаю нужно все очистить чтобы пямять не забивалась
		imagedestroy($thumb);
		imagedestroy($source);

		// возвращаюсь на главную страницу
		header("Location: ../lesson_4");	
}
