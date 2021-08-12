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
    $DEDU_ID = $_POST['DEDU_ID'];
    $PHI_HEALTH= $_POST['PHI_HEALTH'];
    $LOANS = $_POST['LOANS'];
    $LEAVE_RATE = $_POST['LEAVE_RATE'];
   
     
	 $sql_query = "INSERT INTO deduction (emp_id,dedu_id,phi_health,loans,leave_rate)
	 VALUES ('$EMP_ID','$DEDU_ID','$PHI_HEALTH','$LOANS','$LEAVE_RATE')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		include 'deduction.php';

	 } 
	 else
     {
		echo "Error: " . $sql_query . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
	

?>