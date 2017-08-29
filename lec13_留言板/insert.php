
<head>
<!-- <meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> -->
<title>无标题文档</title>

</head>

<body>
<center><p>我的留言</p>
<p><a href="index.php">添加留言</a><a href="show.php"> 查看留言 </a></p>

<hr width=90%>
<?php
header("Content-type: text/html; charset=utf-8"); 
//执行留言添加操作
//<!-- 1.获取用户输入信息，补充ip和提交时间 -->
$title=$_POST['title'];
$author=$_POST['author'];
$contents=$_POST['contents'];
$ip=$_SERVER['REMOTE_ADDR'];
$addtime=time();
//<!-- 2.组装留言 -->
$msg="{$title}##{$author}##{$contents}##{$ip}##{$addtime}@@";
// echo $msg;
//<!-- 3.把组装好的信息写入message.txt -->
file_put_contents("message.txt", $msg,FILE_APPEND);

//<!-- 4.提示留言成功 -->
echo "留言成功"

?>

</center>
</body>

</html>
