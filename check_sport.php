
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
	$sport = $_POST['sport'];
	$query  = "insert into register_sport VALUES('$id','$sport')";

	if($query_run = mysql_query($query)){
				include('sport1.php');
	}else
		echo mysql_error();

?>



