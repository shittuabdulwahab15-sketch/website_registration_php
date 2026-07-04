<?php
include('connect.php');

	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
    $age=$_POST['age'];
	$addr=$_POST['addr'];
	$date=$_POST['date'];
    $dest=$_POST['dest'];
    

if (isset($_POST["create"])) {
    $fname = mysqli_real_escape_string($db_con, $_POST["fname"]);
	 $lname = mysqli_real_escape_string($db_con, $_POST["lname"]);
	 $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $addr = mysqli_real_escape_string($db_con, $_POST["addr"]);
   $date = mysqli_real_escape_string($db_con, $_POST["date"]);
	$dest = mysqli_real_escape_string($db_con, $_POST["dest"]);
    $sqlInsert = "INSERT INTO reg(fname , lname, age , addr , date, dest) VALUES ('$fname','$lname','$age','$addr','$date', '$dest')";
    if(mysqli_query($db_con,$sqlInsert)){
        session_start();
        $_SESSION["create"] = "Clien Added Successfully!";
        header("Location:viewcustomer.php");
    }else{
        die("Something went wrong");
    }
}


    


?>