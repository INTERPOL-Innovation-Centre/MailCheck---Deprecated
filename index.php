<?php

/**
 * Example 1
 * Validate a single Email via SMTP
 */



//Check Params
if(!isset($_GET["Mailbox"])) {
  echo "Which maibox do you want to check? Use \"?Mailbox=toto@tata.com\"";
  exit();
  }
if($_GET["Mailbox"] === "") {
  echo "Which maibox do you want to check? Use \"?Mailbox=toto@tata.com\"";
  exit();
  }
// include SMTP Email Validation Class
require_once('smtp_validateEmail.class.php');

//read URL to extract mailbox to check (Query parameter: ?CheckMailbox=toto@tata.com)
// the email to validate
$email = $_GET["Mailbox"];
// an optional sender
$sender = 'no_reply@interpol.int';
// instantiate the class
$SMTP_Validator = new SMTP_validateEmail();
// turn on debugging if you want to view the SMTP transaction
$SMTP_Validator->debug = true;
// do the validation
$results = $SMTP_Validator->validate(array($email), $sender);
// view results
echo $email.' is '.($results[$email] ? 'valid' : 'invalid')."\n";

// send email?
if ($results[$email]) {
  //mail($email, 'Confirm Email', 'Please reply to this email to confirm', 'From:'.$sender."\r\n"); // send email
} else {
  echo 'The email addresse you entered is not valid';
}


?>
