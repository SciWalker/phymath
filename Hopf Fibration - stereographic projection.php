<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Hopf Fibration - Stereographic Projection</title>
  <!-- Meta -->
  
  <meta name="description" content="Hopf Fibration, One Qubit, Stereographic Projection, Three-sphere">
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
<h1>Hopf Fibration of 3-sphere</h1>

Our world consists of 3 spatial dimensions and 1 time dimension. But how to perceive or visualize 4 spatial dimensions? Well, there are a number of ways to do so. There are several good examples <a link="https://www.quora.com/How-can-one-visualize-4-dimensional-space" >here</a>  and  <a link = "https://futurism.com/new-perspectives-imagining-a-4d-world">there </a>. using a hypercube (A cube that lives in 4-dimensional space). Here we are going to discuss another way of visualizing the 4-dimensional world by dissecting a sphere that lives in 4 spatial dimensions, a 3-sphere. 

We usually think of a sphere, but the term 'sphere' has a more precise meaning in mathematics. Namely, an n-sphere is a set of points that fulfill this condition:
  \begin{equation}
  x_0^2+x_1^2+...+x_{n+1}^2=r
  \end{equation}
where $x_n$ is the spatial coordinate for the n-th dimension, r is just any positive real number. As an example, for a 1-sphere (1-dimensional sphere), the coordinate equation is 
\begin{equation}
x^2+y^2 = r.
\end{equation}
Basically, this equation is just describing a circle.
For a 2-sphere, the condition is
\begin{equation}
x^2+y^2+z^2=r
\end{equation}
As you might guess, this is an ordinary sphere in layman term, just like the surface of a ball.
<img src="Picture1.png" alt="n-spheres" >
Now, hold your breath, we are going to progress to the next level, a three-sphere. The three-sphere is a sphere that resides in the 4-dimensional space and it fulfills these conditions:
\begin{equation}
x_1^2+x_2^2+x_3^2+x_4^2=r
\end{equation}
where $x_1,...x_4$ are the four spatial coordinate axes. Therefore, a 4-sphere is hard to imagine since the world that we are living in consists of only 3 spatial dimensions.

The Hopf fibration is a projection map from the three-sphere to the two-sphere. It shows how the three-sphere can be built by a collection of circles arranged like points on a two-sphere. An example of the visualization of Hopf Fibration is by using the stereographic projection from the "south pole" of $S^3$ onto an equatorial hyperplane $R^3$

