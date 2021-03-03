<?php

$n = 9;

for ( $i = 1; $i <= $n; $i++ ) {
	for ($j=1; $j <= $n; $j++) { 
		if ($i == $j || $i+$j <= 9 && $i < $j || $i+$j == 10 || $i+$j >= 11 && $i > $j) {
			echo "+ ";
		} else {
			echo "- ";
		}
	}
	echo "\n";
}
