<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <h1 style="text-align: center;">PHP Calculator</h1>

    <form action="phpCalculator_main.php" method="get" style=" display: inline; ">
        <input type="number" name="number1">
        <input type="submit" value="+" name="button1">
        <input type="submit" value="-" name="button2">
        <input type="submit" value="*" name="button3">
        <input type="submit" value="/" name="button4">
        <input type="number" name="number2">
        <!-- <button name="submit">=</button> -->

    </form>
    <button>=</button>
    <!-- <button><?php echo $result ; ?></button> -->
    <?php 
		if (isset($_REQUEST['result'])) {
			$result = $_REQUEST['result'];
		}
		echo $result;
	 ?>
</body>

</html>
