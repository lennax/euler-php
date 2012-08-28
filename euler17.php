<?
$name = array(
	1=>"one",2=>"two",3=>"three",4=>"four",5=>"five",6=>"six",7=>"seven",8=>"eight",9=>"nine",
	10=>"ten",11=>"eleven",12=>"twelve",13=>"thirteen",14=>"fourteen",15=>"fifteen",16=>"sixteen",17=>"seventeen",18=>"eighteen",19=>"nineteen",
	20=>"twenty",
	30=>"thirty",
	40=>"forty",
	50=>"fifty",
	60=>"sixty",
	70=>"seventy",
	80=>"eighty",
	90=>"ninety",
);
$total="";
for($x=1;$x<=1000;$x++) {
	if($x >= 1 && $x <= 20) {
		$word = $name[$x];
	}
	elseif($x >= 21 && $x <= 99) {
		$str = (string) $x;
		$tens = $str[0]*10;
		$ones = $str[1];
		$word = $name[$tens].$name[$ones];
	}
	elseif($x>=100 && $x<=999) {
		$str = (string) $x;
		$teens = $str[1].$str[2];
		$hundreds = $str[0];
		$tens = $str[1]*10;
		$ones = $str[2];
		if($teens == 00) {
			$word = $name[$hundreds]."hundred";
		}
		elseif($teens>=1 && $teens<=19) {
			if($teens>=1 && $teens<=9) {
				$teens = sprintf("%1d",$teens);
			}
			$word = $name[$hundreds]."hundredand".$name[$teens];
		}
		elseif($teens>=20 && $teens<=99) {
			$word = $name[$hundreds]."hundredand".$name[$tens].$name[$ones];
		}
	}
	elseif($x=1000) {
		$word = "onethousand";
	}
	$value = strlen($word);
	$total += $value;
}
echo $total."\n";
?>