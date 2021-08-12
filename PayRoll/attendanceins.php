<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="payroll";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
    $EMP_ID = $_POST['EMP_ID'];
    $EMP_NAME = $_POST['EMP_NAME'];
    $DATE = $_POST['DATE'];
    $TIME = $_POST['TIME'];
   
     
	 $sql_query = "INSERT INTO attendance (emp_id,emp_name,date,time)
	 VALUES ('$EMP_ID','$EMP_NAME','$DATE','$TIME')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		include 'attendance.php';

	 } 
	 else
     {
		echo "Error: " . $sql_query . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
	

?>