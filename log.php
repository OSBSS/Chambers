<!DOCTYPE HTML>
<html>
<head>
<title>Chambers Project - Logs</title>
</head>
<body>
<a href="truncate.php?action=clear">Clear</a>
<br />
<?php
    $myfilename = "log.txt";
    if(file_exists($myfilename)){
      echo file_get_contents($myfilename);
    }
?>
</body>
</html>