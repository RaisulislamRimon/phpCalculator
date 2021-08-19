<?php 
	$number1 = $_REQUEST['number1'];
	$number2 = $_REQUEST['number2'];

	if (isset($_REQUEST['button1'])) {
		$result = $number1 + $number2;
	} else if (isset($_REQUEST['button2'])) {
		$result = $number1 - $number2;
	} else if (isset($_REQUEST['button3'])) {
		$result = $number1 * $number2;
	} else if (isset($_REQUEST['button4'])) {
		if ($_REQUEST['number1'] == 0) {
			//$result = "0(Zero) can not be divided by something/a value.\nYou need to think about this.";
			$result = "No way , 0(Zero) can not be divided by something/a value.You need to think about this.";
		}else {
			$result = $number1 / $number2;
		}
	}

	header("location: phpCalculator.php?result=$result");
?>