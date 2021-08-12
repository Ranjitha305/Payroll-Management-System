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
    $SALARY_ID = $_POST['SALARY_ID'];
    $SALARY_RATE = $_POST['SALARY_RATE'];
   
     
	 $sql_query = "INSERT INTO salary (emp_id,salary_id,salary_rate)
	 VALUES ('$EMP_ID','$SALARY_ID','$SALARY_RATE')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		include 'salary.php';

	 } 
	 else
     {
		echo "Error: " . $sql_query . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
	

?>