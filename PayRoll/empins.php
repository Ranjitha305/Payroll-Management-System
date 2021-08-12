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
    $EMP_FNAME = $_POST['EMP_FNAME'];
    $EMP_LNAME= $_POST['EMP_LNAME'];
    $EMP_DEPT = $_POST['EMP_DEPT'];
    $EMP_POS = $_POST['EMP_POS'];
   
     
	 $sql_query = "INSERT INTO employee (emp_id,emp_fname,emp_lname,emp_dept,emp_pos)
	 VALUES ('$EMP_ID','$EMP_FNAME','$EMP_LNAME','$EMP_DEPT','$EMP_POS')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		include 'employee.php';

	 } 
	 else
     {
		echo "Error: " . $sql_query . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
	

?>