<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://silviomoreto.github.io/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #ks {
            margin-left: auto;
            margin-right: auto;
            width: 300px;
        }
    </style>
  </head>
  <body  align="center" >
      <label > Salaryman by Krit V2.01 </label>
      <form id="ks" method="get" action="ddd.php" >
          <label class="form-control label-info">User Login</label>
          <input type="text" class="form-control text-danger" placeholder="Username" name="username">
          <input type="password" style="margin-top: 4px" class="form-control col-lg-push-7" name="password" placeholder="Password">
          <input type="submit"  class="form-control btn-info" value="Login">
          
           </form>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
  </body>
</html>