<?php

include "db.php";

$name = $_POST['name'];
$cont_1 = $_POST['cont_1'];
$cont_2 = $_POST['cont_2'];

$tmpfile = $_FILES['lo_image_link']['tmp_name'];
$o_name = $_FILES['lo_image_link']['name'];
$filename = iconv("UTF-8", "EUC-KR", $_FILES['lo_image_link']['name']);
$folder = "./img/".$filename;
move_uploaded_file($tmpfile,$folder);



if($name && $cont_1 && $cont_2) {
  $sql = mq("insert into movie_info(m_name, cont_1, cont_2, m_lo_image_link) values('".$name."','".$cont_1."','".$cont_2."','".$o_name."')");
  echo "<script> alert('글쓰기가 완료되었습니다.');
  location.href='main_write.html';
  </script>";
} else {
   echo "<script>
   alert('글쓰기에 실패했습니다.');
   </script>";
}



 ?>
