<?php
<<<<<<< HEAD
session_start(); // To display messages
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbs";
=======
$connection = mysqli_connect("localhost", "root", "", "dbs");
>>>>>>> 34d6aaae920d2aad7b99706f0f422c009367ba5d

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

<<<<<<< HEAD
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
=======
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
>>>>>>> 34d6aaae920d2aad7b99706f0f422c009367ba5d
    }
}
?>
