<?php

require '../login.inc.php';

$result = pg_query($conn, "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public';");
if (!$result) {
  echo "Une erreur s'est produite.\n";
  exit;
}

while ($row = pg_fetch_row($result)) {
  echo "$row[0]";
  echo "<br />\n";
}