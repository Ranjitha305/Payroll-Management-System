<?php
$host = "localhost";
$username = "root";
$password ="";
$db_name = "payroll";
$con = mysqli_connect($host, $username, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }
    else
    {
        //echo "Success";

    }
    $username = $_POST['Admin_name'];
    $password = $_POST['pass'];
    $ret=mysqli_query($con,"SELECT * FROM admins WHERE login_id='$username' and pass='$password'");

    $num=mysqli_fetch_array($ret);
        if($num > 0)
        {
            
            include 'employee.php';
              
        }
    else
    {
        echo  "Login failed. Invalid username or password";
    }
?>