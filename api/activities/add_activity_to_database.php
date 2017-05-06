<?php

  include 'secret.php';
  //Känn av ifall vi får en POST med POST-variabler.. ( som när 46elks-api:et POSTar till oss!)
  if(!$_REQUEST['key']) {   //REQUEST letar i både POST & GET! :)
    echo "You need an api-key, to send us activities through the api. \nGet in touch at hi@fritida.se!";
  } else {
    //OM anropet matchar denna nyckel, så kommer anropet för att någon har skickat oss ett sms!
    if($_REQUEST['key'] == '4613-test-kwuf-gY44-07c5') {
      $activityTitle = $_POST['from'];
      $activityDescription = $_POST['message'];
    } else {
    // ANNARS:::
      $json = file_get_contents('php://input');
      $activity = json_decode($json);
      $activityTitle = $activity->title;
      $activityDescription = $activity->description;
    }
    $mysqli = new mysqli($databaseUrl, $databaseUser, $databasePassword, $databaseName);
    $query = "INSERT INTO activities (title, description) VALUES ('".$activityTitle."','".$activityDescription."')";
    $result = $mysqli->query($query);
    if ($result = $mysqli->query($query)) {
      if(!$_REQUEST['key'] == '4613-test-kwuf-gY44-07c5') {
        echo "Thank you for adding \n".$activityTitle;
        echo "\nYou, together with others, make Fritida the place to find any activity! :]";
      } else {
        echo "Thank you for adding \n".$activityDescription;
        echo "\nYou together with others make Fritida the place to find any activity! :]";
      }
    }
  }
?>
