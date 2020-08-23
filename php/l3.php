<?php
if(isset($_POST['y']))
	{
		$file=fopen("win3.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}
	}
else
	{
		$file=fopen("lost3.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}	
	}
?>
