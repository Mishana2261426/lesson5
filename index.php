<?php

$array = [];

for ($i=0; $i < 10; $i++) { 
	$sub_array = [];
	for ($j=0; $j < 10; $j++) {
		$sub_array[] = mt_rand(0,1000);
	}
	$array[] = $sub_array;
}

for ($i=0; $i < count($array); $i++) { 
	echo implode(',', $array[$i]);
	/*for ($j=0; $j < count($array[$i]); $j++) { 
		echo $array[$i][$j] . ',';
	}*/
	echo "\n";
}


/*echo __DIR__;

echo "\n";

echo __FILE__;

echo "\n";

const MY_CONST = 100;

$array = [];
for ($i=0; $i < 100; $i++) { 
	$array[] = mt_rand(0, 1000);
}

for ($i=0; $i < 100; $i++) { 
	if ($array[$i] > 500)
		continue;
	echo $array[$i] . "\n";
}*/

/*$operand1 = $argv[1];
$operation = $argv[2];
$operand2 = $argv[3];

switch($operation) {
	case "+" : {
		$result = $operand1 + $operand2;
		break;
	}

	case "-" : {
		$result = $operand1 - $operand2;
		break;
	}

	case "x" : {
		$result = $operand1 * $operand2;
		break;
	}

	case "/" : {
		if ($operand2 == 0) {
			echo "На ноль делить нельзя!\n";
			die();
		}
		$result = $operand1 / $operand2;
		break;
	}

	default : {
		echo "Неизвестный оператор!\n";
		die();
	}
}

echo "Result = $result\n";*/

/*file_put_contents("text.txt", "Lesson 5.1");

echo file_get_contents("text.txt");

echo "\n";

$a = 10;

$b = 0;

try {
	if ($b == 0) {
		throw new Exception();
	}
}
catch (Exception $e) {
	echo "На ноль делить нельзя!";
} */

