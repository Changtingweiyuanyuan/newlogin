<?php

// 處理新增使用者功能

$dsn="mysql:host=localhost;dbname=member;charset=utf8";
$pdo=new PDO($dsn,'root','');

$acc=$_POST['acc'];
$password=$_POST['password'];
$name=$_POST['name'];
$birthday=$_POST['birthday'];
$address=$_POST['address'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$education=$_POST['education'];

$insert_to_login="insert into `login`(`acc`,`password`,`email`) values('$acc','$password','$email')";
var_dump($insert_to_login);
//查詢用query
// $pdo->query($insert_to_login);
$pdo->exec($insert_to_login);
//新增修改 用exec

$select_login_user="select * from `login` where `acc`='$acc' && `password`='$password'";
$login_user=$pdo->query($select_login_user)->fetch();
$login_id=$login_user['id'];
echo "<br>最新註冊帳號<br>".$login_id;


// 寫入使用者資料表

$insert_to_member="insert into `member`(`name`,`birthday`,`role`,`address`,`tel`,`education`,`login_id`) values('$name','$birthday','會員','$address','$tel','$education','$login_id')";
// $pdo->exec($insert_to_member);

$result=$pdo->exec($insert_to_member);


if($result){
    header("location:index.php?meg=新增成功");
}else{header("location:index.php?meg=新增失敗");}
//exec 回傳值>1 等於新增成功
//query回傳是物件 exec回傳數字

echo '新增完成';

?>