
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Introduction to Near Field Communication (NFC)</title>
  <!-- Meta -->
  
  <meta name="description" content="Introduction to Near Field Communication">
  <meta name="author" content="Elijah Wong">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

  <meta property="og:url" content="https://phymath.com/lic_html/Introduction%to%NFC.php">
  <meta property="og:title" content="NFC Introduction">
  <meta name="description" content="An introduction to NFC">
  <meta property="og:description" content="An introduction to NFC">
  <meta property="og:image" content="https://phymath.com/images/logo.png">
  <meta property="og:image:width" content="600">
  <meta property="og:image:height" content="315">
  
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
  <link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
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
<h1>Introduction to Near Field Communication</h1>

<p>

Near-field communication (NFC) is a technology that plays very important roles in today's communication and internet of things (IoT) environment. NFC is a set of communication protocols that enable two electronic devices to establish communication by bringing them a very close range. 
</p>
<p>Some of the most common usages of NFC include payment cards (credit card and debit card) and proximity security cards. However, the potentials of NFC are limitless due to its convenience, security and portability. NFC has many potential uses in the area of social networking, sharing contacts, photos, videos or files.  NFC operates at 13.56 MHz on ISO/IEC 18000-3 air interface and at rates ranging from 106 kbit/s to 424 kbit/s.  
</p>
<img src="assets/img/NFC.webp" alt="NFC field" ><figcaption>Illustration of NFC communication devices</figcaption>


<p>
The generation of the NFC is based on the electromagnetic induction, where an NFC device (usually a phone) induces a changing magnetic field that interact with another NFC device which consists of a coil. In the Near field communication, initiator actively generates an RF field that can power a passive target due to the electromagnetic induction. This enables NFC targets to take very simple form factors such as unpowered tags, stickers, key fobs, or cards. 

</p>
<img src="images/NFC_coil.jpg" alt="NFC coils" ><figcaption>Fig: NFC coil with the integrated circuit</figcaption>
<h2>Advantages of NFC</h2>

<p>
Here is a list of the advantages of NFC
<ul>
<li>
NFC consumes far less power and, in the case of a active-passive communication, doesn't require power supply on the receiver side.
</li>    
<li>NFC could be set up much faster than a Bluetooth, as it doesn't require pairing.</li>
<li>
    NFC could be automatically established, and the devices for NFC are less expensive.
</li>
<li>
    Convenient usage and decent security.
</li>
<li>
    NFC is compatible with the existing passive RFID infrastructures.
</li>
</ul>
</p>
<h2>About Web NFC</h2> <p>The <b>Web NFC API</b> is a API that provides sites the ability to read and write to nearby NFC (Near-Field Communication) devices.</p><p>It allows starting up a scan that informs when an NFC tag matching some <code>options</code> has been tapped. It also provides a method to write a message via NFC.</p>

<p>
    You may visit my page (
<a class = "link"  href="https://www.phymath.com/NFC.php">www.phymath.com/NFC.php</a>
 ) for the demonstration of web NFC on android phone, please note that the web NFC is currently in development but there is an online community (see reference below) that is actively working on this.
</p>


<p>
Here are some important references for NFC:
<ol>
<li>
https://w3c.github.io/web-nfc/#dfn-nfc-peer 
</li>
<li>
https://www.w3.org/2012/nfc/web-api/    
</li>
<li>
https://www.youtube.com/watch?v=Gbv2BIi9i58
</li>
</ol>
</p>




            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("footer_2018.html") ?>

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