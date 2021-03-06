<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme The Band</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%); /* make all photos black and white */ 
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">PAYROLL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="employee.php">EMPLOYEE</a></li>
      <li><a href="attendance.php">ATTENDANCE</a></li>
      <li><a href="salary.php">SALARY</a></li>
      <li><a href="payrolls.php">PAYROLLS</a></li>
      <li><a href="deduction.php">DEDUCTION</a></li>
      
          
        <li><a href="index.html">LOGOUT</a></li>
       
</nav>
<br>
<br>
<br>
<br>
<div class="col-sm-8 text-left"> 
      <table  id="tabledata" class=" table table-striped table-hover table-bordered">
        <form method="POST" >
        
        <tr class="bg-dark text-white text-center">
        

       
        <tr>
          <th>EMP_ID </th>
          <th>EMP_NAME</th>
          <th>DATE</th>
          <th>TIME</th>
          <th> Delete </th>
          <th>EDIT</th>
          
        </tr>
        <?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "payroll";
$conn = mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn) {
    echo "connection failed";
    exit();
}

$result = mysqli_query($conn,"SELECT * FROM attendance");


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['emp_id'] . "</td>";
echo "<td>" . $row['emp_name'] . "</td>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['time'] . "</td>";
echo "<td><a href='attendancedel.php?emp_id=$row[emp_id]'>Delete</td>";
  
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>
 
 </table>  
 <a href="attendance.php" class="previous">&laquo; BACK</a>  
 <button class="bt">  <a href="attendanceins.html" style="color:black"> INSERT </a> </button>
 </div>
 </div>