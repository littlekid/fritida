<?php
  include 'secret.php';

  $mysqli = new mysqli($databaseUrl, $databaseUser, $databasePassword, $databaseName);

  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  if ($result = $mysqli->query("SELECT * FROM activities")) {
    $output = "[\n";
    while($activity = $result->fetch_assoc()) {
      $output .= "  {\n";
      $output .= '    "title":"'.$activity["title"].'",';
      $output .= '    "title":"'.$activity["description"].'"';
      $output .= "\n  },";
    }
    $output .= "\n]";
    $output = str_replace(",\n]", "\n]", $output);
    echo $output;
    $result->close();
}
?>
