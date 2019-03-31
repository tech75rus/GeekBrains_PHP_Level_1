<?php 

/*============== Первое задание ==============*/
echo 'Первое задание <br>';
$a = 13;
$b = -71;

if($a >= 0 && $b >= 0){
	if($a > $b){
		echo $a - $b;
	}
	if($a < $b){
		echo $b - $a;
	}
}elseif ($a < 0 && $b < 0) {
	echo $a * $b;
	
}else{
	echo $a + $b;

}


/*============== Второе задание ==============*/
echo '<hr>';
echo 'Второе задание <br>';
$a = 7;

switch ($a) {
	case 0:
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
	case 11:
	case 12:
	case 13:
	case 14:
	case 15:
		echo $a;
		break;
	default:
		echo 'Не верно веденно число';
		break;
}


/*============== Задание третье ==============*/
echo '<hr>';
echo 'Третье задание <br>';

function sum($a, $b){
	return $a + $b;
}

function subtraction($a, $b){
	return $a - $b;
}

function multiplication($a, $b){
	return $a * $b;
}

function division($a, $b){
	return $a / $b;
}

echo division(4,4);


/*============== Задание четвертое ==============*/
echo '<hr>';
echo 'Четвертое задание <br>';

function mathOperation($arg1, $arg2, $operation){
	
	switch($operation){
		case '+':
			echo sum($arg1, $arg2);
			break;
		case '-':
			echo subtraction($arg1, $arg2);
			break;
		case '*':
			echo multiplication($arg1, $arg2);
			break;
		case '/':
			echo division($arg1, $arg2);
			break;	
	}

}

mathOperation(9, 3, '/');


/*============== Задание пятое ==============*/
?>
<hr>
<a href="layout/index.php">Задание пятое</a>


<?php
/*============== Задание шестое ==============*/
echo '<hr>';
echo 'Шестое задание <br>';

function power($val, $pow){
	return $val * one($val, $pow);
}

function one($val, $pow){
	if($pow == 1 || $pow == 0){
		return 1;
	}
	return $val * one($val, $pow -1);
}


echo power(2, 10);


/*============== Задание седьмое ==============*/
echo '<hr>';
echo 'Седьмое задание <br>';

echo timeOut();

function timeOut(){

	$times = '';
	
	/* проверка часов */
	if(date('H') == 1 || date('H') == 21){
		$times = date('H') . ' час ';
	}elseif (date('H') == 2 || date('H') == 3 || date('H') == 4
			|| date('H') == 22 || date('H') == 23 || date('H') == 24) 
	{
		$times = date('H') . ' часа ';
	}else{
		$times = date('H') . ' часов ';
	}

	/* Проверка минут */
	if(date('i') == 1 || date('i') == 21 || date('i') == 31 || date('i') == 41 || date('i') == 51){
		$times .= date('i') . ' минута ';
	}elseif (date('i') == 2 || date('i') == 3 || date('i') == 4
			|| date('i') == 22 || date('i') == 23 || date('i') == 24
			|| date('i') == 32 || date('i') == 33 || date('i') == 34
			|| date('i') == 42 || date('i') == 43 || date('i') == 44
			|| date('i') == 52 || date('i') == 53 || date('i') == 54) {
		$times .= date('i') . ' минуты ';
	}else{
		$times .= date('i') . ' минут ';
	}

	/* Проверка секунд */
	if(date('s') == 1 || date('s') == 21 || date('s') == 31 || date('s') == 41 || date('s') == 51){
		$times .= date('s') . ' секунда';
	}elseif (date('s') == 2 || date('s') == 3 || date('i') == 4
			|| date('s') == 22 || date('s') == 23 || date('s') == 24
			|| date('s') == 32 || date('s') == 33 || date('s') == 34
			|| date('s') == 42 || date('s') == 43 || date('s') == 44
			|| date('s') == 52 || date('s') == 53 || date('s') == 54) {
		$times .= date('s') . ' секунды';
	}else{
		$times .= date('s') . ' секунд';
	}

	return $times;
}


?>


<!-- 1 час --
2 часа--
3 часа
4 часа
5 часов--
6 часов
7 часов
8 часов
9 часов
10 часов
11 часов
/--/
20 часов
21 час--
22 часа--
23 часа
24 часа


0 минут
1 минута
2 минуты
3 минуты
4 минуты
5 минут
6 минут
10 минут
20 минут
21 минута
22 минуты
23 минуты
24 минуты
25 минут
25 минут
26 минут
27 минут
28 минут
29 минут
30 минут
31 минута
32 минуты
33 минуты
34 минуты
35 минут
36 минут
37 минут
38 минут
39 минут
40 минут
41 минута
42 минуты
43 минуты
44 минуты
45 минут
46 минут
47 минут
48 минут
49 минут
50 минут
51 минута
52 минуты
53 минуты
54 минуты
55 минут
56 минут
57 минут
58 минут 
59 минут 


0 секунд
1 секунда
2 секунды
3 секунды
4 секунды
5 секунд
6 секунд
7 секунд
8 секунд
9 секунд
10 секунд
11 секунд
12 секунд
13 секунд
14 секунд
15 секунд
16 секунд
17 секунд
18 секунд
19 секунд
20 секунд
21 секунда
22 секунды
23 секунды
24 секунды
25 секунд
26 секунд
27 секунд
28 секунд
29 секунд
30 секунд
31 секунда
32 секунды
33 секунды
34 секунды
35 секунд

-->