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
<h1 style= "text-align: center;">Common Misconceptions About Newton’s Third Law</h1>
<p class="article">
Isaac Newton’s third law of motion is perhaps his most famous and ingenious law that, along with his first and second law, establish the foundation of classical mechanics. But Newton’s third law is also his most misunderstood work, especially among high school students. These misconceptions stem from the fact that the relation between the forces and objects that are acted upon are not well understood.

Let’s have a look at the Newton’s third law: “When one body exerts a force on a second body, the second body simultaneously exerts a force equal in magnitude and opposite in direction on the first body.”

So the Earth will act on a person with a gravitational force 600 N, and the person acts on the Earth with a gravitational force 600 N. Generally, if an object A acts on object B (as pushing force F<sub>AB</sub>), object B will also act a pushing force on object A (F<sub>BA</sub>). So we have a F<sub>AB</sub> and F<sub>BA</sub> as the Newton’s third law pair.  

In some school syllabi F<sub>AB</sub> is also called the action force while F<sub>BA</sub> is called the reaction force, or vice versa. This nomenclature actually has a tendency to imply causality in relating these two forces, which we will discuss in an example.

There are 4 conditions for two forces (such as F<sub>AB</sub> and F<sub>BA</sub>) to be the Newton’s third law pair:
<ol style= "margin-left: 170px;">
<p>
<li>  The first object in F<sub>AB</sub> must be the second object in F<sub>BA</sub>, and vice versa.</li>
<li>  The direction of force F<sub>AB</sub> must be in the opposite direction to F<sub>BA</sub>.</li>
<li> The magnitude of these two forces must be equal.</li>
<li> These two forces must be of the same type.</li>
</p>
</ol>
</p>

<h2 style= "text-align: center;">Misconception 1: Third Law Pair Acting on the Same Object</h2>
<p class="article">
A box (let’s label it as A) rests on a table, it is subject to two forces, one is the gravitational force acted by the ground (Earth) on the box, which we will denote as F<sub>GA</sub>. The other force is the normal force acted by the table on the box, and we shall denote this force as F<sub>TA</sub>.
 </p>
<div style="text-align:center;" >
<img src="/Physics Articles/Feb/Newton's third law objects.jpg" align="middle" alt="Mountain View" style="width:917 px;height:567px;">
</div>

<p class="article">
Students always hinge on the misconception that F<sub>TA</sub> and F<sub>GA</sub> are two Newton's third law pair on the fact that these two forces are opposite in direction and seemed to have a same magnitude. They tend to apply Newton's Third Law to pairs of 'equal and opposite' forces acting on the same object.Unfortunately, that will be followed with a violation of the equilibrium of forces. Moreover, F<sub>TA</sub> is a normal force and F<sub>GA</sub> is a gravitational force, and they are acting on the same objects. Therefore, both conditions 3 and 4 are violated in this case, and these two forces are not Newton’s third law pair. 

</p>
<h2 style= "text-align: center;">Misconception 2: Action Force “Caused” the Reaction Force</h2>
<p class="article">
The other misconception is that students always thought of the reaction force as a type of effect after the action force has been applied. Along this line of thinking, it is therefore easy to see the second force (reaction force) as being there because of the first (action force), and even happening some time after the first. This is incorrect; the forces are perfectly simultaneous, and are there for the same reason. It should be noted that the terms action force and reaction force for two different objects can be flipped.
Let's look at an example of the Earth-Moon system:
</p>
<div style="text-align:center;" >
<img src="/Physics Articles/Feb/Newton's Third Law-Earth Moon.jpg" alt="Earth Moon" style="width:780px;height:540px; ">
</div>

<p class="article">

The Earth acts on the Moon with a gravitational force F<sub>EM</sub> of <a href="https://www.codecogs.com/eqnedit.php?latex=2.0\times&space;10^{20}" target="_blank">
	<br>
	<img src="https://latex.codecogs.com/gif.latex?2.0\times&space;10^{20}" title="2.0\times 10^{20}" /></a> N, while the Moon also acts on the Earth with a gravitational force F<sub>ME</sub> of <a href="https://www.codecogs.com/eqnedit.php?latex=2.0\times&space;10^{20}" target="_blank"><img src="https://latex.codecogs.com/gif.latex?2.0\times&space;10^{20}" title="2.0\times 10^{20}" /></a>
<br>
N. Even though we are accustomed to the concept that the Moon is orbiting around the Earth and not the otherway round, the fact is that the gravitational force acted by the Moon on the Earth caused the Earth to wobble around the common <a href="https://en.wikipedia.org/wiki/Barycenter">barycenter</a> of the Moon and the Earth. Therefore, we say these two forces are simultaneous and symmetric in nature. 

We hoped that these explanations would clear some clouds over the natures of the Newton's third law. 
</p>

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




