<?php

$n = 9;
$a = 1;

for ($i=0; $i < $n; $i++) { 
	for ($j=0; $j < $n; $j++) { 
		if ($i == $j) {
			echo "$a ";
			$a+=2;
		} else {
			echo "- ";
		}
	}
	echo "\n";
}