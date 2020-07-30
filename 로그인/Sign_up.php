<?php

include "db_info.php";


$id= $_POST['id'];
print_r($id);
$pwd= $_POST['pwd'];
$name= $_POST['u_name'];
$e_mail= $_POST['email'];
$b_day= $_POST['b_day'];
$gender = $_POST['gender'];

if($id== null || $pwd==null || $gender== null || $name== null ||
  $b_day== null || $e_mail== null)
  {
    echo "<a href=register.php>Back to page</a>";
    exit();
  } else {
    echo "성공"."<br>";
  }
  $check ="select * from users2 where id = '$id'";

  print_r($check);
  $result = $mysqli ->query($check);

  if($result ->num_rws==1){
    echo "This id is already being used<br>";
    echo "<a href=register.php>Back to page</a>";
    exit();
  } else {
    echo "회원가입 완료<br>";
  }



  $query = "INSERT INTO users2(id,name,pw,e_mail,b_day,gender) VALUES('$id','$name','$pwd','$e_mail','$b_day'
  , '$gender')";



  $excute = $mysqli->query($query);
  var_dump($excute);
  if($excute) {
    echo "회원가입 성공";

  } else{
    echo "에러";
    echo $mysqli->error;
  }

?>
