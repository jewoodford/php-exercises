<?php
for ($i = 1;$i <= 100;$i++) {
	if ($i % 2 == 1) {
		continue;
	}
	echo $i . PHP_EOL;
}


for ($j = 1;$j <= 100;$j++) {
	if ($j == 11) {
		break;
	}
	echo $j . PHP_EOL;
}
?>