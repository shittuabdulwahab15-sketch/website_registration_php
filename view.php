<!DOCTYPE html>
<html>
<head>
<title>View Children Information </title>
 <link rel="icon" href="pic.jpg" type="image/icon type">
 
</head>
<style>
body {background-color: powderblue;}
</style>
<body>

<a href="parent.php">parent Form </a></li>
	<a href="children.php">children Form </a></li>
<center><h1>CHILDREN DETAILS</h1></center>
   <center>
 <div class="panel-body">
 <div class="table-responsive table-bordered">
   <table class="table">
      <thead>
	  
     <tr>
 <th>#</th>
 <th>First_Name </th>
 <th>Last_Name </th>
 <th>Age</th>
 <th>Address </th>
 <th>Registration_Date</th>
 <th>Destination</th>
 <th>Action</th>
 </tr>
 </thead>
 
<tbody>

<?php
include 'connect.php';
$sql=mysqli_query($db_con,"select * from reg");
$cnt=1;
while($row=mysqli_fetch_array($sql))
{
?>


                                        <tr>
                                            <td><?php echo $cnt;?></td>
                                            <td><?php echo htmlentities($row['fname']);?></td>
											 <td><?php echo htmlentities($row['lname']);?></td>
											 <td><?php echo htmlentities($row['age']);?></td>
                                            <td><?php echo htmlentities($row['addr']);?></td>
                                            <td><?php echo htmlentities($row['date']);?></td>
											<td><?php echo htmlentities($row['dest']);?></td>
                                           <td>
                    
                    <a href="editchildren.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                                            <td>
                                            
                                        </tr>
<?php 
$cnt++;
} ?>

                                        
                                    </tbody>
                                </table>
								</center>
								
                            </div>
                        </div>
                    </div>
                     <!--  End  Bordered Table  -->
                </div>
            </div>





        </div>
    </div>
   
   
</body>
</html>

