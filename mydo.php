<?php  
ini_set("error_reporting","E_ALL & ~E_NOTICE");
session_start();  

//注销登录  
if($_GET['action'] == "logout"){  
    
    unset($_SESSION['uid']);  
    unset($_SESSION['username']);  
    echo '注销登录成功！点击此处 <a href="index.php">登录</a>';  
    exit;  
}  
//检测是否登录，若没登录则转向登录界面  
if(!isset($_SESSION['uid'])){  
    header("Location:index.php");  
    exit();  
}  
//包含数据库连接文件  
include('conn.php');  
$uid = $_SESSION['uid'];  
$username = $_SESSION['username'];  
$user_query = mysqli_query( $conn,"select * from user where uid = '$uid' limit 1");  
$row = mysqli_fetch_array($user_query);  
echo '用户信息：<br />';  
echo '用户ID：',$uid,'<br />';  
echo '用户名：',$username,'<br />';  
echo '<a href="mydo.php?action=logout">注销</a> 登录<br />';  
?>  