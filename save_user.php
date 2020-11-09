<?php
// 更新使用者資料

$dsn="mysql:host=localhost;dbname=member;charset=utf8";
$pdo=new PDO($dsn,'root','');
$id=$_POST['id'];
$acc=$_POST['acc'];
$password=$_POST['password'];
$name=$_POST['name'];
$birthday=$_POST['birthday'];
$address=$_POST['address'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$education=$_POST['education'];
$role=$_POST['role'];

// 建立更新語法
// login
$update_login_sql="update `login` set `acc`='$acc',`password`='$password',`email`='$email' where `id`='$id'";
$pdo->exec($update_login_sql);
// member
$update_member_sql="update `member` set `name`='$name',`birthday`='$birthday',`education`='$education',`address`='$address',`tel`='$tel' where `login_id`='$id'";
$pdo->exec($update_member_sql);

echo "login更新<BR>".$update_login_sql."<BR>";
echo "login更新<BR>".$update_member_sql."<BR>";

header("location:admin.php");
?>