<?php
session_start();

// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Main logic based on the 'action' parameter
 */
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

if ($action == "") {
    /* Display the contact form */
    display_contact_form();
} elseif ($action == "submit") {
    /* Process the submitted data */
    process_form_submission();
}

/**
 * Function to display the contact form
 */
function display_contact_form() {
    ?>
    <!DOCTYPE html>
    <!-- === BEGIN HEADER === -->
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
        <link rel="stylesheet" href="assets/css/bootstrap.css">

        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/nexus.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/custom.css">

        <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php include("header_2018.html"); ?>
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="content" class="container">
                <div class="row margin-vert-30">
                    <!-- Side Column -->
                    <?php include("sidebar_2018.html"); ?>
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
                            <p> Email: <a class="link" href="mailto:admin@phymath.com">admin@phymath.com</a></p>
                            <p>Facebook: <a class="link" href="https://www.facebook.com/phymathpage">https://www.facebook.com/phymathpage</a></p>
                            <p>Twitter: <a class="link" href="https://twitter.com/PhyMath_Admin">https://twitter.com/PhyMath_Admin</a></p>

                            <!-- Contact Form -->
                            <?php if (isset($_SESSION['form_error'])): ?>
                                <p style="color:red;"><?php echo $_SESSION['form_error']; ?></p>
                                <?php unset($_SESSION['form_error']); ?>
                            <?php endif; ?>
                            <?php if (isset($_SESSION['form_success'])): ?>
                                <p style="color:green;"><?php echo $_SESSION['form_success']; ?></p>
                                <?php unset($_SESSION['form_success']); ?>
                            <?php endif; ?>

                            <form action="" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="action" value="submit">

                                <label>Your name:</label><br>
                                <input name="name" type="text" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" size="30" required/><br>

                                <label>Your email:</label><br>
                                <input name="email" type="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" size="30" required/><br>

                                <label>Subject:</label><br>
                                <input name="subject" type="text" value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>" size="30"/><br>

                                <label>Message:</label><br>
                                <textarea name="message" rows="7" cols="30" required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea><br>

                                <label><strong>Enter Captcha:</strong></label><br />
                                <input type="text" name="captcha" required/><br/>

                                <p>
                                    <img src="Captcha.php?rand=<?php echo rand(); ?>" id="captcha_image" alt="CAPTCHA Image">
                                </p>
                                <p>Can't read the image?
                                    <a href="javascript: refreshCaptcha();">click here</a>
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
                            <!-- End Contact Form -->

                            <!-- End Main Content -->
                        </div>
                        <!-- End Main Column -->
                </div>
            </div>
            <!-- === END CONTENT === -->
        <?php include("footer_2018.html"); ?>

        <!-- JS -->
        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/scripts.js"></script>
        <!-- Isotope - Portfolio Sorting -->
        <script type="text/javascript" src="assets/js/jquery.isotope.js"></script>
        <!-- Mobile Menu - Slicknav -->
        <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
        <!-- Animate on Scroll-->
        <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
        <!-- Slimbox2-->
        <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
        <!-- Modernizr -->
        <script src="assets/js/modernizr.custom.js"></script>
        <!-- End JS -->
    </body>
    </html>
    <!-- === END FOOTER === -->
    <?php
}

/**
 * Function to process form submission
 */
function process_form_submission() {
    // Trim and sanitize user inputs
    $name = isset($_POST['name']) ? htmlspecialchars(trim($_POST['name'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $message = isset($_POST['message']) ? htmlspecialchars(trim($_POST['message'])) : '';
    $subject = isset($_POST['subject']) ? htmlspecialchars(trim($_POST['subject'])) : '';
    $enteredCaptcha = isset($_POST['captcha']) ? trim($_POST['captcha']) : '';

    // Validate CAPTCHA
    if (!empty($enteredCaptcha)) {
        if (!isset($_SESSION['captcha'])) {
            $_SESSION['form_error'] = "Session expired. Please try again.";
            header("Location: Contact.php");
            exit();
        } elseif (strcasecmp($_SESSION['captcha'], $enteredCaptcha) != 0) {
            // Captcha failed
            $_SESSION['form_error'] = "CAPTCHA verification failed. Please try again.";
            header("Location: Contact.php");
            exit();
        }
    } else {
        $_SESSION['form_error'] = "Please enter the CAPTCHA code.";
        header("Location: Contact.php");
        exit();
    }

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        $_SESSION['form_error'] = "All fields except subject are required. Please fill out the form again.";
        header("Location: Contact.php");
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['form_error'] = "Invalid email format. Please enter a valid email address.";
        header("Location: Contact.php");
        exit();
    }

    // Prepare email headers
    $from = "From: $name <$email>\r\n";
    $to = "admin@phymath.com";
    $email_subject = !empty($subject) ? $subject : "Contact Form Submission";

    // Send email
    if (mail($to, $email_subject, $message, $from)) {
        $_SESSION['form_success'] = "Email sent successfully!";
    } else {
        $_SESSION['form_error'] = "Failed to send email. Please try again.";
    }

    // Unset CAPTCHA after submission to prevent reuse
    unset($_SESSION['captcha']);

    // Redirect back to contact form
    header("Location: Contact.php");
    exit();
}

/**
 * Function to regenerate the captcha
 */
function regenerate_captcha() {
    // Unset the current captcha session
    unset($_SESSION['captcha']);
    // The new captcha will be generated when the Captcha.php is called to display the image
}
?>
