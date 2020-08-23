<?php
if(isset($_POST['y']))
	{
		$file=fopen("win2.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}
	}
else
	{
		$file=fopen("lost2.html", "r");
		while(!feof($file))
		{
			echo fgets($file);
		}	
	}
?>
