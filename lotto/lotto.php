<?php

	$lotto = array(1,3,5,7,9,11);
	
	$input_num1 = $_POST['num1'];
	$input_num2 = $_POST['num2'];
	$input_num3 = $_POST['num3'];
	$input_num4 = $_POST['num4'];
	$input_num5 = $_POST['num5'];
	$input_num6 = $_POST['num6'];
	
	$count = 0;
	
	/*
	if($input_num1 == $lotto[0])
	{
		$count++;
	}
	if($input_num2 == $lotto[1])
	{
		$count++;
	}
	if($input_num3 == $lotto[2])
	{
		$count++;
	}
	if($input_num4 == $lotto[3])
	{
		$count++;
	}
	if($input_num5 == $lotto[4])
	{
		$count++;
	}
	if($input_num6 == $lotto[5])
	{
		$count++;
	}
	*/
	
	$input_num1 == $lotto[0] ? $count++ : $count;
	$input_num2 == $lotto[1] ? $count++ : $count;
	$input_num3 == $lotto[2] ? $count++ : $count;
	$input_num4 == $lotto[3] ? $count++ : $count;
	$input_num5 == $lotto[4] ? $count++ : $count;
	$input_num6 == $lotto[5] ? $count++ : $count;
	
	switch($count)
	{
		case 6:
			echo "1등";
			break;
		case 5:
			echo "2등";
			break;
		case 4:
			echo "3등";
			break;
		case 3:
			echo "4등";
			break;
		default :
			echo "다음 기회에";
			break;
	}
?>