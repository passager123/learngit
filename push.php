<head>
<title>提交到git</title>
<meta charset="utf-8">
</head>
<table border="5">
<tr>
<th width="100" height="100" bgcolor="green">
<form name="form1" method="post" action="">
用户名：<input type="text" name="user">
密码：<input type="password" name="pwd">
<input type="submit" name="submit" value="提交">
</form>
</th> 
<?php
if （$_POST["submit"]=="提交"）//判断submit的值是否为提交
                              {
     echo"你输入的用户名为：".$_POST["user"];
     echo"你输入的密码为：".$_POST["pwd"];
}
?>
