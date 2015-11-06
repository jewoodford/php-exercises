<?php
function validate($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return true;
	} else {
		return false;
	}
}

function add($a, $b)
{	
	if (validate($a, $b)) {
		return $a + $b;
	} else {
		return 'ERROR: Bothe arguments must be numeric ' . $a . ' ' . $b . PHP_EOL;
	}
}

function subtract($a, $b)
{
	if (validate($a, $b)) {
		return $a - $b;
	} else {
		return 'ERROR: Bothe arguments must be numeric ' . $a . ' ' . $b . PHP_EOL;
	}
}

function multiply($a, $b)
{
	if (validate($a, $b)) {
		return $a * $b;
	} else {
		return 'ERROR: Bothe arguments must be numeric ' . $a . ' ' . $b . PHP_EOL;
	}
}

function divide($a, $b)
{
	if ($b == 0) {
		return "ERROR: You are trying to destroy us all! " . $a . ' ' . $b . PHP_EOL;
	}
	if (validate($a, $b)) {
		return $a / $b;
	} else {
		return 'ERROR: Bothe arguments must be numeric ' . $a . ' ' . $b . PHP_EOL;
	}
}

function modulus($a, $b)
{
	if (validate($a, $b)) {
		return $a % $b;
	} else {
		return 'ERROR: Bothe arguments must be numeric ' . $a . ' ' . $b . PHP_EOL;
	}
}

echo add(9, 3) . PHP_EOL;
echo subtract(9, 3) . PHP_EOL;
echo multiply(9, 3) . PHP_EOL;
echo divide(9, 0) . PHP_EOL;
echo modulus(9, 3) . PHP_EOL;
// Add code to test your functions here
