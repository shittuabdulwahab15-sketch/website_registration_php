<!DOCTYPE html>
<html>
<head>
<title>View customer Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
</head>
<style>
body {background-color: powderblue;}
</style>
<center>
<body>
    
        <form action="editcustomerprocess.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM reg WHERE id=$id";
                $result = mysqli_query($db_con,$sql);
                $row = mysqli_fetch_array($result);
                ?>
				<P> </P>
				<center><h1>EDIT CUSTOMER DETAILS</h1></center>
                     <div class="form-elemnt my-4">
			<label for="fname">First_name</label>
                <input type="text" class="form-control" name="fname" placeholder="First name:" value="<?php echo $row["fname"]; ?>">
            </div><br>
            <div class="form-elemnt my-4">
			<label for="lname">Last_name</label>
                <input type="text" class="form-control" name="lname" placeholder="last Name:" value="<?php echo $row["lname"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="addr">Address</label>
                <input type="text" class="form-control" name="addr" placeholder="address:" value="<?php echo $row["addr"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="date">Registration date</label>
                <input type="text" class="form-control" name="date" placeholder="date:" value="<?php echo $row["date"]; ?>">
            </div><br>
			<div class="form-elemnt my-4">
			<label for="dest">Destination</label>
                <input type="text" class="form-control" name="dest" placeholder="destination:" value="<?php echo $row["dest"]; ?>">
            </div><br>

			
             <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Edit Record" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>customer Record Does Not Exist</h3>";
            }
            ?>
           
        </form>
      </center>  
        
    </div>
</body>
</html>