<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link rel="stylesheet" href="css/style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Logout</title>
</head>

<body>
<table width="100%" border="0" cellpadding="5">
</table>
<hr>
	<?php
		session_start();
		$_SESSION['inProgress'] = '0';
		print( "  logging out...<br />" );
		session_destroy();		// destroy current session, effectively logging out
		print( "<meta http-equiv=\"refresh\" content=\"3;url=/~yexx0010/project/Try/home.php\"/>");		// automatically redirect after 3 seconds
		print( "</td></tr></table>".PHP_EOL );
		print("<br><br><br>If you are not automatically redirected to the Main page <a href=\"/~yexx0010/project/Try/home.php\">click here</a></center>".PHP_EOL);
    ?>
<br>
</body>
</html>