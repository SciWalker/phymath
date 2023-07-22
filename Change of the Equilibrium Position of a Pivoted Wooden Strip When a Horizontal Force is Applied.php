
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Change of the Equilibrium Position of a Pivoted Wooden Strip When a Horizontal Force is Applied</title>
  <!-- Meta -->
  
  <meta name="description" content="Change of the Equilibrium Position of a Pivoted Wooden Strip When a Horizontal Force is Applied">
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
  <?php include("header_2018.html") ;?>
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

</header>
<h2>Change of The Equilibrium Position of a Pivoted Wooden Strip</h2>
Our next formula derivation is from a year 2011 question(<a href="https://drive.google.com/file/d/1ITF6eGt9szsUXpgDyOWc4f63b2BvP74n">9702_s11_qp_32.pdf</a>). The derivation of this example would again require the knowledge of moment (torque). Here is the excerpt of the diagram from the past year,
<br>
<a href="http://www.phymath.com/Fig-ruler.PNG"><img src="http://www.phymath.com/Fig-ruler.PNG" class="img" align="middle" /></a>
<br>
and the formula.
<br>
<a href="http://www.phymath.com/formula.PNG"><img src="http://www.phymath.com/formula.PNG" class="img" /></a>
<h2>Derivation</h2>
The wooden strip is held stationary by three forces, namely the weight of the wooden strip, the horizontal force acted by the string due to the slotted masses, and the contact force exerted by the nail at the top of the strip. There is a rotational equilibrium whereby all the moments exerted by the three forces were balanced in the anticlockwise and the clockwise directions.

To start with, we label the heights and lengths on the diagram as follows:
<br>
<a href="slanted-diagram.PNG"><img src="slanted-diagram.PNG" alt="" class="img"  /></a>
<br>
We denote the weight of the wooden strip as $W$, the horizontal force due to the wooden strip as $mg$, the horizontal distance between the centre of gravity of the wooden strip and the nail as $x_2$, the vertical height from the centre of gravity to the nail as $h'$, and the total height from the ground to the nail as $H$. After we have defined the symbols, let's write down the formula of the triangles as:
\begin{equation}
\sin \theta = \frac{x_2}{\frac{L}{2} }, \cos \theta =\frac{H-h}{l},
\end{equation}
where the angle $\theta$ is the angle made by the wooden strip to the horizontal.
We apply the principle of moment about the position of the nail,
\begin{equation}
mg \cos \theta \times l=W\sin \theta\times \frac{L}{2}----(1)
\end{equation}
rearrange the formulae of the triangles to obtain
\begin{equation}
\frac{L}{2}=\frac{x_2}{\sin \theta}----(2)
\end{equation}
and 

\begin{equation}
\cos \theta \times l= (H-h) ---- (3)
\end{equation}
Now, we apply the Pythagoras theorem to the second triangle:
\begin{equation}
(\frac{L}{2})^2=h^2+x_2^2
\end{equation}
\begin{equation}
(x_2)^2=(\frac{L}{2})^2-h'^2----(4)
\end{equation}
Substitute equations (2) and (3) into equation (1):
\begin{aligned}
mg(H-h)&=W \sin\theta \times \frac{x_2}{\sin \theta}\\
mg(H-h)&=W\times x_2\\
(mg(H-h))^2&=W^2x^2_2 ----(5)
\end{aligned}
The two triangles are similar, so we can write their relations as
\begin{equation}
\frac{L/2}{h'}=\frac{l}{H-h}\Rightarrow \frac{L^2}{4l^2}(H-h)^2=h'^2 ----(6)
\end{equation}
Substitute (4) into (5):
\begin{equation}
m^2g^2(H-h)^2=W^2((\frac{L}{2})^2-h'^2)----(7)
\end{equation}
Substitute (6) into (7):
\begin{equation}
m^2g^2(H-h)^2=\frac{W^2L^2}{4}-W^2\frac{L^2}{4l^2}(H-h)^2
\end{equation}
Finally, by dividing both sides with (H-h)^2,
\begin{aligned}
m^2g^2&=\frac{W^2L^2}{4(H-h)^2}-W^2\frac{L^2}{4l^2}\\
\Rightarrow \frac{1}{(H-h)^2}&=\frac{4m^2}{M^2L^2}-\frac{1}{l^2}
\end{aligned}

So we have again derived the formula for another past year. Got question? Feel free to write your opinion at the column below for discussion.

  

            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("footer_2018.html") ?>

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