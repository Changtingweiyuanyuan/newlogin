<?php
// 把時間變負數 cookie就會過期
// setcookie("login","",time()-1);

// session的logout 把變數取消掉
session_start();
$_SESSION['login']=null;  //只是值沒了 但變數SESSION['login']還在

unset($_SESSION['login']); //可以把變數完全刪除

header("location:index.php");
?>