<html class="no-js" lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Admin Login | Reliance 3.0</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- All Stylesheet -->
	     <link rel="stylesheet" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    </head><body>
<?php
$servername = "localhost";
$username   = "sahityak007";
$password   = "sahityak007";
$dbname     = "selab";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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
 }echo "</table>";
?>
</body>