<?php
$category = $_GET["category"];

	$con = mysql_connect("hopper.wlu.ca","moxx9390","buddy7");
	$db= mysql_select_db("moxx9390", $con);

	$sql = "SELECT * from events\n"
	. "Where `Category` = '$category'";

	$result = mysql_query($sql, $con) or die(mysql_error());
	$matchFound = mysql_num_rows($result) > 0 ? 'yes' : 'no';

	echo "<table border='1'>
	<tr>
	<th>Title</th>
	<th>Date</th>
	<th>Location</th>
	<th>Description</th>
	</tr>";
	if (strcmp("$matchFound","yes")==0){
		while($row = mysql_fetch_array($result))
		{
		  echo "<tr>";
		  echo "<td>" . $row['Title'] . "</td>";
		  echo "<td>" . $row['Date'] . "</td>";
		  echo "<td>" . $row['Location'] . "</td>";
		  echo "<td>" . $row['Description'] . "</td>";
		  echo "</tr>";
		}
	}

echo "</table>";

?>