<?php
	$input_data = 0;
	
	while($input_data<=10)
	{
		echo "10보다 작거나 같아요 $input_data <br />";
		$input_data++;
	}
	
	echo "10보다 커요".$input_data."<br />";
	
	echo"<br />";
	echo"<br />";
	echo"<br />";
	
	for($input_data=0; $input_data<=10; $input_data++)
	{
		echo "10보다 작거나 같아요 $input_data <br />";
	}
	echo "10보다 커요".$input_data."<br />";
	
	echo"<br />";
	echo"<br />";
	echo"<br />";
	
	$input_data = 0;
	do
	{
		echo "10보다 작거나 같아요 $input_data <br />";
		$input_data++;
	}
	while($input_data<=10);
	echo "10보다 커요".$input_data."<br />";
	
	echo"<br />";
	echo"<br />";
	echo"<br />";
	
	
	$input =0;
	
	for($input=0; $input<=20; $input++){
		
	if($input<10)
	{
		echo "$input 는 10 보다 작아요  <br/>";
		
	}
	else if($input == 10){
		echo "$input 는 10과 같아요 <br/>";
	}
	else if($input>10){
		echo "$input 는 10 보다 커요 <br/>";
	}
	}
?>