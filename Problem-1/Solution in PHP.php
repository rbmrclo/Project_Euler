/* 

1.) If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

   Find the sum of all the multiples of 3 or 5 below 1000.

*/

// Solution in PHP, the simple way:

<?php
	$num=0; // Variable for the final answer
	$counter=0; // as the variable name states

        // Executes the loop as long as it hasn't reached yet the ceiling value of 1000.

	while($counter<1000){
		if(($counter%3==0)||($counter%5==0)){
			$num += $counter;
		}
		$counter++;
	}
	echo 'The sum of all multiples of 3 and 5 is: '.$num; // final answer
?>