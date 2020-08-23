<?php
include("conn.php");
error_reporting(0);

$u = $_POST['username'];
$query = "SELECT * FROM USERS WHERE Username = '$u'";
$data = mysqli_query($conn, $query); 
$total = mysqli_num_rows($data);

if(strpos($_POST['email'], "@") == null)
{
 	$file=fopen("wrong4.html", "r");
	while(!feof($file))
	{
		echo fgets($file);
	}
}

elseif($total == 1)
{
	$file=fopen("wrong3.html", "r");
	while(!feof($file))
	{
		echo fgets($file);
	}
}

elseif($_POST['p1'] != $_POST['p2'])
{
	$file=fopen("wrong2.html", "r");
	while(!feof($file))
	{
		echo fgets($file);
	}
}

else
{
	$n = $_POST['name'];
	$e = $_POST['email'];
	$u = $_POST['username'];
	$p = $_POST['p1'];
					
	$query = "INSERT INTO USERS VALUES ('$n', '$e', '$u', '$p')";
	$data = mysqli_query($conn, $query);

	$file=fopen("success.html", "r");
	while(!feof($file))
	{
		echo fgets($file);
	}
}

?>

