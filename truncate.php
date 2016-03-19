<?php
	include 'includes/db.php'; // Connect to DB
	include 'config.php';  // Import configurations 
	// Truncate tables action
	if(isset($_GET['action'])) {
		switch($_GET['action']) {
			case 'truncate':
					mysql_query("TRUNCATE TABLE node1;");
					mysql_query("ALTER TABLE node1 AUTO_INCREMENT = 1");
					mysql_query("TRUNCATE TABLE node2;");
					mysql_query("ALTER TABLE node2 AUTO_INCREMENT = 1");
					mysql_query("TRUNCATE TABLE node3;");
					mysql_query("ALTER TABLE node3 AUTO_INCREMENT = 1");
					mysql_query("TRUNCATE TABLE node4;");
					mysql_query("ALTER TABLE node4 AUTO_INCREMENT = 1");
					mysql_query("TRUNCATE TABLE node5;");
					mysql_query("ALTER TABLE node5 AUTO_INCREMENT = 1");
					mysql_query("TRUNCATE TABLE node6;");
					mysql_query("ALTER TABLE node6 AUTO_INCREMENT = 1");
					header("Location: " . $_SERVER['REQUEST_URI']);
					break;
		}
	}
?>