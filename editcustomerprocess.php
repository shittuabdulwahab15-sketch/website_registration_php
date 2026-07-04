<?php
include('connect.php');

	$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $addr=$_POST['addr'];
	$date=$_POST['date'];
	$dest=$_POST['dest'];
	
    
if (isset($_POST["edit"])) {
    $fname = mysqli_real_escape_string($db_con, $_POST["fname"]);
    $lname = mysqli_real_escape_string($db_con, $_POST["lname"]);
    $addr = mysqli_real_escape_string($db_con, $_POST["addr"]);
	$date = mysqli_real_escape_string($db_con, $_POST["date"]);
	$dest = mysqli_real_escape_string($db_con, $_POST["dest"]);
   
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE reg SET fname = '$fname', lname = '$lname', addr = '$addr',  date = '$date',dest = '$dest' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Customer Record upatedated Successfully!";
        header("Location:viewcustomer.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>