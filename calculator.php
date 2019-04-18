<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Калькулятор</title>
</head>
<body>

<form name="first" method="POST">
    <input type="text" name="int1" value="<?= (int)$_POST['int1']?>">
    <select name="operation" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="int2" value="<?= (int)$_POST['int2']?>">
    <input type="submit" value="=">
</form>
<form name="second" method="POST" id="ck-button">
    <input type="text" name="int1" value="<?= (int)$_POST['int1']?>">

    <div class="button" style="display: inline-block">
        <label>
            <input type="radio" name="operation" value="+"><span>+</span>
        </label><label>
            <input type="radio" name="operation" value="-"><span>-</span>
        </label><label>
            <input type="radio" name="operation" value="*"><span>*</span>
        </label><label>
            <input type="radio" name="operation" value="/"><span>/</span>
        </label>
    </div>

    <input type="text" name="int2" value="<?= (int)$_POST['int2']?>">
    <input type="submit" value="=">
</form>
<br>
<br>
<br>



<?php

$a = (int)$_POST['int1'];
$b = (int)$_POST['int2'];
$op = $_POST['operation'];


switch ($op){
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        if ($a == 0){
            echo 0;
            break;
        }elseif ($b == 0){
            echo '&infin;';
            break;
        }
        echo $a / $b;
        break;
}
//echo $_POST['int1'] . $_POST['operation'] . $_POST['int2'];
//print_r($_POST);

?>
</body>
</html>