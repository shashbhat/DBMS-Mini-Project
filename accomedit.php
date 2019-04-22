<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'tours';
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
  $Image=$_POST['Image'];
$Name=$_POST['Name'];
$Price=$_POST['Price'];
$Location=$_POST['Location'];
$Id=$_POST['Id'];
 

   $sql = "UPDATE accom SET Image='$Image',Name='$Name',Price='$Price',Location='$Location' WHERE Id='$Id'";
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql );

   
if($retval) {
         header("location: accom.php");
      }else {
        echo "Update failed!";
        die(' ' . mysqli_error());
      }
   mysqli_close($conn);
?>

