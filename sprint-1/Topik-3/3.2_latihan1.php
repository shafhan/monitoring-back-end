
<?php 

for ( $n = 9; $n > 0; $n-- ) {
	for ( $j = 9; $j > 0; $j-- ){
		if($j >=  $n){
			echo "+ ";
		} else {
			echo "- ";
		}
	}
	echo "\n";
}
