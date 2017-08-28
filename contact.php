<?php
// Fetching Values from URL.
$name = $_POST['funnName'];
$email = $_POST['emailAddress'];
$contact = $_POST['mobileNumber'];
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  if (!preg_match("/^[0-9]{10}$/", $contact)) {
    echo "<span>Please enter valid contact number</span>";
  } else {
    $subject = $name;
    // To send HTML mail, the Content-type header must be set.
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:' . $email. "\r\n"; // Sender's Email
    $headers .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender
    $template = '<div style="padding:50px; color:white;">Hello ' . $name . ',<br/>'
    . '<br/>Thank you...!<br/><br/>'
    . 'Name:' . $name . '<br/>'
    . 'Email:' . $email . '<br/>'
    . 'Contact No:' . $contact . '<br/>'
    . 'This is a contact confirmation mail.'
    . '<br/>'
    . 'We Will contact You as soon as possible .</div>';
    $sendmessage = "<div style=\"background-color:#7E7E7E; color:white;\">" . $template . "</div>";
    // Message lines should not exceed 70 characters (PHP rule), so wrap it.
    $sendmessage = wordwrap($sendmessage, 70);
    // Send mail by PHP Mail Function.
    mail("the.saroz@gmail.com", $subject, $sendmessage, $headers);
    echo "Your query has been received, We will contact you soon.";
  }
} else {
  echo "<span>Invalid email</span>";
}
?>
