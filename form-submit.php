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
if(!isset($_POST["date"]))
{
die();
}

?>
          
        <?php include('header.php')?>
            <section id="inside">
        <div class="top-border"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">Apply Online</div>
                </div>
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Apply Online</li>
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
<p align="center">Date  <?php echo $_POST["date"]; ?><br>
<p align="center">Part Ids: <?php echo $_POST["id"];?> <br>
<p align="center">Quantity Sold <?php echo $_POST["q"];?> <br>
<p align="center">Type <?php echo $_POST["state"];?> <br>
</div>
</div>





<?
if(isset($_POST[date])){
$sql = "INSERT INTO sales(date, id,q,type)
VALUES('$_POST[date]', '$_POST[id]','$_POST[q]','$_POST[state]') ";

if (mysqli_query($conn, $sql)){ 
    #echo "New record created successfully";
    if($_POST[state]=="sale"){
        $a=$_POST[q];
         $sql2="UPDATE part
SET cs = cs-$a
WHERE id = $_POST[id]";
        
    }else{$a=($_POST[q]);
    $sql2="UPDATE part
SET cs = cs+$a
WHERE id = $_POST[id]";}

   if (mysqli_query($conn, $sql2)) {echo "Part updated in Table";}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

echo "<script type='text/javascript'>alert(\"Sales Record Updated\");</script>";
}
}
mysqli_close($conn);

?>

</body>
</html>
