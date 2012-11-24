<!--
Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:

1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...

By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
-->

<?php
	
		$fibo = 0;
		$nacci = 1;
		$fibonacci;
		$answer = 0;
		
		while($fibo<4000000){
			$fibonacci = $fibo + $nacci;
			$fibo = $nacci;
			$nacci = $fibonacci;
			
				if ($fibonacci%2==0){
					$answer += $fibonacci;
				}
		}
		echo '<br> The sum of the even-valued terms is: '.$answer;
?>