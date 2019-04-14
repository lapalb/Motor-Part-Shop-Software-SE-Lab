<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motor Part Shop Software</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <style> span{text-align:justify}</style>
</head>
<body>
<?include('header.php');?>

<div class="container" style="margin-top:50px">
<?php
$servername = "localhost";
$username   = "sahityak007";
$password   = "sahityak007";
$dbname     = "selab";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql    = "SELECT part.id,part.name, part.th,part.cs from part order by id ASC";
$result = $conn->query($sql);
  
    echo "<table class=\"table table-responsive table-bordered table-striped\" >
								<tr>
								<th>id</th>
								<th>Name</th>
								<th>threshold</th>
								<th>Current Stock</th>
							
							
							</tr>";
    
    while ($row = mysqli_fetch_array($result)) {
                    echo "<td>" . $row['id'] . "</td>";
             echo "<td>" . $row['name'] . "</td>";
           
            echo "<td>" . $row['th'] . "</td>";
            echo "<td>" . $row['cs'] . "</td>";
            
            
								
			
        echo "</tr>";
    }
    echo "</table>";


                    
                    ?>
                    
                    
</div> <footer>
        <div class="container">
            <script src="js/footer.js"></script>
        </div>
    </footer>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/main.js"></script>
</body> 
</html>