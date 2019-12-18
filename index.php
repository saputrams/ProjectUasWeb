<html>
<?php
include ('config.php');

$result = pg_query($db_connection, "SELECT * from test");

while ($row = pg_fetch_row($result)) {
    echo "Author: $row[0]";
    echo "<br />\n";
  }

?>
</html>