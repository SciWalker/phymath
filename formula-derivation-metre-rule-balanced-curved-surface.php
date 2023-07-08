
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Formula Derivation - Ruler Balanced on Curved Surface</title>
  <!-- Meta -->
  
  <meta name="description" content="Formula Derivation of Ruler Balanced on Curved Surface">
  <meta name="author" content="Elijah Wong">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <!-- Favicon -->
  <link href="favicon.html" rel="shortcut icon">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/bootstrap.css" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/nexus.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.phymath.com/assets/css/custom.css" rel="stylesheet">
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
In the A level physics practical, it was a common practice for the examiners to hide the exact form of the formula related to the experiment from the students. In most of the experiments, the students would only know the formula in the general form of equation y=ma+b, where a is the x value, m is the gradient, and b is the y-intercept. Therefore, it was almost impossible for the students to understand how a measured physical quantity is related to another quantity in a precise manner. This is to prevent students from calculating the values without really working on the experiment, however, it jeopardizes the students' opportunity to appreciate the beauty of mathematics that underlies the physical equation. So, I would like to make a series of the derivations of the physics formula in the practical question.

Here is the excerpt of one of the past years (<a class = "link" href="http://phymath.com/2010 past year/2010/Question Paper Oct Nov/9702_w10_qp_34.pdf">9702_w10_qp_34.pdf</a>):
<a href="http://www.phymath.com/wp-content/uploads/2017/08/Capture-4.png"><img src="http://www.phymath.com/wp-content/uploads/2017/08/Capture-4.png" alt="" width="802" height="717" class="alignnone size-full wp-image-1184" /></a>
The equation is given as:
\begin{equation}
\frac{1}{h_1-h_2}=\frac{a}{n}+b \end{equation}
<h2>Derivation</h2>
Before paperclips were hung at the cotton loop, the metre rule of mass M was in the state of equilibrium where the pivot point was located at the midpoint of the metre rule (about 50.0 cm from the edge):
<a href="http://www.phymath.com/wp-content/uploads/2017/08/Capture-5.png"><img src="http://www.phymath.com/wp-content/uploads/2017/08/Capture-5.png" alt="" width="404" height="396" class="alignnone size-full wp-image-1188" /></a>

After the paperclips were hung at the cotton loop, The pivot has now moved to a new position (denoted as P'). The paperclips acts a force which is equal to the product of the (number of paperclip $\times$ mass of a paperclip ) and the gravitational acceleration, g. 
There is a net moment in the direction of the force equals to $\tau_c=nmg \sin \theta \times$ (distance from the new pivot).

The centre of gravity of the metre rule exerts a force which results in the anticlockwise moment:
\begin{equation}
\tau_{ac}=Mg(\sin \theta )l
\end{equation}
Where $M=$mass of the metre rule
According to the principle of moment, for a system to be in the state of rotational equilibrium, its clockwise moment must be equal in magnitude to the anticlockwise moment.
\begin{aligned}
\tau_{ac}&=\tau_{c}\\
Mgl \sin \theta &= nmg \sin \theta (x-l)\\
Ml &= nm(0.15-l)\\
xnm&= (M+nm)l\\
\frac{1}{l}&=\frac{M+nm}{xnm} ---(1)
\end{aligned}
where $m$ is the mass of a paperclip and n is the number of paperclip.
We consider that the length $l$ (distance between P' and P) is also equal to the magnitude of the arc $s$ of the circle (beaker). Therefore:
\begin{equation}
l=s=r\theta  ---(2)
\end{equation}
r is the radius of the beaker.
<a href="http://www.phymath.com/wp-content/uploads/2017/08/Capture-2.png"><img src="http://www.phymath.com/wp-content/uploads/2017/08/Capture-2.png" alt="" width="234" height="237" class="alignnone size-full wp-image-1174" /></a>
<br>
Now, let's turn our attention to the tilted metre rule, as shown in this diagram:
<a href="http://www.phymath.com/wp-content/uploads/2017/08/Capture-3.png"><img src="http://www.phymath.com/wp-content/uploads/2017/08/Capture-3.png" alt="" width="599" height="233" class="alignnone size-full wp-image-1175" /></a>



We apply the small angle approximation:
\begin{equation}
\frac{h_1-h_2}{L}=\theta ---(3)
\end{equation}
Substitute the equation (3) into equation (2):
\begin{equation}
l=\frac{(h_1-h_2)r}{L}
\end{equation}
Substitute (4) into (1):
\begin{aligned}
\frac{1}{h_1-h_2}&=\frac{(M+nm)r}{xnmL}\\
&=\frac{Mr}{xnmL}+\frac{r}{xL}\\
&=\frac{1}{n}a+b
\end{aligned}
where $a$=gradient. $b=\frac{r}{xL}$



            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("/home/sciwalker/public_html/footer_2018.html") ?>

  <!-- JS -->
  <script type="text/javascript" src="/home/sciwalker/assets/js/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/home/sciwalker/assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/home/sciwalker/assets/js/scripts.js"></script>
  <!-- Isotope - Portfolio Sorting -->
  <script type="text/javascript" src="/home/sciwalker/assets/js/jquery.isotope.js" type="text/javascript"></script>
  <!-- Mobile Menu - Slicknav -->
  <script type="text/javascript" src="/home/sciwalker/assets/js/jquery.slicknav.js" type="text/javascript"></script>
  <!-- Animate on Scroll-->
  <script type="text/javascript" src="/home/sciwalker/assets/js/jquery.visible.js" charset="utf-8"></script>
  <!-- Slimbox2-->
  <script type="text/javascript" src="/home/sciwalker/assets/js/slimbox2.js" charset="utf-8"></script>
  <!-- Modernizr -->
  <script src="/home/sciwalker/assets/js/modernizr.custom.js" type="text/javascript"></script>
  <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->