<?php
	function lotto($num)
	{
		for($i=0; $i<$num; $i++) {
			for($j=0; $j<6; $j++)
			{
				$lotto[$i][$j]=mt_rand(1,45);
			}
			sort($lotto[$i]);
		}
		return $lotto;
	}
	
$lotto=lotto(5);

for($i=0; $i<sizeof($lotto); $i++)
{
	for($j=0; $j<6; $j++) {
	echo $lotto[$i][$j]." ";
	}
echo"<br/>";

}


?>