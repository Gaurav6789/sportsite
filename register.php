session_start();

<!DOCTYPE html>
<html lang="en">
 <head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Rammetto+One" rel="stylesheet"> 
</head> 

<body style="background-image:url(1.png);text-align:center;background-repeat:no-repeat; background-size: 100% 100%;height:560px;width:100%;background-attachment:fixed ">
<div class="header">
  <h1 style="font-family: 'Rammetto One', cursive;">SPOTY </h1>
</div>

<div class ="container">
	<div class ="row">
		<div  class="col-sm-4">
		</div>
		<div class="col-sm-4" >
			<h4 style="font-family: 'Rammetto One', cursive;font-size:80px">Register here</h4>
			 <div  style="text-align:center;background-attachment:fixed;border:2px solid;padding:20px;box-shadow:10px 5px 10px red;border-radius:20px">
			 	<form action="check_register.php" method="POST">
			 		<input type="number" name="id"  style="padding:10px;border:1px solid;width:250px;" placeholder="College Id" ><br><br>
					<input type="text" name="pass" style="padding:10px;border:1px solid;width:250px;" placeholder="password" ><br><br>
					<input type="submit"  style="padding:10px;border-radius:3px solid groove;width:200px;" value="welcome..." ><br><br>
			 	</form>
					
		</div>
	</div>
		<div class="col-sm-4">
		</div>
		
	</div>
</div>

</body>
</html>

