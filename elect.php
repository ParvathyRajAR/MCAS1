<html>
<head><center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill </title>
</head>
<body>

<h2>Electricity Bill </h2>
<hr>

<form action="" method="post">

    <label for="units">Enter Consumed Units:</label>
    <input type="text" id="units" name="units" required>
    <button type="submit">SUBMIT</button>
</form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $consumedUnits = $_POST["units"];

  
    function calculateElectricityBill($units) {
        $ratePerUnit1 = 3.50; 
        $ratePerUnit2 = 4;    
        $ratePerUnit3 = 5.20; 
        $ratePerUnit4 = 6.50; 

        if ($units <= 50) {
            $billAmount = $units * $ratePerUnit1;
        } elseif ($units <= 150) {
            $billAmount = 50 * $ratePerUnit1 + ($units - 50) * $ratePerUnit2;
        } elseif ($units <= 250) {
            $billAmount = 50 * $ratePerUnit1 + 100 * $ratePerUnit2 + ($units - 150) * $ratePerUnit3;
        } else {
            $billAmount = 50 * $ratePerUnit1 + 100 * $ratePerUnit2 + 100 * $ratePerUnit3 + ($units - 250) * $ratePerUnit4;
        }

        return $billAmount;
    }

    
    $totalBill = calculateElectricityBill($consumedUnits);

    
    echo "<p>Electricity Bill for $consumedUnits units: $totalBill dollars</p>";
}
?>