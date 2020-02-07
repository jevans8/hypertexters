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
<!--===================================================== Form ======================================================-->
<!-- Cite: Contact form HTML taken from the Start Bootstrap Agency Template (available at https://startbootstrap.com/previews/agency/)-->
<section class="page-section pt-6" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Request a Free Consultation</h2>
                <p class="section-subheading text-muted pb-2">*Required field</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="contactForm" name="sentMessage" action="confirm.php" method="POST" novalidate="novalidate">
                    <!--================================== TOP HALF OF FORM ==================================-->
                    <div class="row">
                        <!--================================== 1ST COL ==================================-->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="firstName">First Name*</label>
                                <input class="form-control" name="firstName" id="firstName" tabindex="8" type="text" placeholder="First Name*" required="required" data-validation-required-message="Please enter your first name.">
                                <p class="help-block text-danger">
                                    <span class="err small" id="errFname">Required field</span>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="lastName">Last Name*</label>
                                <input class="form-control" name="lastName" id="lastName" type="text" tabindex="9" placeholder="Last Name*" required="required" data-validation-required-message="Please enter your last name.">
                                <p class="help-block text-danger">
                                    <span class="err small" id="errLname">Required field</span>
                                </p>
                            </div>
                        </div>
                        <!--================================== 2ND COL ==================================-->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="email">Email Address*</label>
                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com*" tabindex="10" required="required" data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger">
                                    <span class="err small" id="errEmail">Please enter a valid email address</span>
                                </p>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number*</label>
                                <input class="form-control" name="phone" id="phone" type="tel" tabindex="11" placeholder="(000)-000-0000*" required="required" data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger">
                                    <span class="err small" id="errPhone">Required field</span>
                                </p>
                            </div>
                        </div>
                        <!--================================== 3RD COL ==================================-->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" name="city" id="city" type="text" placeholder="City" tabindex="12" required="required" data-validation-required-message="Please enter your city.">
                                <p class="pb-4"></p>
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input class="form-control" name="state" id="state" type="text" placeholder="State" tabindex="13" required="required" data-validation-required-message="Please enter your state.">
                                <p class="pb-4"></p>
                            </div>
                        </div>
                        <!--================================== 4TH COL ==================================-->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label  for="title">Job Title</label>
                                <input class="form-control" name="title" id="title" type="text" tabindex="14" placeholder="Job Title">
                                <p class="pb-4"></p>
                            </div>
                            <div class="form-group">
                                <label for="organization">Organization Name</label>
                                <input class="form-control" name="organization" id="organization" tabindex="15" type="text" placeholder="Organization" required="required" data-validation-required-message="Please enter your organization.">
                                <p class="pb-4"></p>
                            </div>
                        </div>
                        <!-- end col 4 -->
                    </div>
                    <!-- end row 1 -->
                    <hr>
                    <!--================================== BOTTOM HALF OF FORM ==================================-->
                    <div class="row">
                        <!--================================== 1ST COL ==================================-->
                        <div class="col-md-4">
                            <!-- Industry -->
                            <div class="form-group">
                                <label for="industry">What industry are you in?</label>
                                <select class="form-control" id="industry" name="industry" tabindex="16">
                                    <option>Please Select</option>
                                    <option>Consumer</option>
                                    <option>Financial Services</option>
                                    <option>Technology</option>
                                    <option>Media</option>
                                    <option>Communications</option>
                                    <option>Government</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <p></p>
                            <!-- Services -->
                            <label>What services are you interested in?</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="leadership" id="leadership" name="services[]" tabindex="17">
                                <label class="form-check-label" for="leadership">
                                    Leadership
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="managing change" id="managingChange" name="services[]" tabindex="18">
                                <label class="form-check-label" for="managingChange">
                                    Managing Change
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="team effectiveness" id="teamEffect" name="services[]" tabindex="19">
                                <label class="form-check-label" for="teamEffect">
                                    Team Effectiveness
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="morale" id="morale" name="services[]" tabindex="20">
                                <label class="form-check-label" for="morale">
                                    Morale
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="organization communication" id="orgComm" name="services[]" tabindex="21">
                                <label class="form-check-label" for="orgComm">
                                    Organizational Communication
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="constructive climate" id="climate" name="services[]" tabindex="22">
                                <label class="form-check-label" for="climate">
                                    Constructive Climate
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="other" id="otherService" name="services[]" tabindex="23">
                                <label class="form-check-label" for="otherService">
                                    Other
                                </label>
                            </div>
                            <!-- end services -->
                            <p></p>
                        </div>
                        <!--================================== 2ND COL ==================================-->
                        <div class="col-md-4">
                            <!-- row 2, col 2 -->
                            <!-- radio buttons for crisis question -->
                            <label >Are you in crisis?</label>
                            <div class="form-check" >
                                <input class="form-check-input" tabindex="24" type="radio" name="crisis" id="yesCrisis" value="yes" >
                                <label class="form-check-label" for="yesCrisis">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" tabindex="25" type="radio" name="crisis" id="noCrisis" value="no" >
                                <label class="form-check-label" for="noCrisis" >
                                    No
                                </label>
                            </div>
                            <!-- end radio buttons -->
                            <p></p>
                            <!-- if yes to crisis -->
                            <div class="form-group">
                                <label for="ifYesCrisis">If yes, please tell us about your crisis:</label>
                                <textarea class="form-control" id="ifYesCrisis"  name ="ifYesCrisis" placeholder="Message" tabindex="26"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <!-- preferred consult format -->
                            <div class="form-group">
                                <label for="preference">Which do you prefer?</label>
                                <select class="form-control" id="preference" name ="preference" tabindex="27">
                                    <option>Please Select</option>
                                    <option>One-on-one consulting</option>
                                    <option>Group format</option>
                                    <option>Virtual consulting</option>
                                    <option>I'm not sure</option>
                                </select>
                            </div>
                        </div>
                        <!-- end row 2, col 2 -->
                        <!--================================== 3RD COL ==================================-->
                        <div class="col-md-4">
                            <!-- How did you hear about us? -->
                            <div class="form-group">
                                <label for="hearAbout">How did you hear about us?</label>
                                <textarea class="form-control" id="hearAbout" name ="hearAbout" placeholder="Message" tabindex="28"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <!-- Anything else? -->
                            <div class="form-group">
                                <label for="message">Is there anything else you would like us to know?</label>
                                <textarea class="form-control" id="message" name ="message" placeholder="Message" tabindex="29"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!-- end row 2, col 3 -->
                    </div>
                    <!-- end of bottom half of form -->
                    <!--================================== SUBMIT BUTTON ==================================-->
                    <hr>
                    <div class="clearfix"></div>
                    <div class="col-lg-12 text-center">
                        <p class="section-subheading text-muted mb-0">Any information we receive will be kept
                            confidential.</p>
                        <span class="err small help-block text-danger" id="errAll">Please complete all required fields</span>
                        <div id="success"></div>
                        <button id="sendMessageButton" class="btn btn-primary btn-xl btn-lg" type="submit" tabindex="30">Submit &raquo;</button>
                    </div>
                </form>
                <!-- end of form -->
            </div>
        </div>
    </div>
    <!-- end of container -->
</section>

<!--===================================================== Footer ====================================================-->
<?php include 'footer.html';?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- JavaScript for form -->
<script src="scripts/form.js"></script>
<script src="scripts/formSubscribeFooter.js"></script>
<script src="scripts/formSubscribeTop.js"></script>

</body>
</html>

