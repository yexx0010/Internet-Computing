<?php
	$user = $_GET["user"];
	$pw = $_GET["pw"];
	$newpw = sha1($pw);
	
	$con = mysql_connect("hopper.wlu.ca","moxx9390","buddy7");
	$db= mysql_select_db("moxx9390", $con);
	$sql = "SELECT * from login\n"
	. "Where `Username` = '$user'";

	$result = mysql_query($sql, $con) or die(mysql_error());
	$matchFound = mysql_num_rows($result) > 0 ? 'yes' : 'no';
	if (strcmp("$matchFound","yes")==0){
		$message = "Username already exist, try another";
		$data = array ('message'=>$message); 
		echo json_encode($data);
	}
	else{
		$sql2 = "INSERT INTO login(`Username`, `Password`)\n"
		. "VALUES ('$user', '$newpw')";
		$result2 = mysql_query($sql2, $con) or die(mysql_error());
		$message = "Registration complete, proceed to login";
		$data = array ('message'=>$message); 
		echo json_encode($data); 
	}
	mysql_close($con);
?>