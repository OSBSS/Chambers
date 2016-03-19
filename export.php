<?php    
// OSBSS Copyright 2016
// Export.php - export table data as CSV format

include 'includes/db.php'; // connecting to database
include 'config.php'; // settings some configurations 

if ($_GET["table"]) {
    $table = $_GET["table"];
}

// filename for export
$csv_filename = $table.'_export_'.date("Y-m-d_H_i_s").'.csv';

// create empty variable to be filled with export data
$csv_export = '';

// optional where query
$where = 'WHERE 1 ORDER BY 1';

// query to get data from database
$query = mysql_query("SELECT * FROM ".$table." ".$where);
$field = mysql_num_fields($query);

// create line with field names
for($i = 0; $i < $field; $i++) {
  $csv_export.= mysql_field_name($query,$i).',';
}
// newline (seems to work both on Linux & Windows servers)
$csv_export.= '
';

// loop through database query and fill export variable
while($row = mysql_fetch_array($query)) {
  // create line with field values
  for($i = 0; $i < $field; $i++) {
    $csv_export.= ''.$row[mysql_field_name($query,$i)].',';
  }	
  $csv_export.= '
  ';	
}

// Export the data and prompt a csv file for download
header("Content-type: text/x-csv");
header("Content-Disposition: attachment; filename=".$csv_filename."");
echo($csv_export);
?>