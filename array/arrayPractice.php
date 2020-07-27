<?php

$test_array = array();
$test_array['a'] = 'apple';
$test_array['b'] = 'banana';
$test_array['c'] = 'cat';
$test_array['d'] = 'dog';


if($_POST['text']=="a") {
echo "출력문: ".$test_array['a']."<br/>";
}
else if($_POST['text']=="b") {
echo "출력문: ".$test_array['b']."<br/>";
}
else if($_POST['text']=="c") {
echo "출력문: ".$test_array['c']."<br/>";
}
else if($_POST['text']=="d") {
echo "출력문: ".$test_array['d']."<br/>";
}




 ?>
