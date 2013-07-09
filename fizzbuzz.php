
<?php

for ($n = 1; $n <= 10; $n++) {

	if ($n % 3 == 0 && $n % 2 == 0) {
	echo "The number is " . $n . " fizz buzz.<br>" ;
	}


	else if ($n % 2 == 0) {
		echo "The number is " . $n . " fizz.<br>" ;
	}

	else if ($n % 3 == 0) {
		echo "The number is " . $n . " buzz.<br>" ;
	}


	else {
			echo "The number is " . $n . ".<br>";
	}

}


?>
