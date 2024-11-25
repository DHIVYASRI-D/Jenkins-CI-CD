<html>
<head>
    <title> Simple Calculator </title>
</head>
<body>
<?php

$num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
$num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
$op = isset($_POST['op']) ? $_POST['op'] : '';
$result = '';

if (is_numeric($num1) && is_numeric($num2)) {
    switch($op) {
        case "Add":
            $result = $num1 + $num2;
            break;
        case "Sub":
            $result = $num1 - $num2;
            break;
        case "mult":
            $result = $num1 * $num2;
            break;
        case "Div":
            if ($num2 != 0) { 
                $result = $num1 / $num2;
            } else {
                $result = 'Error: Division by zero';
            }
            break;
    }
}
?>
<form method="POST">
    First Number: <input type="number" name="num1" value="<?php echo $num1; ?>" /><br><br>
    Second Number: <input type="number" name="num2" value="<?php echo $num2; ?>" /><br><br>
    Result: <input readonly="readonly" name="result" value="<?php echo $result; ?>" /><br><br>
    <input type="submit" name="op" value="Add" />
    <input type="submit" name="op" value="Sub" />
    <input type="submit" name="op" value="mult" />
    <input type="submit" name="op" value="Div" />
</form>
</body>
</html>

