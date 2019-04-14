<?php
session_start();
?>
<html class="no-js" lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="x-ua-compatible" content="ie=edge">
	    <title>Admin Login | Motor Part Shop Software</title>
	    <meta name="description" content="">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <!-- All Stylesheet -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    
	</head>
	<body>
		<div class="container">
			<div class="jumbotron">
<?php
// remove all session variables
session_unset(); 


// destroy the session 
session_destroy(); 
echo"<h3 style=\"text-align:center\"> You have sucessfully Logout from MPSS</h3>"
?>
