<?php
session_start(); //to display message
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbs";

$conn = new mysqli($server, $username, $password, $dbname);

 if(isset($_POST['delete'])){
   $STUDENTID =$_POST['ID'];
   $STUDENTID =$_POST['STUDENTID'];

   $query ="DELETE FROM studattendance where ID ='$STUDENTID'";
   $query_run =mysqli_query($connection, $query);
   if($query_run){

     echo '<script> alert("DATA DELETED"); </script>';
     header("location:attendanceRecord.php");
   }
   else{
     echo '<script> alert("DATA NOT DELETED"); </script>';
   }
 }

 ?>
