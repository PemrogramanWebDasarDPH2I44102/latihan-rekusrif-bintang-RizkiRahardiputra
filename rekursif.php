<?php
echo 'Soal 1 : <br> <br>';

$nilai1 = 5;

function Piramida($x = 1){
global $nilai1;
echo "*";
 $x++;
if ($x <= $nilai1) {
	Piramida($x);

}
else{
	echo "<br>";
	$nilai1--;
	if($nilai1 != 0){
		Piramida();
	}


}


}
Piramida();

echo "<br>";

//////////////////////////////////////////////////

echo 'Soal 2 : <br> <br>';

$nilai2 = 1;

function Piramida2 ($y = 1){
	global $nilai2;
	echo "$y";
	$y++;

	if ($y <= $nilai2) {
		
		# code...

		Piramida2($y);
	}

	else{
		echo "<br>";
		$nilai2++;
		if ($nilai2 <= 5) {
			# code...
			Piramida2();
		}

	}
}

Piramida2();





?>
