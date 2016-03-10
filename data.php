<?php
echo '<div class="col-md-4">';
echo '<h4 style="text-align:center; margin-bottom:-15px;">Chamber '. $x . '</h3>';
echo '<br />';
// Table start
echo '<table cellpadding="0" cellspacing="0" class="db-table">';
echo '<thead><tr><th>Data Point #</th><th>Time</th><th>Temperature</th><th>CO<sub>2</sub></th><th>Relative Humidity</th><th>Light Intensity</th><th>Surface Temperature</th></tr></thead>';
// Display data
echo "<tbody><tr><td>" . $row['id'] . "</td><td> " . $row['timestamp'] . "</td><td> " . $row['temp'] . "&deg;C</td><td> " . $row['co2'] . " ppm</td><td> " . $row['rh'] . "%</td><td> " . $row['lux'] . " lux</td><td> " . $row['stemp'] . "&deg;C</td></tr></tbody>"; 
echo '</table>';
// Table end
echo '<div style="text-align: center"><a href="export.php?table=chamber'.$x.'">Export</a></div>';
echo '</div>';
?>