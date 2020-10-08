<?php

  include "../../db.php";

  header("Content-Type: application/json");

  if ($_GET["author"] == "all") {

    echo json_encode($database);

  } else {

    $author = strtolower($_GET["author"]);
    $filtered_databse = [];

    foreach ($database as $key => $value) {

      $database_value = strtolower($database[$key]["author"]);

      if (strpos($database_value, $author) !== false) {
        array_push($filtered_databse, $database[$key]);
      }
    }

    echo json_encode($filtered_databse);
  }

?>
