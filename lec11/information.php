<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
if($_POST['submit']){
 echo("Username:".$_POST['txtUsername']."<br>");
  echo("Password:".$_POST['txtUserPass']."<br>");
 echo("ConfirmPass:".$_POST['txtUserPass1']."<br>");
 echo("Sex:".$_POST['radioSex']."<br>");
  echo("City:".$_POST['city']."<br>");
echo("Favor:");
if($_POST['C1']=='on')
	echo("Art");
else if($_POST['C2']=='on')
	echo("Computer");
else if($_POST['C3']=='on')
	echo("Paint");
echo("<br");
 echo("City:".$_POST['city']."<br>");
}
?>