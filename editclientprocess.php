<?php
include('connect.php');

	$fname=$_POST['name'];
    $addr=$_POST['addr'];
    $age=$_POST['age'];
	$dob=$_POST['dob'];
    $cls=$_POST['cls'];
    




if (isset($_POST["edit"])) {
    $fname = mysqli_real_escape_string($db_con, $_POST["name"]);
    $addr = mysqli_real_escape_string($db_con, $_POST["addr"]);
    $age = mysqli_real_escape_string($db_con, $_POST["age"]);
    $dob = mysqli_real_escape_string($db_con, $_POST["dob"]);
	$cls = mysqli_real_escape_string($db_con, $_POST["cls"]);
    $id = mysqli_real_escape_string($db_con, $_POST["id"]);
    $sqlUpdate = "UPDATE children SET fname = '$name', addr = '$addr', age = '$age', dob = '$dob',cls = '$cls' WHERE id='$id'";
    if(mysqli_query($db_con,$sqlUpdate)){
        session_start();
        $_SESSION["update"] = "Children Record Updated Successfully!";
        header("Location:view.php");
    }else{
        die("Something went wrong");
    }
	}

	

?>