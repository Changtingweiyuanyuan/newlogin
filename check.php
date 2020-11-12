<?php
/******登入檢查******
 * 1. 連線資料庫
 * 2. 取得表單傳遞的帳密資料
 * 3. 比對會員資料表中是否有相符的資料
 * 4. 取得會員資料
 * 5. 檢查會員身份及權限
 * 6. 依據會員身份導向不同的頁面
 */

$dsn="mysql:host=localhost;dbname=member;charset=utf8";
$pdo=new PDO($dsn,'root','');

$acc=$_POST['acc'];
$password=$_POST['pw'];

// 建立檢查帳號密碼的SQL語法
$sql="select * from `login` where `acc`='$acc' && `password`='$password'";
// 執行SQL語法並取得資料
$check=$pdo->query($sql)->fetch();
print_r($check);


// $sql1="select count(*) from `login` where `acc`='$acc' && `password`='$password'";
// $check1=$pdo->query($sql)->fetchColumn();
// $sql作法較危險 有可能不小心把會員資料顯示出來 如果+count(*) 只會顯示數字(總共有幾筆資料)
// fetch顯示完整陣列
// fetch column顯示　使用者資料 一個一個欄位取出來
print_r($check1);



// 判斷回傳值是否為空
if(!empty($check)){
    echo '登入成功';
    // 取得個人資料
    $member_sql="select * from `member` where `login_id`='{$check['id']}'";
    $member=$pdo->query($member_sql)->fetch();
    $role=$member['role'];
    // 讓cookie只存在兩分鐘
    // setcookie("login",$acc,time()+3600);

    // 宣告session要開始
    session_start();

    $_SESSION['login']=$acc;


    switch($role){
        case '會員':header('location:mem.php');
    break;
        case 'VIP':header('location:vip.php');
    break;
        case'管理員':header('location:admin.php');
    break;
    }










}else{
    header("location:index.php?meg=帳密不正確，請重新登入或註冊新帳號");
}













// $db_acc=$check['acc'];
// $db_px=$check['password'];

// if($acc==$db_acc && $password==$db_pw){
//     echo '帳密正確';
// }else{echo '帳密不正確';}



// 資料會是array格式 所以用print_r
print_r($check);

?>