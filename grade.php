
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo"connected successfully";
}
?>

<?php
if(isset($_POST['submit']));
{
  $name=$_POST['name'];
  $grade=$_POST['grade'];
  $r="INSERT INTO grade(name,grade)VALUES('$name','$grade')";
  $result=mysqli_query($conn,$r);
if ($result){
echo "new record added";
}
else{
echo mysqli_error($conn);
}
}
?>

<?php
$conn=mysqli_connect("localhost","root","","php")or die("unable to connect:");
$query="select*from grade";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
echo $row['name'];
echo " ".$row['grade'];
echo "<br>";
}
?>