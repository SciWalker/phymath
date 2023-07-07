<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta https-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Collision Simulations</title>
  <!-- Meta -->
  
  <meta name="description" content="Hopf Fibration of 2-dimensional sphere">
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
  <link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
  <style>
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
}
</style>
</head>
  <?php include("/home/sciwalker/public_html/header_2018.html") ;?>
<body>


var pointCount = 31;
var i, r;

var x = [];
var y = [];
var z = [];
var c = [];

for(i = 0; i < pointCount; i++) 
{
   r = 10 * Math.cos(i / 10);
   x.push(r * Math.cos(i));
   y.push(r * Math.sin(i));
   z.push(i);
   c.push(i)
}

Plotly.plot('graph', [{
  type: 'scatter3d',
  mode: 'lines+markers',
  x: x,
  y: y,
  z: z,
  line: {
    width: 6,
    color: c,
    colorscale: "Viridis"},
  marker: {
    size: 3.5,
    color: c,
    colorscale: "Greens",
    cmin: -20,
    cmax: 50
  }},                  
]);









            <!-- End Main Content -->
      <!-- === END CONTENT === -->

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


