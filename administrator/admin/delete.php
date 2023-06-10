<?php
session_start(); // To display messages
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbs";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['delete'])) {
    $ID = $_POST['ID'];

    $query = "DELETE FROM studattendance WHERE ID = '$ID'";
    $query_run = $conn->query($query);
    if ($query_run) {
        echo '<script>alert("DATA DELETED");</script>';
        header("location: attendanceRecord.php");
        exit;
    } else {
        echo '<script>alert("DATA NOT DELETED");</script>';
    }
}
?>
