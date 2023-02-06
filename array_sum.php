	//Найдите сумму всех элементов приведенного массива.
$arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];
 $sum='0';
	foreach ($arr as $elem) {
	   foreach ($elem as $elemi) {
	        foreach ($elemi as $elemii) {
$sum+=$elemii;
	}   }} 
  echo '='.$sum; 
