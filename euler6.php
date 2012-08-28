<?
$sumOfSquares = "";
$sum = "";
for($n=1; $n<=100; $n++) {
	$square = pow($n,2);
	$sumOfSquares += $square;
	$sum += $n;
}
$squareOfSums = pow($sum,2);
$difference = $squareOfSums-$sumOfSquares;
echo $difference."\n";
?>