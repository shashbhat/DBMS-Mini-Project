<?php
session_start();
$servrename="localhost";
$username="root";
$password="";
$dbname="tours";
$tbl_name="accom";
$conn=mysqli_connect($servrename,$username,$password,$dbname)or die(Mysqli_error());
$select_db=mysqli_select_db($conn,$dbname)or die(mysqli_error($conn));
$sql="SELECT *FROM $tbl_name";

$result=mysqli_query($conn,$sql)or die(mysqli_error($connection));
if(isset($_POST['SUBMIT']))
{
$Image=$_POST['Image'];
$Name=$_POST['Name'];
$Price=$_POST['Price'];
$Location=$_POST['Location'];
$Id=$_POST['Id'];

$q="SELECT * FROM accom WHERE Id='$Id'";
$cq=mysqli_query($conn,$q)or die(mysqli_error($conn));
$ret=mysqli_num_rows($cq);
if($ret==true)
{
echo"<center><h2 style='color:red'>Order no. already exits</h2></center>";
}
else
{
$query="INSERT INTO accom VALUES ('$Image','$Name','$Price','$Location','$Id')";
mysqli_query($conn,$query)or die(mysqli_error($conn));
    header("location:accom.php");
}
}
Mysqli_close($conn);
?>