<?php
<<<<<<< HEAD
$connection = mysqli_connect("localhost", "root", "", "dbs");
=======
session_start(); //to display message
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbs";

$conn = new mysqli($server, $username, $password, $dbname);

 if(isset($_POST['delete'])){
   $STUDENTID =$_POST['ID'];
   $STUDENTID =$_POST['STUDENTID'];
>>>>>>> ac654521561450feeec973def82a4179bed001fb

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$db = mysqli_select_db($connection, 'dbs');
if (!$db) {
    die("Database selection failed: " . mysqli_error($connection));
}

if (isset($_POST['ID'])) {
    $STUDENTID = $_POST['ID'];

    $query = "DELETE FROM studattendance WHERE ID = '$STUDENTID'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        if (mysqli_affected_rows($connection) > 0) {
            echo '<script> alert("DATA DELETED"); </script>';
            header("location: admin.php?action=attendanceRecord");
            exit; // Terminate the script after redirection
        } else {
            echo '<script> alert("No matching records found"); </script>';
        }
    } else {
        echo '<script> alert("Error: ' . mysqli_error($connection) . '"); </script>';
    }
}
?>
