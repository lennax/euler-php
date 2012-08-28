<?
$palindromes = array();
for($first = 999; $first >= 100; $first--) {
	$isPalindrome = 0;
	for($second = 999; $second >= 100; $second--) {
		$product = $first*$second;
		if ($product == strrev($product)) {
			$palindromes[] = $product;
		}
	}
}
rsort($palindromes);
echo $palindromes[0];
?>