<?php
$title="管理中心";
include_once('header.php');
?>

<body>
    
<h1 class="text-center">管理中心</h1>


<!-- 去資料庫撈客戶資料 -->
<?php

$dsn="mysql:host=localhost;dbname=member;charset=utf8";
$pdo=new PDO($dsn,'root','');

$sql="select `login`.`id`,`acc`,`name`,`role`,`birthday`,`email`,`address`,`tel`,`create_time` 
from `login`,`member` where `login`.`id`=`member`.`login_id`";
$users=$pdo->query($sql)->fetchALL();

echo "<table class='table'>";
echo "<tr>";
echo "<td>流水號</td>";
echo "<td>帳號</td>";
echo "<td>姓名</td>";
echo "<td>角色</td>";
echo "<td>生日</td>";
echo "<td>信箱</td>";
echo "<td>地址</td>";
echo "<td>電話</td>";
echo "<td>建立時間</td>";
echo "<td>操作</td>";
echo "</tr>";


foreach($users as $user){
    echo "<tr>";
        echo "<td>{$user['id']}</td>";
        echo "<td>{$user['acc']}</td>";
        echo "<td>{$user['name']}</td>";
        echo "<td>{$user['role']}</td>";
        echo "<td>{$user['birthday']}</td>";
        echo "<td>{$user['email']}</td>";
        echo "<td>{$user['address']}</td>";
        echo "<td>{$user['tel']}</td>";
        echo "<td>{$user['create_time']}</td>";
        echo "<td><a href='edit_user.php?id={$user['id']}'><button class='btn btn-sm btn-light'>編輯</button></a>";
        echo "<td><a href='del_user.php?id={$user['id']}'><button class='btn btn-sm btn-danger'>刪除</button></a>";
        
        echo "</td>";
        // 網頁傳值方式(GET)：在a標籤後面+一個問號? 就可以帶參數
        echo "</tr>";
}

echo "</table>";
?>



<?php
include_once('footer.php');
?>