<?php
function validate($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return true;
	} else {
		return false;
	}
}

function errorMessage($a, $b) {
	if (validate($a, $b)) {
		return true;
	} else {
		return 'ERROR: Both arguments must be numeric ' . $a . ' ' . $b;
	}
}

function add($a, $b)
{	
	$isValid = errorMessage($a, $b);
	if ($isValid === true) {
		return $a + $b;
	} else {
		return $isValid;
	}
}

function subtract($a, $b)
{
	$isValid = errorMessage($a, $b);
	if (validate($a, $b)) {
		return $a - $b;
	} else {
		return $isValid;
	}
}

function multiply($a, $b)
{
	$isValid = errorMessage($a, $b);
	if (validate($a, $b)) {
		return $a * $b;
	} else {
		return $isValid;
	}
}

function divide($a, $b)
{
	if ($b == 0) {
		return "ERROR: You are trying to destroy us all! " . $a . ' ' . $b;
	}
	$isValid = errorMessage($a, $b);
	if (validate($a, $b)) {
		return $a / $b;
	} else {
		return $isValid;
	}
}

function modulus($a, $b)
{
	$isValid = errorMessage($a, $b);
	if (validate($a, $b)) {
		return $a % $b;
	} else {
		return $isValid;
	}
}

echo add(9, "notNumeric") . PHP_EOL;
echo subtract(9, 3) . PHP_EOL;
echo multiply(9, 3) . PHP_EOL;
echo divide(9, 0) . PHP_EOL;
echo modulus(9, 3) . PHP_EOL;
// Add code to test your functions here
