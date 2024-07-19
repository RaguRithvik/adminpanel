<?php


// Set email variables
$email_to = 'info@sakthibuilder.in';
$email_subject = 'Form submission';

// Set required fields
$required_fields = array('Firstname','Lastname','Email','Phone','Message');

// set error messages
$error_messages = array(
    'Firstname' => 'Please enter a Name to proceed.',
    'Lastname' => 'Please enter a Lastname to proceed.',
    'Email' => 'Please enter a valid Email Address to continue.',
    'Phone' => 'Please enter a Phone to proceed.',
    'Message' => 'Please enter your Message to continue.',
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

        $headers  = "From: <www.sakthibuilder.in>\n";
            $headers .= "X-Sender: <www.sakthibuilder.in>\n";
            $headers .= 'X-Mailer: PHP/' . phpversion();
            $headers .= "X-Priority: 1\n"; // Urgent message!
            $headers .= "Return-Path: www.sakthibuilder.in\n"; // Return path for errors
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=iso-8859-1\n";

// check form submittal
if(!empty($_POST)) {
    // Sanitise POST array
    foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
    
    // Loop into required fields and make sure they match our needs
    foreach($required_fields as $field) {       
        // the field has been submitted?
        if(!array_key_exists($field, $_POST)) array_push($validation, $field);
        
        // check there is information in the field?
        if($_POST[$field] == '') array_push($validation, $field);
        
        // validate the email address supplied
        if($field == 'Email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
    }
    
    // basic validation result
    if(count($validation) == 0) {
        // Prepare our content string
        $email_content = 'New Website Comment: ' . "<br>";
        
        // simple email content
        foreach($_POST as $key => $value) {
            if($key != 'submit') $email_content .= $key . ': ' . $value . "<br>";
        }
        
        // if validation passed ok then send the email
        mail($email_to, $email_subject, $email_content, $headers);
        
        // Update form switch
        $form_complete = TRUE;
    }
}

function validate_email_address($email = FALSE) {
    return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Sakthi Builders</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" type="image/png" sizes="32x32" href="images/fav.png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
 <style type="text/css">
span.error{
color:#333333;
display:block;
font-size:12px;
}
    </style>
<script type="text/javascript">
function setValue(field)
{
if(''!=field.defaultValue)
{
if(field.value==field.defaultValue)
{
field.value='';
}
else if(''==field.value)
{
field.value=field.defaultValue;
}
}
}
</script>
    
    <script type="text/javascript" src="js/validation2.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
    
    <script type="text/javascript">
var nameError = '<?php echo $error_messages['Firstname']; ?>';
var lastnameError = '<?php echo $error_messages['Lastname']; ?>';
        var emailError = '<?php echo $error_messages['Email']; ?>';
        var phoneError = '<?php echo $error_messages['Phone']; ?>';
        var commentError = '<?php echo $error_messages['Message']; ?>';
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
</script>
</head>
<body>

<div class="page-wrapper">
 	

 	
    <!-- Main Header-->
    <header class="main-header header-style-two">
    
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="top-left">
                        <p>Welcome to our <b>Sakthi Builders</b></p>
                    </div>
                    <div class="top-right clearfix">
                        <ul class="social-icon-one">
<li><a href="#" class="email-top"><i class="fa fa-envelope"></i> info@sakthibuilder.in</a></li>
                        </ul>
                        <ul class="clearfix">                           
<li class="quote-btn-box"><a href="enquiry.php" class="quote-btn">Quick Enquiry</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    
        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="clearfix">
                    
                    <div class="pull-left logo-outer">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                        
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->      
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
<li><a href="index.html">Home</a></li>
<li><a href="about-us.html">About Us</a></li>                               
<li class="dropdown"><a href="#">Services</a>
<ul>
<li><a href="turnkey-project.html">Turnkey Project</a></li>
<li><a href="labour-contract.html">Labour Contract</a></li>
<li><a href="consultancy.html">Consultancy</a></li>
</ul>
</li>
<li><a href="projects.html">Projects</a>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="clients.html">Clients</a></li>
<li><a href="testimonials.html">Testimonials</a></li>
<li class="current"><a href="contact.php">Contact</a></li> 
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                        
                    </div>
                    
                </div>
            </div>
        </div>
        <!--End Header Upper-->
        
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
  <li><a href="index.html">Home</a></li>
<li><a href="about-us.html">About Us</a></li>                               
<li class="dropdown"><a href="#">Services</a>
<ul>
<li><a href="turnkey-project.html">Turnkey Project</a></li>
<li><a href="labour-contract.html">Labour Contract</a></li>
<li><a href="consultancy.html">Consultancy</a></li>
</ul>
</li>
<li><a href="projects.html">Projects</a>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="clients.html">Clients</a></li>
<li><a href="testimonials.html">Testimonials</a></li>
<li class="current"><a href="contact.php">Contact</a></li>                                
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div>
        <!--End Sticky Header-->
    
    </header>
  
   <section class="page-title" style="background-image:url(images/background/7.jpg);">
        <div class="auto-container">
            <div class="title-box">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>
 <section class="contact-section">
        <div class="auto-container">
            <!--Sec Title-->
            <div class="sec-title centered">
                <h2>Get in Touch with us</h2>
                <div class="separater"></div>
            </div>
            <div class="row clearfix">
                
                <!--Column-->
                <div class="form-column pull-right col-md-8 col-sm-12 col-xs-12">
                    
                    <!-- Contact Form -->
                    <div class="contact-form">

                        <!--Comment Form-->
<?php if($form_complete === FALSE): ?>                        
<form action="contact.php" method="post" id="comments_form">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
<input type="text" id="Firstname" placeholder="First Name" class="detail" name="Firstname" onfocus="setValue(this)" onblur="setValue(this)" value="<?php echo isset($_POST['Firstname'])? $_POST['Firstname'] : ''; ?>" required/><?php if(in_array('Firstname', $validation)): ?><span class="error"><?php echo $error_messages['Firstname']; ?></span><?php endif; ?>
                                </div>

                                 <div class="col-md-6 col-sm-6 col-xs-12 form-group">
<input type="text" id="Lastname" placeholder="Last Name" class="detail" name="Lastname"  value="<?php echo isset($_POST['Lastname'])? $_POST['Lastname'] : ''; ?>" required/><?php if(in_array('Lastname', $validation)): ?><span class="error"><?php echo $error_messages['Lastname']; ?></span><?php endif; ?>
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
<input type="email" id="Email" placeholder="Email" class="detail" name="Email"  value="<?php echo isset($_POST['Email'])? $_POST['Email'] : ''; ?>" required/><?php if(in_array('Email', $validation)): ?><span class="error"><?php echo $error_messages['Email']; ?></span><?php endif; ?>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
<input type="text" id="Phone" placeholder="Phone" class="detail" name="Phone"  value="<?php echo isset($_POST['Phone'])? $_POST['Phone'] : ''; ?>" required/><?php if(in_array('Phone', $validation)): ?><span class="error"><?php echo $error_messages['Phone']; ?></span><?php endif; ?>
                                </div>
                                
                               

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
<textarea id="Message" name="Message" placeholder="Message" class="mess" required><?php echo isset($_POST['Message'])? $_POST['Message'] : ''; ?></textarea><?php if(in_array('Message', $validation)): ?><span class="error"><?php echo $error_messages['Message']; ?></span><?php endif; ?>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group">
<input type="submit" id="submit" name="submit" class="theme-btn btn-style-one" value="Submit Now" />
                                </div>

                            </div>
                        </form>
<?php else: ?>
<p style="font-size:36px; color:#020ecc; text-align: center;">Thank you for your Message!</p>
<?php endif; ?>
                    </div>
                    <!--End Comment Form -->
                    
                </div>
                
                <!--Column-->
                <div class="contact-info-column pull-left col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-box">
                         <ul class="contact-info">
                            <li><div class="icon"><span class="flaticon-placeholder"></span></div><span class="title">Sakthi Builders</span>No: 55 ,3rd street, MM Nagar, Sholinghur, Ranipet Dt Tamil Nadu</li>
<li class="lie"><div class="icon"><span class="flaticon-phone-call"></span></div>+91 8220607547, 9500107301</li>
<li class="lie"><div class="icon"><span class="flaticon-email"></span></div>info@sakthibuilder.in</li>
<li class="lie"><div class="icon"><span class="fa fa-globe"></span></div>www.sakthibuilder.in</li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<div class="d-maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d497370.8409655127!2d79.22101337190027!3d13.117568310436907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52b356f1f64fe5%3A0x631c8ced00369f3f!2sSakthi%20Builders!5e0!3m2!1sen!2sin!4v1638847056987!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

    <!--Call To Action Section-->
    <section class="call-to-action-section cosn">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Text Column-->
                <div class="text-column col-md-9 col-sm-12 col-xs-12">
                    <h2>We have been delivering first class Quality buildings for more than 14 years</h2>
                </div>
                <!--Btn Column-->
                <div class="btn-column col-md-3 col-sm-12 col-xs-12">
                    <a href="contact.php" class="theme-btn btn-style-one">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action Section-->
    
    <!--Main Footer-->
    <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row clearfix">
                
                    <!--Big Column-->
                    <div class="big-column col-md-12 col-sm-12 col-xs-12">


                        <div class="row clearfix">
 <div class="footer-column col-md-3 col-sm-3 col-xs-12">
                                <div class="footer-widget logo-widget">
                                    
                                    <div class="widget-content">
                                        <h2>Contact Us</h2>
                                        <ul class="contact-info">
                                            <li><div class="icon"><span class="flaticon-placeholder"></span></div><span class="title">Sakthi Builders</span>No: 55 ,3rd street, MM Nagar, Sholinghur, Ranipet Dt Tamil Nadu</li>
<li><div class="icon"><span class="flaticon-phone-call"></span></div>+91 82206 07547</li>
<li><div class="icon"><span class="flaticon-email"></span></div>info@sakthibuilder.in</li>
<li><div class="icon"><span class="fa fa-globe"></span></div>www.sakthibuilder.in</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                            
<div class="footer-column col-md-6 col-sm-6 col-xs-12" style="margin-bottom: 0;">
                                <div class="footer-widget links-widget">
          

    <div class="row"> 
    <div class="col-md-6 col-sm-6 col-xs-12">     
        <h2>Main Links</h2>                    
                                    <ul class="services-list">
     <li><a href="index.html">Home</a></li>
<li><a href="about-us.html">About Us</a></li>
<li><a href="projects.html">Projects</a>
<li><a href="gallery.html">Gallery</a></li>
<li><a href="clients.html">Clients</a></li>
<li><a href="testimonials.html">Testimonials</a></li>
<li><a href="contact.php">Contact</a></li>
                                    </ul>
</div>   
  <div class="col-md-6 col-sm-6 col-xs-12">  
      <h2>Services</h2>                       
                                    <ul class="services-list">
<li><a href="turnkey-project.html">Turnkey Project</a></li>
<li><a href="labour-contract.html">Labour Contract</a></li>
<li><a href="consultancy.html">Consultancy</a></li>
                                    </ul>
</div>                                  
                                </div>
                            </div>
                        </div>
  <div class="footer-column col-md-3 col-sm-3 col-xs-12">
                                <div class="footer-widget contact-widget">
                                    <h2>QR Code</h2>
<img src="images/qrcode.png">                                    
                                </div>
                            </div>

                            
                        </div>
                    </div>
                
                    
                </div>
            </div>
        </div>
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-12 col-sm-12 col-xs-12">
<div class="copyright">
Copyrights &copy; 2021 Sakthi Builders. All Rights Reserved. Designed by <a href="https://www.vjmtech.com/"><img src="images/vjm.png"></a></div>
                    </div>
                    <!--Nav Column-->
                </div>
            </div>
        </div>
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon fa fa-long-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/appear.js"></script>
<script src="js/wow.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="js/main-slider-script.js"></script>
<script src="js/chart.js"></script>
<script src="js/graph.js"></script>
</body>
</html>