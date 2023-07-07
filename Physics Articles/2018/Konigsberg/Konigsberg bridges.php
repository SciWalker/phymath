<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Konigsberg Bridge</title>
  <!-- Meta -->
  
  <meta name="description" content="Seven Konigsberg Bridges">
  <meta name="author" content="Elijah Wong">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <!-- Favicon -->
  <link href="favicon.html" rel="shortcut icon">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="../../../assets/css/bootstrap.css" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../../../assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../assets/css/nexus.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="../../../assets/css/custom.css" rel="stylesheet">
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


<h1>Seven Konigsberg Bridges</h1>
Let’s tackle the following puzzle below:
Which of the figure below is impossible to be drawn either without lifting the pen from the paper or without tracing the same line more than once?
<div class="row">
  <div class="column">
    <button id="a" onclick="showWrong()"><img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 1a.png" alt="Snow" style="size:44%"></button>
  </div>
  <div class="column">
    <button id="b" onclick="showCorrect()"><img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 1b.png" alt="Forest" style="size:44%"></button>
  </div>
  <div class="column">
    <button id="c" onclick="showWrong()"><img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 1c.png" alt="Mountains" style="size:44%"></button>
  </div>
    <div class="column">
    <button id="d" onclick="showWrong()"><img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 1d.png" alt="Mountains" style="size:44%"></button>
  </div>
</div>



                    
<b>Figure 1</b>
If you are restricted to answer this question within 10 seconds, which option will you choose as the answer?



<p id="demo"></p>

<script>
function showCorrect() {
  alert("You chose the correct answer!");
}
function showWrong() {
  alert("You chose the wrong answer!");
}
</script>



It is hard to tell, right? In the first glance, we might be tempted to choose figure D, simply because it is the most complicated picture among all.

However, D is not the right answer! The correct answer is B, if you have chosen the correct answer, congratulation! 

As you have probably noticed, this simple puzzle actually stemmed from a historical problem in mathematics, The seven bridges of konigsberg. This problem had perplexed people living in the city of Konigsberg for many years, before it was finally solved by one of the greatest mathematicians in the history, Leonhard Euler.

The Königsberg bridge problem asks if the seven bridges of the city of Königsberg (formerly in Germany but now known as Kaliningrad and part of Russia, over the river Preger) can all be traversed in a single trip without doubling back, with the additional requirement that the trip ends in the same place it began.

Before we are going into details, let’s take a glance at the map of the seven bridges of konigsberg:


<div class="row">
<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 2.jpg" alt="Snow" style="size:44%">
</div>
<p><b>Figure 2</b>:An old map depicting Königsberg,. The red lines circle the sevens bridges.</p>


<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 3.jpg" alt="Snow" style="size:44%">
<p><b>Figure 3</b>: A simplified version of the map.</p>





<p>We can further simplify the map by taking the four lands in the picture as points. As such, the map can be reduced to a form that is much easier to work with, as shown below:

</p>


<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 4.png" alt="Snow" style="size:44%">
<p><b>Figure 4</b>: Our final simplified version of the map.</p>
It looks familiar, right? Yes, it is familiar to the pictures in the previous question. So our question now is : how to traverse all lines on the map in a single trip? 

<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 5.png" alt="Snow" style="size:44%">
<p><b>Figure 5</b>: Leonhard Euler(AD 1707-1873) was a Swiss mathematician, physicist, astronomer, logician and engineer who pioneered the development of several branches in mathematics, including infinitesimal calculus, graph theory, topology and analytic number theory. </p>


<p>Euler has proven it is impossible to traverse all lines in the mentioned map in a single trip.
</p>


<p>To understand Leonhard Euler’s solution in a simple way, let us start with a point.</p>
<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 6.png" alt="Snow" style="size:44%">
<p><b>Figure 6</b></p>

<p>Any line traverses this point will yield another new line connected to the point as how the bridge is connected to the land.</p>
.
<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 7.png" alt="Snow" style="size:44%">
<p><b>Figure 7</b></p>


<p>Equivalently, for any <a class="link" href="https://en.wiktionary.org/wiki/unicursal">unicursal drawing</a>, if the point is neither a starting point nor an ending point, numbers of lines(N) connected to this point will always be an even number, no matter how many lines has traversed it.</p>

<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 8.png" alt="Snow" style="size:44%">
<p><b>Figure 8</b></p>

<p>N is an odd number if and only if the point is the starting point or ending point.</p>

<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 9.png" alt="Snow" style="size:44%">
<p><b>Figure 9</b></p>
<p>
A point of which N is an odd number is known as an odd number point.

In any unicursal(single trip) drawing, there are only two odd number points, which are the starting point and the ending point.

Hence, it is impossible to draw a unicursal drawing which contains more than two odd number point.

As what we saw in Figure 4, there are four odd number points in the map, which make it impossible to be drawn by using a unicursal line. In other words, It is impossible for us to find a way to traverse all 7 bridges in Konigsberg in a single trip, provided that we only travel on the lands and bridges.

Back to our previous IQ question, by applying the same principle, we can easily deduce that picture C which has 4 odd number points cannot be drawn using a unicursal line.

In the history of mathematics, Euler's solution of the Königsberg bridge problem is considered to lay down  the foundation of graph theory and one of the first proofs in the theory of networks. In addition, Euler's recognition that the key information was the number of bridges and the list of their endpoints (rather than their exact positions) presaged the development of topology.

Well,  what is the use if we know the solution of the Konigsberg bridges? Any application of it?
Here i will show you one.
</p>

<h3>Try another question!</h3>
<p>
Jordan is a paperboy. Every morning, the newspaper lorry will unload newspaper to his hostel. Jordan’s job is to deliver newspaper all along the streets(blue lines in figure 10) in the town he lives, and back to the newspaper office(“F” in figure 10 ) to make a report after he has finished his job.  Suppose Jordan can choose a hostel to live among position A, B, C and D, which  is the most convenient place for him to do his job?</p>
<img src="http://www.phymath.com/Physics Articles/2018/Konigsberg/figure 10.png" alt="Snow" style="size:44%">
<p><b>Figure 10 </b></p>
<p>
Since you have studied the solution of the konigsberg’s bridges, you can find the answer easily now, isn’t it?
</p>
  

            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("/home/sciwalker/public_html/footer_2018.html") ?>

  <!-- JS -->
  <script type="text/javascript" src="../../../assets/js/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../../assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../../assets/js/scripts.js"></script>
  <!-- Isotope - Portfolio Sorting -->
  <script type="text/javascript" src="../../../assets/js/jquery.isotope.js" type="text/javascript"></script>
  <!-- Mobile Menu - Slicknav -->
  <script type="text/javascript" src="../../../assets/js/jquery.slicknav.js" type="text/javascript"></script>
  <!-- Animate on Scroll-->
  <script type="text/javascript" src="../../../assets/js/jquery.visible.js" charset="utf-8"></script>
  <!-- Slimbox2-->
  <script type="text/javascript" src="../../../assets/js/slimbox2.js" charset="utf-8"></script>
  <!-- Modernizr -->
  <script src="/home/sciwalker/assets/js/modernizr.custom.js" type="text/javascript"></script>
  <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->