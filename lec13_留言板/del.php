<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>无标题文档</title>
</head>

<body>
<center><p>我的留言</p>
<style>
	 ul{width:600px;}
	 li{list-style: none;background: #ccc;}

</style> 
<p><a href="index.php">添加留言</a><a href="show.php"> 查看留言 </a></p>

<hr width=90%>
<?php
header("Content-type: text/html; charset=utf-8"); 
//执行指定的id的留言的删除
//1.获取传递过来的id
$id=$_GET['id'];
//2.获取message.txt中的信息 --> 同show.php
$info=file_get_contents("message.txt");
//3.以@@将留言拆分成条(结果为array) --> 同show.php
$msglist=explode("@@",$info);
//4.删除指定id的留言
UNSET($msglist[$id]);
//5.删除后的内容在此写入message.txt
$newinfo=implode("@@",$msglist);
file_put_contents("message.txt",$newinfo);
//6.成功删除的提示
echo "success";

?>

</center>
</body>

</html>
