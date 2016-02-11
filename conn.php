<?php   
 $conn = mysqli_connect("192.168.56.102","mon","mon","test") or die("数据库链接错误".mysqli_error());   
 if (!mysqli_query($conn,'SET NAMES UTF8')){echo "<div class =\"smile\"> <div class=\"bigsmile\">:( </div> DON'T SUPPORT CHINESE! </div>.<br />";exit;} 
?> 