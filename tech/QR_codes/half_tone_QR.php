<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>QR codes</title>
  <!-- Meta -->
  
  <meta name="description" content="QR codes">
  <meta name="author" content="Elijah Wong">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <!-- Favicon -->
  <link href="favicon.html" rel="shortcut icon">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.css" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../../assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/nexus.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/custom.css" rel="stylesheet">
  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
</head>
<body>
  <?php include("/home/sciwalker/public_html/header_2018.html") ;?>
    <!-- === END HEADER === -->
    <!-- === BEGIN CONTENT === -->
    <div id="content" class="container">
      <div class="row margin-vert-30">
        <!-- Side Column -->
            <?php include("/home/sciwalker/public_html/sidebar_2018.html") ;?>
          <!-- End Side Column -->
          <!-- Main Column -->
          <div class="col-md-9">
            <!-- Main Content -->
<header><script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
      processEscapes: true
    }
  });
  </script><script type="text/javascript" src="/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<style>
table, th, td {
    border: 1px solid black;
}
</style>

</header>
<h1> Visual QR Codes </h1>



<p>Stereographic projection is a projection from the south pole of $S^3$ to the equatorial three-dimensional hyperplane, the result is a family of nested, coaxial, concentric tori as shown in figure below.</p>
<div style="width:image width px; font-size:80%; text-align:center;"><img src="hopf.png" alt="Visualization of the nested tori" style="padding-bottom:0.5em;" />The figure above shows the Stereographic projection of the $S^3$ Hopf fibration, note the nested tori which consist of circles that are linked together, these circles correspond to the points of $(X_0,X_1)$. The infinite line is what we get when we project the south pole (which is our central point of projection) to an extra point at infinity. For $Z_1=0$ we get the circle which sits horizontally on the x-y plane.</div>
<div style="width:image width px; font-size:80%; text-align:center;"><img src="HopfSingleTorus.png" alt="Visualization of the nested tori" style="padding-bottom:0.5em;" />A close-up view of the inner torus along with the disjoint circles.</div>
<h2>Properties of Stereographic Projections</h2>
<p>Stereographic projection is conformal, i.e. it preserves angles,  such that the angle between any two lines on three-sphere must be the same between when these lines are projected to the hyperplane in $\mathbb{R}^3$. Moreover, the coordinates under stereographic projection only has one point not covered, that is, the central point (south pole) where all the great circles that pass through this point will be projected into a line with infinite length as is indicated in figure below. </p>
<div style="width:image width px; font-size:80%; text-align:center;"><img src="villarceau circles.PNG" alt="Villarceau circles" style="padding-bottom:0.5em;" />Top view of the stereographic projection with fewer circles, it shows the Villarceau circles which are linked together (in a non-intersecting way as shown by previous figure) to form the nest tori.</div>

In the <a class = "link" href="https://phymath.com/Physics%20Articles/2019/Hopf%20Fibration%20and%20Single%20Qubit.php">next part</a>, we will explore on how the $S^3$ Hopf fibration is related to the quantum entanglement and the space of 1 qubit.

            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("/home/sciwalker/public_html/footer_2018.html") ?>

  <!-- JS -->
  <script type="text/javascript" src="../../assets/js/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../assets/js/scripts.js"></script>
  <!-- Isotope - Portfolio Sorting -->
  <script type="text/javascript" src="../../assets/js/jquery.isotope.js" type="text/javascript"></script>
  <!-- Mobile Menu - Slicknav -->
  <script type="text/javascript" src="../../assets/js/jquery.slicknav.js" type="text/javascript"></script>
  <!-- Animate on Scroll-->
  <script type="text/javascript" src="../../assets/js/jquery.visible.js" charset="utf-8"></script>
  <!-- Slimbox2-->
  <script type="text/javascript" src="../../assets/js/slimbox2.js" charset="utf-8"></script>
  <!-- Modernizr -->
  <script src="../../assets/js/modernizr.custom.js" type="text/javascript"></script>
  <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->