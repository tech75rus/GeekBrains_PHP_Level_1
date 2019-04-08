<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		.img{
			width: 100px;
			height: 170px;
			overflow: hidden;
			margin-bottom: 5px;
		}
		.img img{
			width: 100%;
		}
		.form form{
			margin: 15px 0;
		}
	</style>
	<title>Изображение</title>
</head>
<body>
	<div class="container-fluid ">
		
		<div class="row justify-content-sm-center form">
			<form enctype="multipart/form-data" method="post" action="form.php">
				<input type="file" name="photo" accept="image/*">
				<input type="submit" value="Сохранить изображение">
			</form>
		</div>
		
		<?= get_img('img/origin/');	?>

		</div>
	</div>
	
</body>
</html>
