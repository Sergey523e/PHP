<?php

//С помощью двух вложенных циклов выведите на экран следующую строку:
//11 12 13 21 22 23 31 32 33

	for ($i = 11; $i <= 31; $i+=10) {
	   echo $i." ";
		for ($j = 1; $j <= 2; $j++) {
			echo $i + $j." ";
		}
	}

?>