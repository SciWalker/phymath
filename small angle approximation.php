<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Small Angle Approximation</title>
  <!-- Meta -->
  
  <meta name="description" content="small angle approximation">
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
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
      processEscapes: true
    }
  });
  </script><script type="text/javascript" src="/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script> 
<h1>Small angle approximation</h1>
<p>
Ever wonder how those beautiful equations come from? 

\begin{equation}
T=2\pi (\frac{l}{g}), n\lambda = \frac{ax}{D}
\end{equation}
</p>
<p>
There are many ways we use to derive the equations, some were derived from very basic assumptions and basic algebras (cancellation, rearrangement), some were derived from higher level mathematics like <a href="http://tutorial.math.lamar.edu/Classes/CalcI/LHospitalsRule.aspx"> L'Hospital's Rule </a>. In A level, some equations can be derived without knowing advanced levels calculus or integrals. Now, we are going to explore one of the useful tools in derivation, namely, the small angle approximation.

</p>

<p>
When the angle is small, the approximation reads
$\sin \theta \approx \theta$, 
You can try this simulation below to verify the relation.

$\theta$: <input type="text" name="lname" id="frm1"><br><br>
</p>
<p>Click "Try it" to display the value of each element in the form.</p>

<button onclick="myFunction()">Try it</button>
<p>Result (sin$\theta$)</p>
<p id="demo">sin $\theta$=</p>

<script>
function myFunction() {
    x = document.getElementById("frm1").value;
    x=Math.sin(x)
    document.getElementById("demo").innerHTML = x;
}
</script>
<p>
The proof of this relation can be seen from Maclaurin series, when we expand the series of $\sin(\theta)$, the result would be 
\begin{equation}
\sin(\theta)\approx \theta -\frac{\theta^3}{3!}+\frac{\theta^5}{5!}-...
\end{equation}
As you may see from there, if $\theta$ is less than 1, the second term onward would be much smaller to the point of being negligible. For instance, a $\theta$ of 0.5 would give Maclaurin expansion of
\begin{align}
\sin(0.5)&\approx (0.5) -\frac{0.5^3}{3!}+\frac{0.5^5}{5!}-...\\
&=0.5-0.2083-0.00026\\
&=0.479\approx 0.5
\end{align}
One of the examples of this method is the derivation of $ax/D=n\lambda$. When we were able to derive until the part where $n \lambda =a \sin(\theta)$, we need to apply small angle approximation and get to $n \lambda =a \tan(\theta)$. After that, apply $\tan(\theta)=D/x$ to get to the final equation, that is $n\lambda = \frac{ax}{D}$.
</p>
<img src="http://www.phymath.com/assets/img/ax over D diagram.png" />
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