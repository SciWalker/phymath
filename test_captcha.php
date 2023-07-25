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
            <img src="captcha.php?rand=<?php echo rand(); ?>" id='captcha_image'>
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
                $subject = "Message sent using your contact form";
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
