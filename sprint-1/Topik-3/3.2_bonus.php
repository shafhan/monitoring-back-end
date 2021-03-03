<?php

$n = 9;
$a = 1;

for ($i=1; $i <= $n; $i++) { 
	for ($j=1; $j <= $n; $j++) { 
		if ($i == 1 || $i == 9 || $i == 5 || $j == 1 && $i >1 && $i < 5 || $j == 9 && $i >5 && $i < 9) {
			echo "+ ";
		} else {
			echo "- ";
		}
	}
	echo "\n";
}