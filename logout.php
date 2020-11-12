<?php
// 把時間變負數 cookie就會過期
setcookie("login","",time()-1);
header("location:index.php");
?>