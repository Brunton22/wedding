<?php

  include ('check_secure.php');

	include ('connect_db.php');

	echo "<div class='sub_head text_center'>Day Guests</div><br>";

	echo "<table class='table_center'>";

  echo "<tr><td class='gl-head-c'>Guest Name</td><td class='gl-head-c'>Starter</td><td class='gl-head-c'>Main Course</td><td class='gl-head-c'>Pudding</td><td class='gl-head-c'>Dietary Requirements</td></tr>";

  $sql = "SELECT * FROM day_guests WHERE attend ='Yes'";
  $result = mysqli_query($conn, $sql);

  if ($result = mysqli_query($conn, $sql)) {
    // output data of each row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td class='g-info'>$row[6]</td><td class='g-info'>$row[2]</td><td class='g-info'>$row[3]</td><td class='g-info'>$row[4]</td><td class='g-info'>$row[5]</td></tr></div>";
    }
   echo "</table><br><hr class='page_splitter center'></hr>";
  };

  echo "<div class='sub_head text_center'>Night Guests</div><br>";

  echo "<table class='table_center'>";

  echo "<tr><td class='gl-head'>Name</td><td class='gl-head-c'>Bus</td></tr>";

  $sql = "SELECT * FROM night_guests WHERE attend ='Yes'";
  $result = mysqli_query($conn, $sql);

  if ($result = mysqli_query($conn, $sql)) {
    // output data of each row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td>$row[3]</td><td class='g-info'>$row[2]</td></tr>";
    }
   echo "</table><br><hr class='page_splitter center'></hr>";
  };


  echo "<div class='sub_head text_center'>Non Attending Day Guests</div><br>";

  echo "<table class='table_center'>";

  echo "<tr><td class='gl-head-c'>Name</td></tr>";

  $sql = "SELECT * FROM day_guests WHERE attend ='No'";
  $result = mysqli_query($conn, $sql);

  if ($result = mysqli_query($conn, $sql)) {
    // output data of each row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td class='g-info'>$row[6]</td></tr>";
    }
   echo "</table><br><hr class='page_splitter center'></hr>";
  };

  echo "<div class='sub_head text_center'>Non Attending Night Guests</div><br>";

  echo "<table class='table_center'>";

  echo "<tr><td class='gl-head-c'>Name</td></tr>";

  $sql = "SELECT * FROM night_guests WHERE attend ='No'";
  $result = mysqli_query($conn, $sql);

  if ($result = mysqli_query($conn, $sql)) {
    // output data of each row
    while ($row = mysqli_fetch_row($result)) {
        echo "<tr><td class='g-info'>$row[3]</td></tr>";
    }
   echo "</table>";
  };

?>