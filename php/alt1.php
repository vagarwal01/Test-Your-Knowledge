<?php
$lines=file("alt1.html");
for($i=0;$i<7;$i++)
	{
		echo $lines[$i];
	}
echo "<br>";
$n=rand(0,10);
if($n==0)
{
	for($i=8;$i<18;$i++)
	{
		echo $lines[$i];
	}
}
elseif($n==1)
{
	for($i=18;$i<28;$i++)
	{
		echo $lines[$i];
	}
}
elseif($n==2)
{
	for($i=28;$i<38;$i++)
	{
		echo $lines[$i];
	}
}
elseif($n==3)
{
	for($i=38;$i<48;$i++)
	{
		echo $lines[$i];
	}
}
elseif($n==4)
{
	for($i=48;$i<58;$i++)
	{
		echo $lines[$i];
	}
}
elseif($n==5)
{
	for($i=58;$i<68;$i++)
	{
		echo $lines[$i];
	}
}
elseif($n==6)
{
	for($i=68;$i<78;$i++)
	{
		echo $lines[$i];
	}
}
elseif($n==7)
{
	for($i=78;$i<88;$i++)
	{
		echo $lines[$i];
	}
}
elseif($n==8)
{
	for($i=88;$i<98;$i++)
	{
		echo $lines[$i];
	}
}
else
{
	for($i=98;$i<108;$i++)
	{
		echo $lines[$i];
	}
}
?>