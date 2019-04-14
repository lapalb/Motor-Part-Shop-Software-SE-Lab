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
if(!isset($_POST["vid"]))
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
<p align="center">Vendor id  <?php echo $_POST["vid"]; ?><br>
<p align="center">Vendor Name: <?php echo $_POST["vname"];?> <br>
<p align="center">Address <?php echo $_POST["vaddr"];?> <br>
<p align="center">Parts: <?php echo $_POST["pid"];?> <br>
</div>
</div>





<?
if(isset($_POST[vid])){
   
    $sql = "INSERT INTO vendor(vid,vname,vaddr,pid) VALUES('$_POST[vid]', '$_POST[vname]','$_POST[vaddr]','$_POST[pid]') ";
    

   if (mysqli_query($conn, $sql)) {echo "Part Added in Table";}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo "<script type='text/javascript'>alert(\"Vendor Record Added\");</script>";
}
mysqli_close($conn);

?>

</body>
</html>
