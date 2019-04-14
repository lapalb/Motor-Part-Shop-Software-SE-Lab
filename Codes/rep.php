<?php
$servername = "localhost";
$username   = "sahityak007";
$password   = "sahityak007";
$dbname     = "selab";
$conn = new mysqli($servername, $username, $password, $dbname);
$sql    = "SELECT DAY(date) AS X,sum(q) AS Y from sales where date > DATE_ADD(CURDATE(), INTERVAL -30 DAY) group by date";
$result = $conn->query($sql);
$dataPoints = array();
while ($row = mysqli_fetch_array($result)) {
array_push($dataPoints,array("x"=> $row[X], "y"=> $row[count(Y)]));
}
?>

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Motor Part Shop Software</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <style> span{
      text-align:justify}
    </style>  
    <script>
      window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          exportEnabled: true,
          theme: "dark2", // "light1", "light2", "dark1", "dark2"
          title:{
            text: "Sales Report Of Motor Part Shop Software"
          }
          ,
          data: [{
            type: "column", //change type to bar, line, area, pie, etc
            //indexLabel: "{y}", //Shows y value on all Data Points
            indexLabelFontColor: "#5A5757",
            indexLabelPlacement: "outside",   
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK);
            ?>
          }
                ]
        }
                                      );
        chart.render();
      }
    </script>
  </head>
  <body> 
    <?include('header.php');?>
    <div class="container-fluid" style="margin:50px">              
      <div id="chartContainer" style="height: 50%; width: 100%; ">
      </div>
    </div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js">
    </script>
  </body>
</html>       
