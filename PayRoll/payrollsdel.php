<?php
$username = "root";
$password = "";
$servername = "localhost";
$dbname = "payroll";
$con = mysqli_connect('localhost','root');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "DELETE  FROM payrolls WHERE salary_id='$_GET[salary_id]'";

if (mysqli_query($conn, $sql)) {
 include 'payrolls.php';
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
?>