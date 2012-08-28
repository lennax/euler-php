<?

//stolen from #5
$primes = array(0=>2);
function isPrime() {
	global $primes;
	$count = 1;
	for($x=3; $count <= 10001; $x+=2) {
		$isPrime = 1;
		foreach($primes as $prime) {
			if($x%$prime == 0) {
				$isPrime = 0;
				break;
			}
		}
		if($isPrime) { 
			$primes[]=$x;
			$count++;
		}
	}
	if ($isPrime) return TRUE;
	else return FALSE; 
}
isPrime();
echo $primes[10000];
?>