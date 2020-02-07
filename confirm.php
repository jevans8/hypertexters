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
    <!--<link href="css/form.css" rel="stylesheet">-->
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
    <h2 class="text-center">Thank you for contacting Dayside LLC!</h2>
    <p class="lead">Someone will contact you within 2-3 business days to learn more about how we may able to help assist your leadership and change management needs.</p>

</div>

<!--===================================================== PHP ====================================================-->
<?php
//var_dump($_POST);

//get all user input
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$state = $_POST['state'];
$organization = $_POST['organization'];
$title = $_POST['title'];
$industry = $_POST['industry'];
$services = $_POST['services'];
$servicesStr = implode(", ", $services);

// crisis radio button
if(isset($_POST["crisis"])){
    $crisis = $_POST["crisis"];

}else{
    $crisis = "No Button Selected";
}


$ifyescrisis = $_POST['ifYesCrisis'];


$preference = $_POST['preference'];
$hearAbout = $_POST['hearAbout'];
$messages = $_POST['message'];



//send email to user
$fromAddress2 = "dr.day@dayside.com"; //change this to aaron@daysidellc.com
$toAddress2 = $email;
$subject2 = "Thank you for requesting your free consultation!";
$headers2 = "From: Dayside LLC <$fromAddress2>";
$message2 = "Thank you for contacting Dayside LLC. Someone will contact you within 2-3 business days to learn more about how we may able to help assist your leadership and change management needs.";
mail($toAddress2, $subject2, $message2, $headers2);

//send email to Aaron
$fromAddress = "free_consultation@daysidellc.com";
$toAddress = "jevans8@mail.greenriver.edu"; //change this to aaron@daysidellc.com
$subject = "New Request for Free Consultation";
$headers = "From: Dayside LLC <$fromAddress>";
$message = "User input:
\nName:  $firstName $lastName
\nEmail: $email
\nPhone: $phone
\nCity: $city
\nState: $state
\nOrganization: $organization
\nJob title: $title
\nIndustry: $industry
\nServices: $servicesStr
\nAre you in crisis?: $crisis
\nCrisis message: $ifyescrisis
\nWhich do you prefer: $preference
\nHow did you hear about us?: $hearAbout
\nIs there anything else you would like us to know?: $messages
";

//echo $message;

mail($toAddress, $subject, $message, $headers);

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