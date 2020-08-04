<?php
  $mysql_hostname = "localhost";
  $mysql_username = "root";
  $mysql_password = "1234";
  $mysql_database = "user";
  $mysql_port = "3306";
  $mysql_charset = 'UTF8';

  $db = new mysqli($mysql_hostname,$mysql_username,$mysql_password,$mysql_database,$mysql_port,$mysql_charset);

 function mq ($sql){
   global $db;
   return $db->query($sql);
 }

 ?>
