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
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from login where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
   echo "<script>window.location.href = 'http://www.w3schools.com';</script>"
}
else
{
echo "invaliid credintials";
}
}
}
?>

