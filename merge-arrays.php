<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

$combined = [];

for($i = 0; $i < count($names); $i++) {
	if ($names[$i] == $compare[$i]) {
		array_push($combined, $names[$i]);
	} else if ($names[$i] !== $compare[$i]) {
		array_push($combined, $names[$i], $compare[$i]);
	}
}

print_r($combined);