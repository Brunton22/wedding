<?php

  include ('check_secure.php');

	include ('connect_db.php');

	echo "<div class='sub_head text_center'>Day Guests</div><br>";

	echo "<table class='table_center'>";

  $sql = "SELECT * FROM day_guests WHERE attend ='Yes'";
  $result = mysqli_query($conn, $sql);

  if ($result = mysqli_query($conn, $sql)) {
    // output data of each row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>Name: $row[6]</td><td>Starter: $row[2]</td><td>Main: $row[3]</td><td>Pudding: $row[4]</td><td>Dietary Requirements: $row[5]</td></tr></div>";
    }
   echo "</table><br><hr class='page_splitter center'></hr>";
  };

  echo "<div class='sub_head text_center'>Night Guests</div><br>";

  echo "<table class='table_center'>";

  $sql = "SELECT * FROM night_guests WHERE attend ='Yes'";
  $result = mysqli_query($conn, $sql);

  if ($result = mysqli_query($conn, $sql)) {
    // output data of each row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>Name: $row[3]</td><td>Bus: $row[2]</td></tr>";
    }
   echo "</table><br><hr class='page_splitter center'></hr>";
  };


  echo "<div class='sub_head text_center'>Non Attending Day Guests</div><br>";

  echo "<table class='table_center'>";

  $sql = "SELECT * FROM day_guests WHERE attend ='No'";
  $result = mysqli_query($conn, $sql);

  if ($result = mysqli_query($conn, $sql)) {
    // output data of each row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>Name: $row[6]</td></tr>";
    }
   echo "</table><br><hr class='page_splitter center'></hr>";
  };

  echo "<div class='sub_head text_center'>Non Attending Night Guests</div><br>";

  echo "<table class='table_center'>";

  $sql = "SELECT * FROM night_guests WHERE attend ='No'";
  $result = mysqli_query($conn, $sql);

  if ($result = mysqli_query($conn, $sql)) {
    // output data of each row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>Name: $row[3]</td></tr>";
    }
   echo "</table>";
  };

?>