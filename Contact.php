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
    display_contact_form();
} elseif ($action == "submit") {
    /* Send the submitted data */

    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $message = trim($_REQUEST['message']);
    $subject = trim($_REQUEST['subject']);
    $enteredCaptcha = trim($_POST['captcha']);

    // Captcha verification
    if (!empty($enteredCaptcha)) {
        if (strcasecmp($_SESSION['captcha'], $enteredCaptcha) != 0) {
            // Captcha failed
            echo "<p style='color:red;'>Captcha verification failed. Please try again.</p>";
            // Regenerate captcha
            regenerate_captcha();
            // Redisplay the form
            display_contact_form();
        } else {
            // Captcha is correct, process the contact form here.
            if (empty($name) || empty($email) || empty($message)) {
                echo "<p style='color:red;'>All fields are required, please fill the form again.</p>";
                // Regenerate captcha
                regenerate_captcha();
                // Redisplay the form
                display_contact_form();
            } else {
                $from = "From: $name<$email>\r\nReturn-path: $email";
                $subject = "$subject";
                if (mail("admin@phymath.com", $subject, $message, $from)) {
                    echo "<p style='color:green;'>Email sent successfully!</p>";
                } else {
                    echo "<p style='color:red;'>Failed to send email. Please try again.</p>";
                }
                // Optionally, regenerate captcha after successful submission
                regenerate_captcha();
                // Redisplay the form
                display_contact_form();
            }
        }
    } else {
        echo "<p style='color:red;'>Please enter the captcha code.</p>";
        // Regenerate captcha
        regenerate_captcha();
        // Redisplay the form
        display_contact_form();
    }
}

/**
 * Function to display the contact form
 */
function display_contact_form() {
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="action" value="submit">
        <label>Your name:</label><br>
        <input name="name" type="text" value="" size="30"/><br>
        <label>Your email:</label><br>
        <input name="email" type="text" value="" size="30"/><br>
        <label>Subject:</label><br>
        <input name="subject" type="text" value="" size="30"/><br>
        <label>Message:</label><br>
        <textarea name="message" rows="7" cols="30"></textarea><br>
        <label><strong>Enter Captcha:</strong></label><br />
        <input type="text" name="captcha" /><br/>
        <p>
            <img src="Captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
        </p>
        <p>Can't read the image?
            <a href='javascript: refreshCaptcha();'>click here</a>
            to refresh
        </p>
        <input type="submit" value="Send email"/>
    </form>
    <script>
        // Refresh Captcha
        function refreshCaptcha() {
            var img = document.getElementById('captcha_image');
            img.src = 'Captcha.php?rand=' + Math.random();
        }
    </script>
    <?php
}

/**
 * Function to regenerate the captcha
 */
function regenerate_captcha() {
    // Unset the current captcha session
    unset($_SESSION['captcha']);
    // Optionally, you can regenerate the captcha here if not handled in Captcha.php
    // For example:
    // $_SESSION['captcha'] = generate_new_captcha();
}
?>

<script>
    // Refresh Captcha
    function refreshCaptcha() {
        var img = document.getElementById('captcha_image');
        img.src = 'Captcha.php?rand=' + Math.random();
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
