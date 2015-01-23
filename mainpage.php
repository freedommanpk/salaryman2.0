<?php
    require("include/config.php");
?>
 
<!DOCTYPE html>
<html>
    <head>
         <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title><?= $systemname; ?></title>
             <link href="css/bootstrap.min.css" rel="stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src="js/bootstrap.min.js"></script>
                <script src="js/mainpage.js" type="text/javascript"></script>
                <style>
                        body{
                            background-image: url("http://wallpaperscraft.com/image/46792/1920x1200.jpg") ;
                            
                        }
                </style>
    </head>
    <body >
        <div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default ">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="mainpage.php"><?= $systemname; ?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" data-name="navbarclick">
              <li><a href="home.php">Save receipts</a></li>
              <li><a href="CostEstimation.php">Cost Estimation </a></li>
              <li><a href="#">Initial Cost Data</a></li>
                <li><a href="#">Fix Cost Data</a></li>
                <li><a href="#">Summarize</a></li>
              
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Setting <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Alert Setting</a></li>
                  <li><a href="#">User Setting</a></li> 
                   
                  <!--<li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>-->
                </ul>
              </li>
               <li><a href="#">Logout</a></li>
            </ul>  
          </div> 
        </div> 
      </nav>
      
       <div class="jumbotron"  id="tabInfo"> 
         <h3><?= $systemname; ?></h3><!--
        <p>This example is a quick exercise to illustrate ho <!-- w the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
        <p>
          <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
        </p> -->
         Hi, Tassanee Monthanonkron<br>
         
         <div   style="background-color: white" align="center">
         <label class="alert-warning"> On January 2015. You use the money to </label><br>
         <label class="bg-danger"> <h2>3000</h2> baht </label> 
         </div>
         <div class="clearfix"></div>
         <hr>
         <label class="alert-info"> Your last login on : 2 January 2014, 12.00.33 </label>
      </div>

      
     </div>
    </body>
</html>
