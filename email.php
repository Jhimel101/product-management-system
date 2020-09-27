<?php
// SEND EMAIL
$to = "YOUR@EMAIL.COM"; // ! SET YOUR EMAIL !
$subject = "Order Received";
$message = "<html><body>";
$message .= "<p>An order has been receieved on " . date("j M Y H:i:s") . "</p>";
$message .= "<table>";
foreach ($_POST as $k=>$v) {
  $message .= "<tr><td><strong>$k:</strong></td><td>$v</td></tr>";
}
$message .= "</table></body></html>";
$headers = [
  'MIME-Version: 1.0',
  'Content-type: text/html; charset=utf-8',
  'From: sys@your-site.com' // ! CHANGE THIS AS WELL !
];
$headers = implode("\r\n", $headers);
$pass = @mail($to, $subject, $message, $headers); 

// SHOW RESULT ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Order Form Example</title>
    <link href="1b-theme.css" rel="stylesheet">
  </head>
  <body>
    <h1><?=$pass ? "ORDER RECEIEVED" : "OPPS! AN ERROR HAS OCCURRED!"?></h1>
    <p>
      <?=$pass ? "We have receieved your own and will get back to you ASAP." : "Please refresh the page and try again."?>
    </p>
  </body>
</html>