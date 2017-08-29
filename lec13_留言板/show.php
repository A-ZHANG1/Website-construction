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
<script>
	function del(id)
	{
		if(confirm("确定删除本条留言吗？")){
			window.location='del.php?id='+id;
		}
	}

</script>
<p><a href="index.php">添加留言</a><a href="show.php"> 查看留言 </a></p>

<hr width=90%>
<?php
header("Content-type: text/html; charset=utf-8"); 
//<!-- 获取文本文件中的留言信息，显示在网页中 -->
//<!-- 1.获取message.txt中的信息 -->
$info=file_get_contents("message.txt");
//<!-- 2.以@@将留言拆分成条(结果为array) -->
if(strlen($info)>=8){
$info=rtrim($info,"@");//从字符串（r:右边去掉字符）防止多出现一条空白信息
$msglist=explode("@@",$info);
//<!-- 3.遍历数组，将每条留言拆解为title,author... -->
foreach($msglist as $k=>$v){ //定义变量$k存储$v的下标
$msg=explode("##",$v);	
echo "<li>";
echo "<span>作者：{$msg[1]}</span>&nbsp;&nbsp;";
echo "<span>From:{$msg[3]}</span>&nbsp;&nbsp;";
echo "<span>Time:".date("Y-m-d H:i:s",$msg[4]+8*3600)."</span>&nbsp;&nbsp;";
echo "<h3>{$msg[0]}</h3>";
echo "<p>{$msg[2]}</p>";
echo "<p align='right'><a href='javascript:del($k)'>删除</a></p>";
echo "</li>";

}
}
else echo "当前没有留言";
?>

</center>
</body>

</html>
