<?
$start=microtime();
for($a=1; $a<999; $a++) {
	for($b=1; $b<998; $b++) {
		if($a<$b) {
			$c2 = pow($a,2)+pow($b,2);
			$c = sqrt($c2);
			$cRound = floor($c);
			if($c == $cRound) {
				if($a + $b + $c == 1000) {
					echo $a.",".$b.",".$c."\n";
					$product = $a*$b*$c;
				}
			}
		}
	}
}
echo $product."\n";
$end=microtime();
echo ($end-$start)." elapsed\n";
//0.104913 (12% of original runtime)
?>