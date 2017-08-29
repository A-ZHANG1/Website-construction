<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
// 1.指定图片存储目录

$upload_dir=getcwd()."\\images\\";

// 2.判断目录是否存在，如果不存在则创建

if(!is_dir($upload_dir)){
	mkdir($upload_dir);
}

// 3.为上传文件命名（命名函数）

function makefilename()
{
	$cur_time=getdate();
	$filename=$cur_time['year'].$cur_time['mon'].$cur_time['mday'].$cur_time['hours'].$cur_time['minutes'].$cur_time['seconds'].".jpeg";
	return $filename;
}
$newfilename=makefilename();
$newfile=$upload_dir.$newfilename;

// 4.判断上传文件是否存在，转移到存储目录

// $file1=$_GET['file1']
if(file_exists($_FILES['file1']['tmp_name']))
{
move_uploaded_file($_FILES['file1']['tmp_name'], $newfile);
}
else
echo 'Error';

// 5.显示文件相关信息

echo "客户端文件名：".$_FILES['file1']['name']."<br>";
echo "文件类型：".$_FILES['file1']['type']."<br>";
echo "文件大小：".$_FILES['file1']['size']."<br>";
echo "临时文件名：".$_FILES['file1']['tmp_name']."<br>";
echo "新文件名：".$newfile."<br>";
?>

 <!-- 6.提示上传成功（继续上传链接） -->

<h4>文件上传成功<a href=# onclick=history.go(-1)>[继续上传]</a></h4>

 <!-- 7.显示上传的图片 -->

<img src="images/<?php echo ($newfilename);?>">