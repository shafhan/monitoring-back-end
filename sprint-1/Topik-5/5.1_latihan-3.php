<?php 


$sebelum = [2, 3, 4, 5, 6, 7, 8, 9];

function hoho($array):void{
    foreach($array as $arr){
        echo $arr *3 ." ";
    }
	echo "\n";
}
hoho($sebelum);
