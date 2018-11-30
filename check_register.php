
<?php
	$_host ='localhost';
	$_user ='root';
	$_pass = '';
	$_db = 'spoty';

	//connection
	mysql_connect($_host,$_user,$_pass);

	//select db name
	mysql_select_db($_db);

	$id = $_POST['id'];
	$pass = $_POST['pass'];
	$query  = "insert into log VALUES('$id','$pass')";

	if($query_run = mysql_query($query)){
				echo "Welcome ".$_session['id']=$id;
				include('sport1.php');
	}else
		echo mysql_error();

?>



