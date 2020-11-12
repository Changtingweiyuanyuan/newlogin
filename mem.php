<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一般會員中心</title>
</head>
<body>
<h1>一般會員中心</h1> 
<span>
    <a href="logout.php">登出</a>
</span>

親愛的<?php
    // cookie的顯示
    // if(isset($_COOKIE["login"])){
    //     echo $_COOKIE["login"];
    // }


    //session的顯示
    session_start();
    if(isset($_SESSION['login'])){
        echo $_SESSION['login'];
    }
?>你好，歡迎你
</body>
</html>