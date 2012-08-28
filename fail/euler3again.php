<?

function factor($arg) {
	for($x=2; $x<$arg; $x++) {
		if($arg%$x == 0) {
			echo $arg.",".$x."\n";
			$quotient = $arg/$x;
			if($quotient > 1) {
				echo "GO AGAIN\n";
				factor($quotient);
			}
		}
	}
}

factor(1785);
?>