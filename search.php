
<?php
	$_host ='localhost';
	$_user ='root';
	$_pass = '';
	$_db = 'spoty';

	//connection
	mysql_connect($_host,$_user,$_pass);

	//select db name
	mysql_select_db($_db);

	@$id = $_POST['search'];
	$query  = "select id,sport from register_sport where register_sport.id='$id' OR register_sport.sport='$id' ";


?>


<!DOCTYPE html>
<html>
<head>
	<title>search query</title>
</head>
<style type="text/css">
 table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 15px;
    border-radius: 10px;
    text-align: center;
}

tr:nth-child(even){background-color: rgb(16, 161, 164)}

th {
    background-color: rgb(156, 0, 164);
    color: white;
    padding: 50px;
    border-radius: 30px;
}
h{
	color:rgb(156, 0, 119);
}
</style>
<body style="text-align: center;">
	<div class ="container" style="text-align: center;">
		<div class ="row">
			<div  class="col-sm-4">
			</div>
			<div class="col-sm-4" >
				<form action="search.php" method="POST">
				    <input style="padding: 30px;border: 2px solid red;border-radius: 5px;" type="text" name ="search">
	     			<button type="submit" style="padding: 10px;" class="btn btn-default">Submit</button>
				</form>
	
				<h1>All Query</h1>
				  <table class="table">
					      <tr>
					        <th>ID</th>
					        <th>Sport</th>					        
					      </tr>
					        	<?php	        	
					        	$query_run = mysql_query($query);
									while ($query_row=mysql_fetch_assoc($query_run)): ?>
								<tr> 
									<td><?php echo $query_row['id'];?></td>
									<td><?php echo $query_row['sport'];?>
									<br></td>
								</tr>
								<?php endwhile;?>						
				  </table>
			</div>
			<div class ="col-sm-4">
			</div>			
		</div>
	</div>

</body>
</html>



