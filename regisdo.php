<?php  
//登录  
if(!isset($_POST['submit'])){  
    exit('非法访问!');  
}  

$username = htmlspecialchars($_POST['username']); 
$password = MD5($_POST['password']);  
  
//包含数据库连接文件  
include('conn.php');  
//检测用户名是否存在
$check_sql="select uid from user where username='$username'  limit 1";
$insert_sql="insert into user(username,password) values('$username','$password')";
$check_query = mysqli_query( $conn,$check_sql);  
if($result = mysqli_fetch_array($check_query,MYSQLI_ASSOC)) {  
    //已经被注册
    exit('注册失败！用户名已存在，点击此处 <a href="javascript:history.back(-1);">返回</a> 重试'); 
}else {
    $insert_result=mysqli_query($conn,$insert_sql) or die("注册失败！点击此处 <a href=\"javascript:history.back(-1);\">返回</a> 重试".mysqli_error());
    session_start(); 
    $check_query = mysqli_query( $conn,$check_sql); 
    $result = mysqli_fetch_array($check_query,MYSQLI_ASSOC);
    $_SESSION['uid'] = $result['uid']; 
    $_SESSION['username'] = $username; 
    exit('注册成功！点击此处 <a href="mydo.php">进入个人中心</a>');  
}
  
  
?>  