<?
//The prime factors of 13195 are 5, 7, 13 and 29.

//What is the largest prime factor of the number 600851475143?

$primes = array(0=>2);
$factors = array();
$lastFactor = "";
/*
function isEven($arg) {
	global $factors;
	if($arg%2 == 0) {
		$factors[] = 2;
		echo $arg."(beg. isEven)\n";
		$arg = $arg/2;
		echo $arg."(end isEven)\n";
		if($arg > 1) { isEven($arg); }
	}
}
*/
function factor($arg) {
	global $factors, $primes, $lastFactor;
	echo $arg."(beg. fun.)\n";
	$isPrime = TRUE;
	$isFactor = FALSE;
//	isEven($arg);
	for($x=3; $x <= $arg; $x+=2) {
		echo "x is ".$x."\n";
		foreach($primes as $prime) {
			if($x%$prime == 0) { 
				$isPrime = FALSE;
				break; 
			}
		}
		if($isPrime) {
			$primes[] = $x;
			if($arg%$x == 0) {
				$isFactor = TRUE;
				$factors[] = $x;
				$newFactor = $x;
				$arg = $arg/$newFactor;
				echo $arg."(isPrime)\n";
					$lastFactor = $arg; 
				//RECURSE!
				if($arg > 1) { 
					factor($arg);
				}
			}
		}
	}
}

factor(1875);

print_r($primes);	
print_r($factors);
//echo $lastFactor."\n";
//factor(600851475143);
?>