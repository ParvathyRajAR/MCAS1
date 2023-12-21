<html>

<head>
<title>Electricity Bill</title>
<body>
<center><h1>
Electricity Bill
</center></h1>
<hr>
<form action="" method="post" id="quiz-form">
            	<input type="number" name="units" id="units" />
            	<input type="submit" name="unit-submit" id="unit-submit" value="Submit" />
		</form>	
</head>
<?php
$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
    $units = $_POST['units'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
function calculate_bill($units) {
    $unit_cost_first = 3.50;
    $unit_cost_second = 4.00;
    $unit_cost_third = 5.20;
    $unit_cost_fourth = 6.50;

    if($units <= 50) {
        $bill = $units * 3.50;
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * 4.0);
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * 4,0);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_cost_third);
 }
 else {
        $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_cost_fourth);
 }
return number_format((float)$bill, 2, '.', '');
}
 echo '<br />' . $result_str;
?>
</body>
</html>