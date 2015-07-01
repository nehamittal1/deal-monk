<?php
if (isset($_POST['redirect']))
   {
      // Set up message
      $send_to = $_POST['send_to'];
      $send_from = $_POST['send_from'];
      $subject  = $_POST['subject'];
      $redirect  = $_POST['redirect'];

      // Set up the header
      $header  = "From: " . $send_from . "\r\n";
      $header .= "X-Mailer: PHP/" . phpversion();
      $message='';

      // Build the message
      foreach ($_POST as $key=>$value)
      {

         $message .= $key . ": " . $value . "<br />";
      }

      // Send the email
      // The '@' surpresses errors.
      @mail($send_to, $subject, $message, $header);

      header("Location: " . $redirect ."?formsubmit=1");
   }
?>