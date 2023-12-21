<html>
<html lang="en">
<head>
    <title>sum of digit in php</title>
</head>
<body>
    <form>
    <label for="number">Enter the number:</label> <input type="number" name="SumDigit">
    <input type="submit" value="submit" name="click"></br></br>
    </form>
</body>
</html> 


<?php


    $number=$_GET['SumDigit'];
    $num=$number;
    $sum=0;
    for($i=0;$i<=strlen($number);$i++,$number/=10)
    {
        $sum=$sum+$number%10;
    }
    echo"sum of digit $num is $sum";

?>