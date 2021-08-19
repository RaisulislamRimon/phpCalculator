<!DOCTYPE html>
<html>

<head>
    <title>php</title>
</head>

<body>
    <h1 style="text-align: center;">PHP Calculator</h1>
    <div style="text-align: center; ">
        <form method="post" style="display: inline; ">
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
        if (isset ($_REQUEST['button1']) or isset ($_REQUEST['button2']) or isset ($_REQUEST['button3']) or isset($_REQUEST['button4'])) {
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
            echo $result;
        }
	 ?>
    </div>
</body>

</html>
