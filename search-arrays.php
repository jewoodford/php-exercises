<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function searching($needle, $haystack) 
{
	return array_search($needle, $haystack);
}
$result = searching('Amy', $names);

if ($result !== false) {
	echo $names[$result] . " is in index $result" . PHP_EOL;
}