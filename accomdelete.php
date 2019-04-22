<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'tours';
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
    $Id = $_GET['Id'];

   
    $sql = "DELETE FROM accom where Id ='$Id'";
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql );
   
if($retval) {
         header("location: accom.php");
      }else {
        echo "Deletion failed!";
      }
   mysqli_close($conn);
?>
