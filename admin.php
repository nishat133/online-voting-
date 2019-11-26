

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Voting application</title>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
	<link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/style.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <div class="content" style="margin:10px!important">
			<h1> provide User name and Password  to Log-In </h1>
			<hr>
		</div>
	<div class="container">
		<div class="row justify-content-center">
	
	<div class="login-page">
  <div class="form">
    
	<form action ="admin.php" method = "POST">
                  <label>UserName  :</label><input type = "text" name ="username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name ="password" class = "box" /><br/><br />
                  <button type = "submit" class="btn btn-primary" >Submit</button><br />
               </form>
	
    </div>
  </div>
	</div>
</div>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>