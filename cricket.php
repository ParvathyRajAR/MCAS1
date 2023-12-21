<?php

$cars = array("YADAV","GILL", "ROHIT", "KOHLI","SANJU","JADEJA","SURYA","SHAAMI","HARDHIK","ASWIN","RAHUL");
?>
<html>
<head><title>cricket team</title></head>
<body><center><hr>
<h2><u>INDIAN CRICKET TEAM</h2>
<hr>
<table border="3">
<tr><th>SL N0</th><th>NAME</th><tr>
<?php
for($i=1;$i<12;$i++)
   {

      echo"<tr><td>" .$i ."</td>";
     echo"<td>" .$cars[$i-1] ."</td></tr>";

   }
?>
</table>
</body>
</html>