<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
$UID=$_POST['txtUserName'];
$PASS=$_POST['txtUserPass'];
if( $UID=="admin" and $PASS=="PASS")
ECHO $UID." Successfully logged in!";
else
echo "Failed to login!";

?>