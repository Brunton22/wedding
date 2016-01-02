<?php

   $action = $_GET['action'];

   switch($action) {

      case "1_guest":
         email_1();
         break;

      case "2_guests":
         email_2();
         break;

      case "1_guest_cant_attend":
         email_1_no();
         break;

      case "1_guest_cant_attend_night":
         email_1_no_night();
         break;

      case "2_guests_cant_attend":
         email_2_no();
         break;

      case "2_guests_cant_attend_night":
      email_2_no_night();
      break;

      case "2_guests_bus";
         email_2_bus();
         break;

      case "1_guest_bus";
         email_1_bus();
         break;
      }

   $email_add = "brunton22@hotmail.com";

   function email_1(){

      include ('connect_db.php');

      $guest1name = $_POST['guest1name'];
      $guest1starter = $_POST['guest1starter'];
      $guest1main = $_POST['guest1main'];
      $guest1pudding = $_POST['guest1pudding'];

      if ($_POST['guest1dietreq'] == "") {

         $guest1dietreq = 'None';
      }

      else {

         $guest1dietreq = $_POST['guest1dietreq'];
      }

      $sql = "INSERT INTO day_guests (guest_name, attend, starter, main, pudding, dietary_requirements)
               VALUES ('$guest1name', 'Yes', '$guest1starter', '$guest1main', '$guest1pudding', '$guest1dietreq')";
      mysqli_query($conn, $sql);


      $to = $email_add;
      $subject = "RSVP";
      $message ="<html><body><h1>$guest1name can attend your wedding.<br>
                                 Starter: $guest1starter.<br>
                                 Main: $guest1main.<br>
                                 Pudding: $guest1pudding<br>
                                 Dietary Requirements: $guest1dietreq<br>
                             </h1></body></html>";
      $header = "From: $guest1name <rsvp@alexsophiewedding.co.uk> \r\n";
      $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $retval = mail ($to,$subject,$message,$header);
      if($retval)
      {
         echo "Message sent successfully...";
      }
      else
      {
         echo "Message could not be sent...";
      }
   }

   function email_2(){

      include ('connect_db.php');

      $guest1name = $_POST['guest1name'];
      $guest1starter = $_POST['guest1starter'];
      $guest1main = $_POST['guest1main'];
      $guest1pudding = $_POST['guest1pudding'];

      if ($_POST['guest1dietreq'] == "") {

         $guest1dietreq = 'None';
      }

      else {

         $guest1dietreq = $_POST['guest1dietreq'];
      }

      $guest2name = $_POST['guest2name'];
      $guest2starter = $_POST['guest2starter'];
      $guest2main = $_POST['guest2main'];
      $guest2pudding = $_POST['guest2pudding'];

      if ($_POST['guest2dietreq'] == "") {

         $guest2dietreq = 'None';
      }

      else {

         $guest2dietreq = $_POST['guest2dietreq'];
      }

      $sql = "INSERT INTO day_guests (guest_name, attend, starter, main, pudding, dietary_requirements)
               VALUES ('$guest1name', 'Yes', '$guest1starter', '$guest1main', '$guest1pudding', '$guest1dietreq'), ('$guest2name', 'Yes', '$guest2starter', '$guest2main', '$guest2pudding', '$guest2dietreq')";
      mysqli_query($conn, $sql);

      $to = $email_add;
      $subject = "RSVP";
      $message ="<html><body><h1>$guest1name can attend your wedding.<br>
                                 Starter: $guest1starter.<br>
                                 Main: $guest1main.<br>
                                 Pudding: $guest1pudding<br>
                                 Dietary Requirements: $guest1dietreq<br><br>
                                 $guest2name can also attend<br>
                                 Starter: $guest2starter.<br>
                                 Main: $guest2main.<br>
                                 Pudding: $guest2pudding.<br>
                                 Dietary Requirements: $guest2dietreq<br>
                             </h1></body></html>";
      $header = "From: $guest1name <rsvp@alexsophiewedding.co.uk> \r\n";
      $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $retval = mail ($to,$subject,$message,$header);
      if($retval)
      {
         echo "Message sent successfully...2";
      }
      else
      {
         echo "Message could not be sent...";
      }

   }

   function email_1_no(){

      include ('connect_db.php');

      $guest1name = $_POST['guest1name'];

      $sql = "INSERT INTO day_guests (guest_name, attend)
         VALUES ('$guest1name', 'No')";
      mysqli_query($conn, $sql);

      $to = $email_add;
      $subject = "RSVP";
      $message ="<html><body><h1>$guest1name can't attend your wedding.<br></h1></body></html>";
      $header = "From: $guest1name <rsvp@alexsophiewedding.co.uk> \r\n";
      $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $retval = mail ($to,$subject,$message,$header);
      if($retval)
      {
         echo "Message sent successfully...2";
      }
      else
      {
         echo "Message could not be sent...";
      }
   }

   function email_1_no_night(){

      include ('connect_db.php');

      $guest1name = $_POST['guest1name'];

      $sql = "INSERT INTO night_guests (guest_name, attend)
         VALUES ('$guest1name', 'No')";
      mysqli_query($conn, $sql);

      $to = $email_add;
      $subject = "RSVP";
      $message ="<html><body><h1>$guest1name can't attend your wedding at night.<br></h1></body></html>";
      $header = "From: $guest1name <rsvp@alexsophiewedding.co.uk> \r\n";
      $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $retval = mail ($to,$subject,$message,$header);
      if($retval)
      {
         echo "Message sent successfully...2";
      }
      else
      {
         echo "Message could not be sent...";
      }
   }

   function email_2_no(){

      include ('connect_db.php');

      $guest1name = $_POST['guest1name'];
      $guest2name = $_POST['guest2name'];

      $sql = "INSERT INTO day_guests (guest_name, attend)
         VALUES ('$guest1name', 'No'), ('$guest2name', 'No')";
      mysqli_query($conn, $sql);

      $to = $email_add;
      $subject = "RSVP";
      $message ="<html><body><h1>$guest1name and $guest2name can't attend your wedding.<br></h1></body></html>";
      $header = "From: $guest1name <rsvp@alexsophiewedding.co.uk> \r\n";
      $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $retval = mail ($to,$subject,$message,$header);
      if($retval)
      {
         echo "Message sent successfully...2";
      }
      else
      {
         echo "Message could not be sent...";
      }
   }

   function email_2_no_night(){

      include ('connect_db.php');

      $guest1name = $_POST['guest1name'];
      $guest2name = $_POST['guest2name'];

      $sql = "INSERT INTO night_guests (guest_name, attend)
         VALUES ('$guest1name', 'No'), ('$guest2name', 'No')";
      mysqli_query($conn, $sql);

      $to = $email_add;
      $subject = "RSVP";
      $message ="<html><body><h1>$guest1name and $guest2name can't attend your wedding at night.<br></h1></body></html>";
      $header = "From: $guest1name <rsvp@alexsophiewedding.co.uk> \r\n";
      $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $retval = mail ($to,$subject,$message,$header);
      if($retval)
      {
         echo "Message sent successfully...2";
      }
      else
      {
         echo "Message could not be sent...";
      }
   }

   function email_2_bus(){

      include ('connect_db.php');

      $guest1name = $_POST['guest1name'];
      $guest2name = $_POST['guest2name'];
      $bus1 = $_POST['bus1'];
      $bus2 = $_POST['bus2'];

      $sql = "INSERT INTO night_guests (guest_name, attend, bus)
         VALUES ('$guest1name', 'Yes', '$bus1'), ('$guest2name', 'Yes', '$bus2')";
      mysqli_query($conn, $sql);

      $to = $email_add;
      $subject = "RSVP";
      $message ="<html><body><h1>$guest1name and $guest2name can attend your reception.<br>
                                 $guest1name Bus: $bus1<br>
                                 $guest2name Bus: $bus2</h1></body></html>";
      $header = "From: $guest1name <rsvp@alexsophiewedding.co.uk> \r\n";
      $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $retval = mail ($to,$subject,$message,$header);
      if($retval)
      {
         echo "Message sent successfully...2";
      }
      else
      {
         echo "Message could not be sent...";
      }
   }

   function email_1_bus(){

      include ('connect_db.php');

      $guest1name = $_POST['guest1name'];
      $bus1 = $_POST['bus1'];

      $sql = "INSERT INTO night_guests (guest_name, attend, bus)
         VALUES ('$guest1name', 'Yes', '$bus1')";
      mysqli_query($conn, $sql);

      $to = $email_add;
      $subject = "RSVP";
      $message ="<html><body><h1>$guest1name can attend your reception.<br>
                                 $guest1name Bus: $bus1</h1></body></html>";
      $header = "From: $guest1name <rsvp@alexsophiewedding.co.uk> \r\n";
      $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
      $header .= "MIME-Version: 1.0\r\n";
      $retval = mail ($to,$subject,$message,$header);
      if($retval)
      {
         echo "Message sent successfully...2";
      }
      else
      {
         echo "Message could not be sent...";
      }
   }

?>