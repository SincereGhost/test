<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
 $a = 1;
 $b = 'Text';
 $c = 2.3;
 $d = TRUE; 
 $f = NULL;
 $e = array(1 => "apple",2 => "table");
 echo $a.'<br>', $b.'<br>', $c.'<br>', $d.'<br>', $f.'<br>';
 var_dump($e);

$x = 'Меня зовут ';
$y = 'Мой возраст ';
$name = 'Дмитрий';	
$age = 21;
echo '<br>'.$x.$name."<br>".$y.$age."<br>";

unset ($age);
define('CONSTANT', 'Source IT');
echo CONSTANT;
 $age = 0;
if ($age > 59){
  echo 'Вам пора на пенсию';
}
elseif ($age >=18 && $age <=59) {
  echo 'Вам еще работать и работать';
}
elseif ($age >=1 && $age <=17) {
  echo 'Вам еще рано работать';
}
else {
  echo '<br>'.'Неизвестный возраст'.'<br>';
}


$day = 3;

switch ($day) {
    case $day >=1 && $day <=5 :
        echo 'Это рабочий день'.'<br>';
        break;
    case 6 :
    case 7 :
        echo 'Это выходной день'.'<br>';
        break;
    default:
        echo 'Неизвестный день'.'<br>';
        break;
}


$bmw = [
"name" => "bmw",
"model" => "X5",
"speed" => 120,
"doors" => 5,
"year" => 2006,
];
foreach ($bmw as $key => $value) {
	echo $key.' - '.$value.'<br>';
}
$toyota = [
"name" => 'toyota',
"model" => 'Carina',
"speed" => 130,
"doors" => 4,
"year" => 2007,	
];
foreach ($toyota as $key => $value) {
	echo $key.' - '.$value.'<br>';
}
$opel = [
"name" => 'opel',
"model" => 'Corsa',
"speed" => 140,
"doors" => 5,
"year" => 2076,
];
foreach ($opel as $key => $value) {
	echo $key.' - '.$value.'<br>';
}


for ($z = 1; $z < 50; $z++) {
	if($z % 2 != 0)
    echo '<br>'.$z.'<br>';
}

$arr = array();
for ($i=0; $i<=100; $i++){
	if($i % 2 == 0)
		$arr[] = $i;
}
}
var_damp($arr);
/*
$i = 0; 
	while ($i <= 100) {
		echo $i.'<br>'; 
		$i++;
	}
 


