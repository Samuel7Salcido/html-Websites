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
<title>F.D.G.E. Successful Logout</title>
</head>

<body>
 
<?php
	if($username && $userid)
	{
		session_destroy();
		echo "You have been logged out successfully <a href ='./member.php'>Home Page </a>";
	}
	
	else
		echo "You are not logged in";
?>
 
  
</body>

</html>