<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
$username = $_SESSION['userid'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

 
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>F.D.G.E. Members</title>
</head>

<body>
 
<?php

if($username && $userid)
{
	echo "Welcome <b>$username</b>, <a href = './logout.php'>Logout</a>";
}
else
	echo "Please login to access to access this page. <a href='./login.php'>Login here</a>";
?>
 
  
</body>

</html>