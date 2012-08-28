<?
$start = time();

function isPrime($arg) {
	for($k = 2; $k <= $arg; $k++) {
		if($arg%$k == 0 && $k < $arg) {
			return false;
		}  
		elseif ($k == $arg) break;
	}
	return true;
}

function milesFactor($input) {
	for($n = 1; $n <= $input; $n += 2) {
		if($input%$n == 0 && isPrime($n)) {
			echo $n."\n";
		}			
		if($n%10 == 0) {
			echo "Elapsed: ".time()-$start;
		}
	}
}

milesFactor(600851475143);

?>