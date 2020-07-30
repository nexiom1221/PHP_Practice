<?php

session_start();
include ("db_info.php");



$id = $_POST['id'];
$pw = $_POST['pw'];

$query = "select * from users2 where id='$id' and pw='$pw'";
$result = mysqli_query($mysqli, $query);
$row = mysqli_fetch_array($result);



if($id==$row['id'] && $pw==$row['pw']){

   $_SESSION['id']=$row['id'];
   $_SESSION['name']=$row['name'];
   echo "<script>location.href='login.php';</script>";

}else{

   echo "<script>window.alert('잘못된 패스워드 입니다.');</script>";
   echo "<script>location.href='login.php';</script>";

}

?>
