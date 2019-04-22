<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'tours';
   
   $conn = mysqli_connect('localhost','root','','tours');
  if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

    $uName = $_GET["username"];
    $uPass = $_GET["password"];
    $sql = "SELECT * FROM register where username = '$uName' and password = '$uPass'";


    
   mysqli_select_db($conn,$dbname);
   $retval = mysqli_query($conn, $sql);
   $count = mysqli_num_rows($retval);

if($count == 1) {
    session_start();
         $_SESSION['loggedin'] = true;
         header("location:index.php");
      }else {
        echo "$count";
        #include("log.php");
        #echo "<script>$('#err').html('Incorrect Login details');</script>";
      }
   mysqli_close($conn);
?>

