<?php
if(isset($_POST['y']))
	{
		$file=fopen("win1.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}
	}
else
	{
		$file=fopen("lost1.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}	
	}
?>
