<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Inventory</title>
    <link rel="stylesheet" href="css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    
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

<body>
    
    
       <h1> Motor Part Shop Software </h1>
    

   
    
    <section id="inside" style="padding-top: 0px;">
        <div class="top-border"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title">Update Inventory</div>
                </div>
                <div class="col-sm-12">
                    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Update Inventory</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<section class="block feedBack">
    <div class="container">

        <div class="grey-container wow bounceInUp" data-wow-delay=".2s">
            <div class="row">
               <div class="col-sm-3"></div>

                <div class="col-sm-6">
                    <form class="fbForm" method="POST" action="form-submit.php">
                        

                        <div class="form-group">
                            <input class="form-control"  maxlength="50" name="date" placeholder="Date*" required type="date" value="" />
                        </div>
                        
                        <div class="form-group">
                            <input class="form-control"  maxlength="10" name="id" placeholder="id*" required type="number" value="" />
                        </div>
                        
                        <div class="form-group">
                            <input class="form-control"  maxlength="10" name="q" placeholder="Quantity Sold " type="number" value="" />
                        </div>
                        <div class="form-group">
                            <select name="state" class="form-control">
                            <option value="">Select Type</option>
                            <option value="sale">Sale</option>
                            <option value="purchase">Purchase</option></div>
                             <div class="locateBtn input-field">
                                <input type="submit" class="btn btn-success btn-block" value="Submit"  />
                                
                            </div>
                            
                            
                        </div>
                        <div class="col-sm-3"></div>
                </div>
            </div>
        </div>

    </div>
</section>
<footer>
    <?include('footer.php')?>
</footer>

     <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/main.js"></script>
</body> 
</html>