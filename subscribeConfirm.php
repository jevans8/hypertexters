<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dayside LLC</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Social media icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--=================================================== Navigation ==================================================-->
<?php include 'nav.html';?>
<!--===================================================== Header ====================================================-->
<?php include 'header.html';?>
<!--===================================================== Body ======================================================-->
<div class="container">
    <h2 class="text-center">Thank you for signing up for our mailing list!</h2>
    <p class="lead">Thank you for signing up to receive fresh ideas and free advice on leadership, management, and organizational change. You will receive quick and practical information delivered right to your inbox.</p>

</div>

<!--===================================================== PHP ====================================================-->
<?php


//get all user input
$name = $_POST['nameSubscribe'];
$email = $_POST['emailSubscribe'];

//send email to user
$fromAddress3 = "dr.day@dayside.com"; //change this to aaron@daysidellc.com
$toAddress3 = $email;
$subject3 = "Thank you for joining our mailing list!";
$headers3 = "From: Dayside LLC <$fromAddress3>";
$message3 = "Thank you for signing up to receive fresh ideas and free advice on leadership, management, and 
organizational change. You will receive quick and practical information delivered right to your inbox. You may 
unsubscribe at any time by replying to this email with the Subject Header: \"Unsubscribe\". To request a free 
consultation please visit: https://hypertexter.greenriverdev.com/Dayside/form.php#contact";
mail($toAddress3, $subject3, $message3, $headers3);


//send email to Aaron
$fromAddress4 = "new_subscriber@daysidellc.com";
$toAddress4 = "jevans8@mail.greenriver.edu"; //change this to aaron@daysidellc.com
$subject4 = "New Subscriber";
$headers4 = "From: Dayside LLC <$fromAddress4>";
$message4 = "New subscriber
\nName:  $name
\nEmail: $email
";

mail($toAddress4, $subject4, $message4, $headers4);

?>

<!--===================================================== Footer ====================================================-->
<?php include 'footer.html';?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript for form -->
<script src="scripts/form.js"></script>
<script src="scripts/formSubscribeFooter.js"></script>

</body>
</html>