To begin with, we express the complex coordinates of single qubit into their respective real and imaginary parts:
\begin{equation}
Z_0=u+v\textbf{i} , Z_1 = u'+v'\textbf{j}
\end{equation}
<h2>The Hopf Map</h2>
The Hopf map (or in 'layman' term, function) is composed out of two maps  $h_1 \circ h_0$:
<img src="Hopf_map.PNG" alt="Hopf map" >
From there, we obtain
\begin{equation}
C=\frac{n_0}{n_1}e^{i(v_0-v_1)}=X_0+X_1 \textbf{i}
\end{equation}
where $\textbf{i}$ is the imaginary number, and (using Euler formula)
\begin{equation}
X_0=\frac{n_0}{n_1}\cos{(v_0-v_1)}, X_1=\frac{n_0}{n_1}\sin{(v_0-v_1)}
\end{equation}
Since (Z_0,Z_1) are points on the sphere, we could write the following equations:
\begin{equation}\label{Stereo}
\begin{split}
u=&\frac{\cos \nu_1}{\sqrt{1+|C|^2}},\\
v=&\frac{\sin \nu_1}{\sqrt{1+|C|^2}},\\
u'=&\frac{X_0\cos \nu_1-X_1 \sin \nu_1}{\sqrt{1+|C|^2}},\\
v'=&\frac{X_0\cos \nu_1+X_1 \sin \nu_1}{\sqrt{1+|C|^2}}.
\end{split}
\end{equation}
Using these parameters, we can use Mathematica to map the coordinates $(u,v,u',v')\in \mathbb{S}^4$ to $(x,y,z)\in \mathbb{R}^3$ using projection maps (see appendix A):
\begin{equation}
\begin{split}
&\pi: S^3\rightarrow \mathbb{R}^3\\
&(Z_0,Z_1)\in \mathbb{C}^2 \longmapsto \pi(Z_0,Z_1)
\end{split}
\end{equation}
<h3>Stereographic Projections</h3>
Now, we define points on $S^1$ as $(x_0,x_1)$ and points on $\mathbb{R}^1$ as $(X_0)$. By the diagram below (observe the triangles $\triangle PRX_0$ and $\triangle OSX_0$), and since
\begin{equation}
\tan \omega_2=\frac{1}{X_0}=\frac{1-x_1}{x_0},
\end{equation}
we yield
\begin{equation}
X_0=\frac{x_0}{1-x_1}.
\end{equation}
<img src="Stereodetail.png" alt="Stereographic Projection" >
<p>As an analogy to the above construction, we can now define points on $S^3$ as $(x_0,x_1,x_2,x_3)$, then the projection from the south pole $(0,0,0,-1)$ will send the points to the image $(X_0,X_1,X_2)$ by</p>
\begin{equation}\label{CCC}
\begin{split}
X_0=& \frac{x_0}{1-x_3},\\
X_1=& \frac{x_1}{1-x_3},\\
X_2=& \frac{x_2}{1-x_3}.
\end{split}
\end{equation}
The visualization is done using Mathematica, giving us the following equations:
\begin{align}
X_0=&\frac{u'}{1-u},\nonumber\\
X_1=&\frac{v'}{1-u},\\
X_2=&\frac{v}{1-u}.\nonumber
\end{align}
The stereographic projection can also be expressed using polar coordinate system, again by relating triangles $\triangle PRX_0$ and $\triangle OSX_0$, we obtain
\begin{equation}
X_0=\frac{x_0}{1-y}.
\end{equation}
But 
\begin{align}
&\tan \omega_1=\frac{x_0}{1+y}, \nonumber\\
&2\omega_2+2\omega_1=180^\circ ,\label{180}\\
&\tan \omega_3=\frac{1-y}{x_0}.------(1)
\end{align}
Since $\omega_2=90^\circ - \omega_3$, this equation becomes 
\begin{equation}\label{1=3}
\omega_1=\omega_3.
\end{equation}
Substitute this into equation (1), we obtain
\begin{align}
\tan \omega_1=\frac{1}{X_0},
\end{align}
and the expressions for stereographic projection in polar coordinates:
\begin{align}
(R,\omega_2)=&\Bigg( \frac{\sin (2\omega_1)}{1-\cos (2\omega_1)},\omega_2\Bigg).\nonumber
\end{align}
<p>Stereographic projection is a projection from the south pole of $S^3$ to the equatorial three-dimensional hyperplane, the result is a family of nested, coaxial, concentric tori as shown in figure below.</p>
<div style="width:image width px; font-size:80%; text-align:center;"><img src="hopf.png" alt="Visualization of the nested tori" style="padding-bottom:0.5em;" />The figure above shows the Stereographic projection of the $S^3$ Hopf fibration, note the nested tori which consist of circles that are linked together, these circles correspond to the points of $(X_0,X_1)$. The infinite line is what we get when we project the south pole (which is our central point of projection) to an extra point at infinity. For $Z_1=0$ we get the circle which sits horizontally on the x-y plane.</div>
<div style="width:image width px; font-size:80%; text-align:center;"><img src="HopfSingleTorus.png" alt="Visualization of the nested tori" style="padding-bottom:0.5em;" />A close-up view of the inner torus along with the disjoint circles.</div>
<h3>Properties of Stereographic Projections</h3>
<p>Stereographic projection is conformal, i.e. it preserves angles,  such that the angle between any two lines on three-sphere must be the same between when these lines are projected to the hyperplane in $\mathbb{R}^3$. Moreover, the coordinates under stereographic projection only has one point that is not covered, i.e. the central point (south pole). At this point, all the great circles that pass through this point will be projected into a line with infinite length as is indicated in figure below. </p>
<div style="width:image width px; font-size:80%; text-align:center;"><img src="villarceau circles.PNG" alt="Villarceau circles" style="padding-bottom:0.5em;" />Top view of the stereographic projection with fewer circles, it shows the Villarceau circles which are linked together (in a non-intersecting way as shown by previous figure) to form the nest tori.</div>

            <h3>Hopf Fibration Merchandise</h3>
            <p>Fascinated by the beauty and complexity of the Hopf fibration? Now you can wear this mathematical marvel!</p>
            
            <div class="row">
                <div class="col-md-6">
                    <img src="https://m.media-amazon.com/images/I/A13usaonutL._CLa%7C2140%2C2000%7C91Hy1Ue0qOL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_UX679_.png" alt="Hopf Fibration T-Shirt" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h4>Hopf Fibration T-Shirt</h4>
                    <p>Show off your love for advanced mathematics with this stylish Hopf fibration t-shirt. Perfect for mathematicians, physicists, and anyone who appreciates the elegance of higher-dimensional geometry.</p>
                    <ul>
                        <li>High-quality print of the Hopf fibration</li>
                        <li>Available in various sizes</li>
                        <li>100% cotton for comfort</li>
                        <li>Great conversation starter!</li>
                    </ul>
                    <a href="https://amzn.to/4dGfh1Z" class="btn btn-primary" target="_blank">Buy Now on Amazon</a>
                </div>
            </div>


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