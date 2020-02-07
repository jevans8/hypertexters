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
    <!-- Stylesheet for subscribe/submit button validation (DELETE BECAUSE NOW INTEGRATED INTO OTHER CSS FILE -->
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
<!--================================================== What We Do ===================================================-->
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-5">
            <h2 id="whatWeDo">What We Do</h2>
            <hr>
            <p>Dayside LLC is a management consulting firm created to help organizations respond and adapt to new realities and opportunities. We help leaders understand in simple terms how to manage change effectively.</p>
            <p>Specifically, we are experts in resistance to change and what leaders can do to meet this challenge. In addition, Dayside LLC helps leaders understand and improve their own leadership performance.</p>
            <a class="btn btn-primary btn-lg" href="form.php#contact">Request free consultation &raquo;</a>
        </div>
        <div class="col-md-4 m-auto bg-light pt-4 my-5">
            <p class="small">Join our mailing list to receive regular leadership and management tips, blog posts, articles, and other happenings in the field of organizational leadership:</p>
            <?php include "topSubscribe.php" ?>
        </div>
    </div>
    <!-- /.row -->
    <!--===================================================== Bio ===================================================-->
    <div class="pt-6" id="bio">
        <h2>Meet Dr. Aaron Day, Founder</h2>
        <h4>Leadership & Management Consultant – Thought Leader – Journalist – Professor</h4>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <img src="images/aaron.jpg" alt="Dr. Day" class="img-fluid" id="headshot">
            </div>
            <div class="col-md-8">
                <p>Dr. Aaron Day, founder of Dayside LLC, is a scholar, professor, and journalist who’s quickly becoming an influential voice in the fields of leadership development and change management.</p>
                <p>He is a multi-faceted leadership consultant with a desire for helping organizations and individuals think big, manage change, adapt to new realities, and develop the plans and processes needed to accomplish breakthrough performance growth.  His expertise in organizational leadership and change management covers a wide range of topics, most notably on resistance to organizational change.</p>
                <p>Dr. Day is a published author on the topics of business transformation, leadership, and managing change. He has facilitated and written the curriculum for multiple workshops for organizations seeking help in leadership development, change management, leading teams, writing for communications, and media literacy.</p>
                <p>He has held various leadership roles throughout his 18 years working in major television media markets as a journalist and has more than a 10 years of experience as a college professor.</p>
                <p>Dr. Day holds a B.A. in Media Management from Long Beach State University, a M.A. in Leadership Studies from City University of Seattle, and an Ed.D in Organizational Leadership, also from City University of Seattle. His doctoral research explored the phenomena of emotional resistance from employees and what leaders can do to overcome this potential threat to change programs.</p>
            </div>
        </div>
    </div>
    <!--================================================== Services =================================================-->
    <?php include 'services.html';?>
</div>
<!-- /.container -->
<!--===================================================== Footer ====================================================-->
<?php include 'footer.html';?>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="scripts/form.js"></script>
<script src="scripts/formSubscribeFooter.js"></script>
<script src="scripts/formSubscribeTop.js"></script>

<!-- Bootstrap core JavaScript -->


</body>

</html>