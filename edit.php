<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".edit_tr").click(function() {
		var ID=$(this).attr('id');
		$("#name_"+ID).hide();
		$("#name_input_"+ID).show();
	}).change(function() {
		var ID=$(this).attr('id');
		var name=$("#name_input_"+ID).val();
		var dataString = 'id='+ ID +'&name='+name;
		$("#name_"+ID).html('<img src="load.gif" />'); // Loading image
		if(name.length>0) {
			$.ajax({
				type: "POST",
				url: "table_edit.php",
				data: dataString,
				cache: false,
				success: function(html) {
					$("#node_"+ID).html(name);
				}
			});
		}
		else {
			alert('Enter something.');
		}
	});

	// Edit input box click action
	$(".editbox").mouseup(function() {
		return false
	});

	// Outside click action
	$(document).mouseup(function() {
		$(".editbox").hide();
		$(".text").show();
	});
});
</script>
<style>
body
{
	font-family: Roboto;
	font-size: 14px;
}
.editbox
{
	display:none
}
td
{
	padding:5px;
}
.editbox
{
	font-size:14px;
	width:270px;
	background-color:#ffffcc;
	border:solid 1px #000;
	padding:4px;
}
.edit_tr:hover
{
	background: #e2e2e2;
	cursor: pointer;
}
</style>
</head>

<body>
<table>
<?php
	include 'includes/db.php'; // Connect to DB
	$sql = mysql_query("SELECT * from nodes");
	while($row = mysql_fetch_array($sql))
	{
		$id = $row['id'];
		$name = $row['name'];
?>
<tr id="<?php echo $id; ?>" class="edit_tr">

<td class="edit_td">
<span id="node_<?php echo $id; ?>" class="text"><?php echo $id; ?></span>
<input type="text" value="<?php echo $id; ?>" class="editbox" ?>" />
</td>

<td class="edit_td">
<span id="node_<?php echo $id; ?>" class="text"><?php echo $name; ?></span>
<input type="text" value="<?php echo $name; ?>" class="editbox" id="name_input_<?php echo $id; ?>" />
</td>

</tr>
<?php
	}
?>
</table>
</body>
