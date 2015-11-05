<?php

function add($a, $b)
{
    return $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
	return $a - $b . PHP_EOL;
    // Add code here
}

function multiply($a, $b)
{
	return $a * $b . PHP_EOL;
    // Add code here
}

function divide($a, $b)
{
	return $a / $b . PHP_EOL;
    // Add code here
}

function modulus($a, $b)
{
	return $a % $b . PHP_EOL;
}

echo add(9, 3);
echo subtract(9, 3);
echo multiply(9, 3);
echo divide(9, 3);
echo modulus(9, 3);
// Add code to test your functions here
