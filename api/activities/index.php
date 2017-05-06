<?php
  $json = file_get_contents('php://input');
  $obj = json_decode($json);
  var_dump($json);
  var_dump($obj);
  include 'secret.php';

  $mysqli = new mysqli($databaseUrl, $databaseUser, $databasePassword, $databaseName);

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
