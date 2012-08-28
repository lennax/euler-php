<?

//n_0
$prev = 0;
//n_1
$current = 1;

$total = 0;

for($k=0; $k < 35; $k++) {
	$fib = $prev + $current;
	$prev = $current;
	$current = $fib;
	
	if($fib >= 4000000) break;
	
	if($fib%2 == 0) {
		$total = $total+$fib;
	}
}

echo $total;

?>