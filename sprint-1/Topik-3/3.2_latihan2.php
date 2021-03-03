<?php 

for ( $n = 9; $n > 0; $n-- ) {
	for ( $j = 1; $j < 10; $j++ ){
		if($n >  $j){
			echo "- ";
		} else {
			echo "+ ";
		}
	}
	echo "\n";
}
