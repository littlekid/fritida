<?php
  include 'secret.php';
  header('Content-Type: application/json');
  $mysqli = new mysqli($databaseUrl, $databaseUser, $databasePassword, $databaseName);

  if ($mysqli->connect_errno) {
      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
  if ($result = $mysqli->query("SELECT * FROM activities")) {
    //$output = '{"activities": '."\n";
    $activities = [];
    while($activity = $result->fetch_assoc()) {
      $activity_item = [];
      $activity_item["title"] = $activity["title"];
      $activity_item["description"] = $activity["description"];
      array_push($activities, $activity_item);
    }
    echo json_encode($activities);
    $result->close();
}
?>
