<?php
include("conn.php");
error_reporting(0);

if((isset($_POST['abc'])) && (isset($_POST['xyz'])))
{
	$un = $_POST['abc'];
	$pw = $_POST['xyz'];

	$query = "SELECT * FROM USERS WHERE Username = '$un' && Password = '$pw'";
	$data = mysqli_query($conn, $query); 
	$total = mysqli_num_rows($data);
	if($total == 1)
	{
		$file=fopen("begin.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}
	}
	else
	{
		$file=fopen("wrong.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}
	}
}

?>