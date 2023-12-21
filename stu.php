<html>
<head>
<title>STUDENTS</title>
<body>
<center><h1><hr>
STUDENTS LIST<l
</center></h1>
<hr>
<?php
 $student=array("PARVATHY","ARUN","BUCKY","SUDHU","Raju");
  print_r($student);
  echo "<br><br><br>IN ASCENDIND ORDER:";
  asort($student);
 print_r($student);
 echo "<br><br>IN DECENTING ORDER:";
 rsort($student);
 print_r($student);
 
?>
</html>