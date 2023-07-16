<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<!-- Title -->
	<title>Dimensions and Dimensional Analysis</title>
	<!-- Meta -->
	
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
				<div class="col-md-3">
					<!-- Recent Posts -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">Recent Posts</h3>
						</div>
						<div class="panel-body">
							<ul class="posts-list margin-top-10">
								<li>
									<div class="recent-post">
										<a href="#">
											<img class="pull-left" src="assets/img/blog/thumbs/thumb1.jpg" alt="thumb1">
										</a>
										<a href="#" class="posts-list-title">Sidebar post example </a>
										<br>
										<span class="recent-post-date">
										July 30, 2013
										</span>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<div class="recent-post">
										<a href="#">
											<img class="pull-left" src="assets/img/blog/thumbs/thumb2.jpg" alt="thumb2">
										</a>
										<a href="#" class="posts-list-title">Sidebar post example </a>
										<br>
										<span class="recent-post-date">
										July 30, 2013
										</span>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<div class="recent-post">
										<a href="#">
											<img class="pull-left" src="assets/img/blog/thumbs/thumb3.jpg" alt="thumb3">
										</a>
										<a href="#" class="posts-list-title">Sidebar post example </a>
										<br>
										<span class="recent-post-date">
										July 30, 2013
										</span>
									</div>
									<div class="clearfix"></div>
								</li>
								<li>
									<div class="recent-post">
										<a href="#">
											<img class="pull-left" src="assets/img/blog/thumbs/thumb4.jpg" alt="thumb4">
										</a>
										<a href="#" class="posts-list-title">Sidebar post example </a>
										<br>
										<span class="recent-post-date">
										July 30, 2013
										</span>
									</div>
									<div class="clearfix"></div>
								</li>
							</ul>				</div>
						</div>
						<!-- End recent Posts -->
						<!-- About -->
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">About</h3>
							</div>
							<div class="panel-body">
								Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
							</div>
						</div>
						<!-- End About -->
						
					</div>
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
</header><header><strong>Dimensions</strong>
1.) A dimension is an abstract quantity of which it describes how a physical quantity is constituted by the
fundamental physical quantities.
2.) For example, the dimension of length is L whereas the dimension of area is $ L^2 $.
3.) The below table shows some fundamental dimensions and their corresponding symbols.
<table>
<tbody>
<tr>
<td><b>Dimension</b></td>
<td><b>Symbol</b></td>
</tr>
<tr>
<td>Length</td>
<td>L</td>
</tr>
<tr>
<td>Mass</td>
<td>M</td>
</tr>
<tr>
<td>Time</td>
<td>T</td>
</tr>
<tr>
<td>Electric Current</td>
<td>I</td>
</tr>
<tr>
<td>Temperature</td>
<td>$ \theta $</td>
</tr>
<tr>
<td>Amount of Matter</td>
<td>N</td>
</tr>
<tr>
<td>Light Intensity</td>
<td>J</td>
</tr>
</tbody>
</table>
4.) We use a square bracket to denote dimension. For instance, [M] means �dimension of mass�.

5.) Dimensions are independent of units, yet they provide us some clues of units.

Examples 1:
$ [displacement] = L $, hence the unit of displacement must also be a unit of length, eg. cm, m, km...

Example 2 :
$ [area] = L^2 $, hence the unit of area must be a square unit of length, eg. $ cm^2, m^2, km^2 $...

6.) The dimension of all constant is 1.

&nbsp;

<strong>Dimension rules</strong>
Dimension rules are useful to derive the dimension for a specific physical quantity.
Rule 1 : All terms that are added or subtracted must have same dimensions.

Rule 2: Dimensions obey rules of multiplication and division.

Example 1: What is the dimension of velocity?
Solution:
From the equation $ velocity=displacement/time $, we have
\begin{equation}
\begin{split}
[velocity] &amp;=\frac{[length]}{[time]}\\
&amp;=\frac{L}{T}\\
&amp;=LT^-1\\
\end{split}
\end{equation}

Example 2: What is the dimension of acceleration?
Solution:
From the equation $ acceleration= �change of velocity�/ time $, we have
\begin{equation}
\begin{split}
[acceleration] &amp;=\frac{[velocity]}{time}\\
&amp;=\frac{LT^-1}{T}\\
&amp;=LT^-2\\
\end{split}
\end{equation}

Example 3: What is the dimension of force?
Solution:
From the equation $ force=mass*acceleration $, we have
\begin{equation}
\begin{split}
[force] &amp;=[mass]*[acceleration]\\
&amp;=M*LT^-2\\
&amp;=MLT^-2\\
\end{split}
\end{equation}

Rule 3: In scientific equations, the arguments of �transcendental functions�(see in the �Appendices� at the bottom of page) must be dimensionless.
Example:
In all of four equations below, x must be dimensionless.
$ A = ln (x) $
$ B= Sin(x) $
$ C= exp(s) $
$ D= 3^x $

&nbsp;

<strong>Dimensional Analysis</strong>
Dimensional analysis is the analysis of the relationship between different physical quantities in an equation based on dimension rules.

Dimensional analysis has numerous applications. One of the examples is to study the homogeneity of the dimension of an equation.

The dimension of an equation is said to be homogeneous if all the terms in it have the same dimensions or units.

A physics equation is possibly correct if and only if the dimension of the equation is homogeneous.

Hence, dimensional analysis can be considered as a first step to prove whether an equation is correct.

Question 1: Check the below equation for dimensional consistency.
\begin{equation} L=L_0(1-\frac{v^2}{c^2})^{-\frac{1}{2}} \end{equation}
where $L$= length, $L_0$=length of the object when it is at rest , v=velocity of the object, c= speed of light.

Solution:
Since the dimension of $ L $ must be same as $ L_0 $, the only term we need to check is the $\frac{v^2}{c^2}$.
The equation is homogeneous when the dimension of $\frac{v^2}{c^2})$ is equal to one.
\begin{equation} \frac{[v^2]}{[c^2]}= \frac{LT^{-1}}{LT^{-1}}=1\end{equation}
Thus, This equation is homogenous in dimension.

Question 2: Please explain why the below equation must be incorrect.
\begin{equation} V=\frac{5}{3} \pi r^4 \end{equation}
where V = volume, r = radius.

Solution:
We first check for dimensional consistency: Since the dimension for all constant is 1, we have
\begin{equation}
\begin{split}
[V]&amp;= [r^4]\\
L^3&amp;=L^4\\
\end{split}
\end{equation}
This equation is not homogenous in dimension, therefore it must be incorrect.

&nbsp;

<strong>Appendices</strong>

1.)**Transcendental Function are functions of which cannot be represented by algebraic expressions consisting only of the argument and constants. It requires an infinite series of algebraic expressions to describe it completely.

For example:
\begin{equation}
e^x = 1 + x + \frac{x^2}{2!} + \frac{x^3}{3!} +... ...
\end{equation}

2.)\begin{equation} [Any\:Physical\:Quantity]= M^aL^bT^cL^d\theta^e\end{equation}
For example, \begin{equation} [Force]= M^1L^1T^{-2}I^0\theta^0 = MLT^{-2} \end{equation}

</header>
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