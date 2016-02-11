<?php
    ini_set("error_reporting","E_ALL & ~E_NOTICE");
    $tips="";
    $username = $_POST['username'];  
    $password = MD5($_POST['password']);  
    if(isset($_POST['submit'])){  
        if ((!isset($username)) ||( $username=="")) {
            $tips="请填写用户名";
        }elseif((!isset($_POST['password'])) ||  ($_POST['password']==="") ){
            $tips="请填写密码";
        }else {
            require("logindo.php");
        }
    } 
?>

<!DOCTYPE html>
<html lang="zh-CN">
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="./css/style.css"/> 
        <title>用户登录</title>
        </head>  
    <body>
        <div class="container"> 
        <div style="margin-top:100px;text-align:center;">
        <form name="LoginForm" method="post"  class="form-inline">  
        <div class="form-group">
        <label class="sr-only" for="username">用户名:</label>
        <input id="username" name="username" type="text" class="form-control" placeholder="username"/>  
        </div>  
        <div class="form-group"> 
        <label class="sr-only" for="password">密 码:</label>  
        <input id="password" name="password" type="password" class="form-control" placeholder="Password"/>  
        </div>
        <input type="submit" name="submit" value="登陆"  class="btn btn-default"/>   
        </form> 
        <div style="margin-top:30px;">
            <a href="register.php">register</a>
        </div>
        <div style="margin-top:20px;">
            <?php
                echo $tips;
            ?>
        </div>
        </div> 
        </div>
    
        <!-- 如果要使用Bootstrap的js插件，必须先调入jQuery -->
        <script src="./js/jquery-2.2.0.min.js"></script>
        <!-- 包括所有bootstrap的js插件或者可以根据需要使用的js插件调用　-->
        <script src="./js/bootstrap.min.js"></script> 
    </body>
</html>  