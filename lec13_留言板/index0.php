<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>留言本</title>
</head>

<body>
<center>
<!-- <p>我的留言本</p>
<p><a href="insert.php">添加</a> <a href="show.php">删除</a> </p>

<hr> -->
<?php include "manue.php";?>

<p>添加内容</p>

<form id="form1" name="form1" method="post" action="insert.php">
  <label><br />
 标题
  <input name="title" type="text" id="title" />
  <br />
  <br />
  </label>
  <p>
    <label>作者
    <input name="author" type="text" id="author" />
    </label>
  </p>
  <p>&nbsp;</p>
  <p>
    <label>内容
    <textarea name="contents" rows="9" id="contents"></textarea>
    </label>
  </p>
  <p>&nbsp;</p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Ìá½»" />
    </label>
    <label>
    <input type="reset" name="Submit2" value="ÖØÖÃ" />
    </label>
  </p>
</form>


</center>
</body>

</html>
