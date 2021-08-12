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
    $SALARY_ID = $_POST['SALARY_ID'];
    $REFERENCE_NO = $_POST['REFERENCE_NO'];
    $DATE_FROM = $_POST['DATE_FROM'];
    $DATE_TO = $_POST['DATE_TO'];
    $STATUS = $_POST['STATUS'];
   
     
	 $sql_query = "INSERT INTO payrolls (salary_id,reference_no,date_from,date_to,statuss)
	 VALUES ('$SALARY_ID','$REFERENCE_NO','$DATE_FROM','$DATE_TO','$STATUS')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		include 'payrolls.php';

	 } 
	 else
     {
		echo "Error: " . $sql_query . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
	

?>