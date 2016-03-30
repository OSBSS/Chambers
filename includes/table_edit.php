<?php
include 'db.php';
if($_POST['id'])
{
	$id = mysql_escape_String($_POST['id']);
	$name = mysql_escape_String($_POST['name']);
	
	// Update DB with node names
	$sql = "UPDATE nodes SET name = '$name' WHERE id='$id'";
	mysql_query($sql);
}
?>