<?php

session_start();

if($_SESSION['id']==null) {

?>

 <center><br><br><br>

<form name="login_form" action="login_check.php" method="post">

   ID  <br><input type="text" name="id"><br><br>
   PW <br><input type="password" name="pw"><br><br>
   <button type="button" class="signup" onClick=location.href='register.php'>회원가입</button></a><br><br><br>

   <input type="submit" name="login" value="Login">
</form>

</center>




<?php

}else{

   echo "<center><br><br><br>";
   echo $_SESSION['name']."(".$_SESSION['id'].")님이 로그인 하였습니다.";
   echo "&nbsp;<a href='logout.php'><input type='button' value='Logout'></a>";
   echo "</center>";
}

?>
