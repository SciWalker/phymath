<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<!-- Title -->
	<title>Contact Us</title>
	<!-- Meta -->
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<!-- Favicon -->
	<link href="favicon.html" rel="shortcut icon">
	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/nexus.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
	<!-- Google Fonts-->
	<link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include("header_2018.html") ;?>
		<!-- === END HEADER === -->
		<!-- === BEGIN CONTENT === -->
		<div id="content" class="container">
			<div class="row margin-vert-30">
				<!-- Side Column -->
            <?php include("sidebar_2018.html") ;?>
					<!-- End Side Column -->
					<!-- Main Column -->
					<div class="col-md-9">
						<!-- Main Content -->

<h1>Please contact us for any business opportunities!</h1>
<br>
<p>&bull; We sell educational puzzles and brain teaser toys</p>
<p>&#x2022; We make simulations for physics and mathematics</p>
<p>&bull; We make quizzes and exercises for students and teachers alike.</p>
<br>
<h1>Ready to chat? Contact us via these following channels:</h1>
<br>
<p> Email: <a class = "link" href="mailto:admin@phymath.com">admin@phymath.com</a></p>
<p>Facebook: <a class = "link" href="https://www.facebook.com/phymathpage">https://www.facebook.com/phymathpage</a></p>
<p>Twitter: <a class = "link" href="https://twitter.com/PhyMath_Admin">https://twitter.com/PhyMath_Admin</a></p>
<?php
session_start();
$action = $_REQUEST['action'];

if ($action == "") {
    /* Display the contact form */

    // Your existing contact form code here:
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="submit">
        Your name:<br>
        <input name="name" type="text" value="" size="30"/><br>
        Your email:<br>
        <input name="email" type="text" value="" size="30"/><br>
        Your message:<br>
        <textarea name="message" rows="7" cols="30"></textarea><br>
        <label><strong>Enter Captcha:</strong></label><br />
        <input type="text" name="captcha" />
        <p><br />
            <img src="Captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
        </p>
        <p>Can't read the image?
            <a href='javascript: refreshCaptcha();'>click here</a>
            to refresh</p>
        <input type="submit" value="Send email"/>
    </form>
    <?php
} else {
    /* Send the submitted data */

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    // Captcha verification code (same as before)
    if (isset($_POST['captcha']) && ($_POST['captcha'] != '')) {
        // Validation: Checking entered captcha code with the generated captcha code
        if (strcasecmp($_SESSION['captcha'], $_POST['captcha']) != 0) {
            // Note: the captcha code is compared case insensitively.
            // if you want case sensitive match, check above with strcmp()
            echo "Captcha verification failed. Please try again.";
        } else {
            // Captcha is correct, process the contact form here.
            if (($name == "") || ($email == "") || ($message == "")) {
                echo "All fields are required, please fill <a href=\"\">the form</a> again.";
            } else {
                $from = "From: $name<$email>\r\nReturn-path: $email";
                $subject = "Message sent using your contact form:$_POST['captcha']";
                mail("admin@phymath.com", $subject, $message, $from);
                echo "Email sent!";
            }
        }
    } else {
        echo "Please enter the captcha code.";
    }
}
?>

<script>
    // Refresh Captcha
    function refreshCaptcha() {
        var img = document.images['captcha_image'];
        img.src = img.src.substring(
            0, img.src.lastIndexOf("?")
        ) + "?rand=" + Math.random() * 1000;
    }
</script>
						<!-- End Main Content -->
					</div>
					<!-- End Main Column -->
				</div>
			</div>
			<!-- === END CONTENT === -->
<<?php include("footer_2018.html") ?>

	<!-- JS -->
	<script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="assets/js/scripts.js"></script>
	<!-- Isotope - Portfolio Sorting -->
	<script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
	<!-- Mobile Menu - Slicknav -->
	<script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
	<!-- Animate on Scroll-->
	<script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
	<!-- Slimbox2-->
	<script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
	<!-- Modernizr -->
	<script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
	<!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->