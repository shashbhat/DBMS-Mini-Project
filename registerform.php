<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'tours';
   
   $conn = mysqli_connect("$dbhost","$dbuser","$dbpass","$dbname");
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }
if(isset($_GET['name'])&&isset($_GET['uname'])&&isset($_GET['email'])&&isset($_GET['password']))
{
	
    $Name = $_GET["name"];
    $uName = $_GET["uname"];
    $uEmail = $_GET["email"];
    $uPass = $_GET["password"];
    
     mysqli_select_db($conn,$dbname);
    $sql = "INSERT INTO register values('$Name','$uName','$uEmail','$uPass')";
    
     $retval = mysqli_query($conn, $sql );
    if($retval){
        header('location:index.php');
    }else{
        echo "registration failed :-(";
    }
    
    
}else{
    echo "PLEASE GO BACK AND ENTER ALL CREDENTIALS";
}
    

?>



