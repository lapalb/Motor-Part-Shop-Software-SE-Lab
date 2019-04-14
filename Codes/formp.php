<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Apply Online</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- All Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
<?php
if(!isset($_POST["id"]))
{
die();
}

?>
          
        <?php include('header.php')?>
          
        <div class="top-border"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">Apply parts</div>
                </div>
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Add  Parts</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php
$servername = "localhost";
$username = "sahityak007";
$password = "sahityak007";
$dbname = "selab";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

<section class="block feedBack">
    <div class="container">
<div class="grey-container wow bounceInUp" data-wow-delay=".2s">
    <div class="row">
<p align="center">id  <?php echo $_POST["id"]; ?><br>
<p align="center">Part Name: <?php echo $_POST["name"];?> <br>
<p align="center">Threshold Sold <?php echo $_POST["th"];?> <br>
<p align="center">Curent Stock <?php echo $_POST["cs"];?> <br>
</div>
</div>





<?
if(isset($_POST[id])){
   
    $sql = "INSERT INTO part(id,name,th,cs) VALUES('$_POST[id]', '$_POST[name]','$_POST[th]','$_POST[cs]') ";
    

   if (mysqli_query($conn, $sql)) {echo "Part Added in Table";}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo "<script type='text/javascript'>alert(\"Part Record Added\");</script>";
}
mysqli_close($conn);

?>

</body>
</html>
