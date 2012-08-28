<?
//stolen from #5
$start = time();
$factors = array();
$primes = array(0=>2);
function factor($arg) {
	global $primes, $factors;
	for($x=3; $x < sqrt($arg); $x+=2) {
		$isPrime = 1;
		foreach($primes as $prime) {
			if($x%$prime == 0) {
				$isPrime = 0;
				break;
			}
		}
		if($isPrime) { 
			$primes[]=$x;
			if($arg%$x == 0) {
				$factors[]=$x;
				echo $x."\n";
			}
		}
	}
	if ($isPrime) return TRUE;
	else return FALSE;
}

factor(600851475143);
print_r($primes);
print_r($factors);
$end=time();
echo ($end-$start)." elapsed\n";
?>