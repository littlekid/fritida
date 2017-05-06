<?php header("Access-Control-Allow-Origin: *");
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include 'show_all_activities.php';
  } else {
    include 'add_activity_to_database.php';
  }
?>
