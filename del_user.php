<?php
$title="刪除頁面";
include_once('header.php');
?>

<?php
//刪除使用者

$dsn="mysql:host=localhost;dbname=member;charset=utf8";
$pdo=new PDO($dsn,'root','');

$user_id=$_GET['id'];
$sql1="delete from `login` where `id`='$user_id'";
$sql2="delete from `member` where `login_id`='$user_id'";


echo "確定要刪除ID=".$user_id."的資料嗎?";
?>

<!-- href='?' 表示 當前頁再跑一次 -->
<a href='?id=<?=$user_id?>&ask=true'><button class="btn btn-sm btn-danger">確定</button></a>
<a href='?id=<?=$user_id?>&ask=false'><button class="btn btn-sm btn-wraning">取消</button></a>

<?php

//判斷是否要執行刪除指令
if(isset($_GET['$ask'])){
    switch($_GET['$ask']){
        case 'true':
            $pdo->exec($sql1);
            $pdo->exec($sql2);
            header("location:admin.php");
        break;
        case 'false':
            header("location:admin.php");
        break;
        }
}

// 用switch 才能當成true/false(1或是0)判斷
// 如果用if 會被當成字串處理 'true' AND 'false'
?>

<?php
include_once('footer.php');
?>