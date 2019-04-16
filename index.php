<?php $start = microtime(true);?>
<?php require_once  'connect.php'?>
<?php require_once 'functions.php'; ?>
<?php require_once 'pagination.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
    <link rel="stylesheet" href="style.css">
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


		<?= get_img($img_origin, $img_min, 5);	?>

        <a href="#">1</a>
        <a href="#">2</a>
	</div>
	<script>

    </script>
</body>
</html>
<?php echo microtime(true) - $start;?>