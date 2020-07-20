<?php
if(isset($_POST['input'])) {
	$num = (int)($_POST['input']);
	echo $num."단 입니다.<br/>";
	for($j=1; $j<=9; $j++) {
		echo $num." X ".$j." = ".($num*$j)."<br/>";
	}
	echo "<br/>";
}

?>

