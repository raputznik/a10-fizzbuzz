<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<?php

for ($n = 1; $n <= 10; $n++) {

	if ($n % 3 == 0 && $n % 2 == 0) {
	echo "The number is " . $n . " Fizz Buzz.<br>" ;

	}

	else if ($n % 2 == 0) {
		echo "The number is " . $n . " Fizz.<br>" ;

	}

	else if ($n % 3 == 0) {
		echo "The number is " . $n . " Buzz.<br>" ;

	}


	else {
			echo "The number is " . $n . ".<br>";

	}

}

?>
</body>
</html>



