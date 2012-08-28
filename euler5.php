<?
$start = time();
$factors = array();
$primes = array(0=>2);
function isPrime($arg) {
	global $primes;
	for($x=3; $x < $arg; $x+=2) {
		$isPrime = 1;
		foreach($primes as $prime) {
			if($x%$prime == 0) {
				$isPrime = 0;
				break;
			}
		}
		if($isPrime) { 
			$primes[]=$x;
		}
	}
	if ($isPrime) return TRUE;
	else return FALSE;
}


//find the LCM of numbers from 1 to $input
function LCM($arg) {
	global $primes;
	$total = 1;
	isPrime($arg);
	foreach($primes as $prime) {
		$power = floor(log($arg, $prime));
		$total = $total*pow($prime,$power);
	}
	echo $total."\n";
}

LCM(20);
//var_dump(isPrime(20));
//print_r($primes);
//echo "runtime: ".(time()-$start);

?>