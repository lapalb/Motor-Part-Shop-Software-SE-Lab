<!doctype html>
<?
session_start();
?>
<?
if (($_POST['email'] == "test@test.com" and $_POST['pwd'] == "test")) {
    $_SESSION[name] = "NitinManoj123@gmail.com";
}
?>
<html class="no-js" lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Admin Login | MPSS 3.0</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- All Stylesheet -->
	     <link rel="stylesheet" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <style>
	    h1{
		background-color:#00a373;
		text-align:center;
		font-family:"Comic Sans MS", cursive
		font-size:24px;
		
		margin:0px;
		height:60px;
		
	   }
	   th{color:#00a373;}
	   
	   </style>
	</head>

<?
if (!((($_POST['email'] == "test@test.com" and $_POST['pwd'] == "test")) or isset($_POST['formA']) or isset($_POST['formN']) or $_SESSION[name] )) {
    echo "<h3 text-align:center>Wrong UserName or Password</h1>";
    die();
}
?>


<?php
$servername = "localhost";
$username   = "sahityak007";
$password   = "sahityak007";
$dbname     = "selab";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
	<body>
	  <h1> Motor Part Shop Software</h1>
		<form action="log.php" method="post"></h1>
			    			<input class="button" type="submit" name="formN" value="Logout" style="color:#00a373"/>
			</form>
			
			<form action="cms.php" method="post">
			    			<input class="button" type="submit" name="p" value="Add Parts"style="color:#00a373" />
			</form>	
			<form action="cms.php" method="post">
			    			<input class="button" type="submit" name="v" value="Add Vendor"style="color:#00a373" />
			</form>	
			
		    <form action="cms.php" method="post">
			    			<input type="submit" class="button-lg" name="pay" value="Sales Report "style="color:#00a373" />
			</form>	
			<form action="cms.php" method="post">
			    			<input type="submit" class="button-lg" name="formA" value="Threshold Item "style="color:#00a373" />
			</form>	
			<form action="cms.php" method="post">
			    			<input class="button" type="submit" name="formN" value="Update Inventory"style="color:#00a373" />
			</form>	
			
			
			<form action="cms.php" method="post">
			    			<input class="button" type="submit" name="thr" value="Update Threshold "style="color:#00a373" />
			</form>	
			
			
		<div class="container-fluid">
		    <? if (isset($_POST[thr])){
		    $sql="SELECT sum(q) as s , id FROM sales where date > DATE_ADD(CURDATE(), INTERVAL -7 DAY) GROUP by id";
$result = $conn->query($sql);
echo "<table class=\"table table-responsive table-bordered table-striped\" >
	<tr>
	<th>id </th>
	
	<th>new Threshold</th>
	</tr>";
 while ($row = mysqli_fetch_array($result)) {
     
      echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
             echo "<td>" . $row['s'] . "</td>";
            echo "</tr>";
            
     $sql="update part set th=$row[s] where id=$row[id]";
     #echo$sql;
     $result2 = $conn->query($sql);
 }echo "</table>";}
?>
		   
<?
if (isset($_POST[pay])) {
    $sql    = "SELECT sales.date,part.id,part.name,sales.q FROM sales INNER JOIN part on part.id=sales.id order by date ASC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table class=\"table table-responsive table-bordered table-striped\" >
	<tr>
	<th>Date</th>	<th>id </th>
	<th>Name</th>
	<th>Quantity</th>
	</tr>";
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['date'] . "</td>";
             echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['q'] . "</td>";
            
            echo "</tr>";
        }
        echo "</table>";
    }
    
}

?>
<?php


if (isset($_POST['formN'])) {
    header('Location:http://indianoilcorporate.org/update.php');
}
if (isset($_POST['p'])) {
    header('Location:http://indianoilcorporate.org/newParts.php');
}
if (isset($_POST['v'])) {
    header('Location:http://indianoilcorporate.org/newVendor.php');
}
if (isset($_POST['formA'])) {
    $c = 1;

 {
    $sql    = "SELECT part.id,part.name, part.th,part.cs,vendor.vname,vendor.vaddr FROM part INNER JOIN vendor ON vendor.pid=part.id where cs < th order by id ASC";
    
    $result = $conn->query($sql);
    echo "<table class=\"table table-responsive table-bordered table-striped\" >
								<tr>
								<th>id</th>
								<th>Name</th>
								<th>threshold</th>
								<th>Current Stock</th>
								<th>Vendor Name</th>
								<th>Vendor Address</th>
							
							</tr>";
    
    while ($row = mysqli_fetch_array($result)) {
                    echo "<td>" . $row['id'] . "</td>";
             echo "<td>" . $row['name'] . "</td>";
           
            echo "<td>" . $row['th'] . "</td>";
            echo "<td>" . $row['cs'] . "</td>";
            echo "<td>" . $row['vname'] . "</td>";
            echo "<td>" . $row['vaddr'] . "</td>";
            
								
			
        echo "</tr>";
    }
    echo "</table>";
}
}

mysqli_close($conn);

?>

</body>
</html>