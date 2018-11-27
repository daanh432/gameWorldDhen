<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="description" content="Game World - Contact Page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Game World - Contact</title>
</head>
<body>
<?php include("header.html"); ?>
<div class="wrapperDhen">
    <?php
    if (!isset($_POST["Send"])) {
        ?>
        <div id="contactPageFormDhen">
            <h1>Contact Form Game World</h1>
            <form class="userFormDhen" method="post" action="contact.php">
                <label for="name">Your Name:</label>
                <input type="text" placeholder="Enter your name" name="name">
                <label for="emailAddress">Your email-address:</label>
                <input type="email" placeholder="Enter your email address" name="emailAddress">
                <label for="subject">Message subject:</label>
                <input type="text" placeholder="Enter the message subject" name="subject">
                <label for="message">The Message:</label>
                <input type="text" placeholder="Enter your message" name="message">
                <label for="Send"></label><input type="submit" name="Send">
            </form>
        </div>
        <?php
    } else {
        $msg = $_POST["message"]; // Get the message from POST
        $name = $_POST["name"];
        $subject = $_POST["subject"]; // Get the subject from POST
        $msg = wordwrap($msg, 80); // New line more then 80 characters on single line
        mail("daan@daanhendriks.nl", "Contact Form Message: " . $subject, "A message from: $name \n\n" . $msg); // Actually send the email to website administrator
        ?>
        <div id="contactPageFormDhen">
            <h1>Thanks for sending us a message!</h1>
            <p>You'll receive a response as soon as possible in your mailbox!</p>
            <meta http-equiv="refresh" content="10">
        </div>
        <?php
    }
    ?>
</div>
<?php include("footer.html"); ?>
</body>
</html>