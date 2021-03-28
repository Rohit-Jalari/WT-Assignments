<?php
$i=1;
$num=2;
echo "The first 20 Even Numbers Are:";
echo "<br>";
while($i<=20)
{
	if($num%2==0){
		echo "$num";
		echo "<br>";
		$i++;
		$num+=2;
	}
    
}

?>