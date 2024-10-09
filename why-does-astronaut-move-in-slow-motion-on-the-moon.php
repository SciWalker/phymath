<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Why do Astronauts Move Slowly on the Moon</title>
  <!-- Meta -->
  
  <meta name="description" content="Moon">
  <meta name="author" content="Elijah Wong">
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
            <h1>Why Do Motions on the Moon Seemed Slow</h1>
            <h4>Published on 20, July 2017</h4>
<style>
#myCanvas1 {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
    background:url(/images/mixspaceearth-smaller.png);
position:relative
}
canvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
position:relative
}
#myCanvas {
    border:1px solid #d3d3d3;
    background-color: #f1f1f1;
position:relative
}
</style>
<header><script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    tex2jax: {
      inlineMath: [ ['$','$'], ["\\(","\\)"] ],
      processEscapes: true
    }
  });
  </script><script type="text/javascript" src="/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script> 
The Moon landing was one of the greatest achievements of mankind, it marks the first time we set foot on the alien soil. If you have probably watched the video of Apollo crews exploring the surface of the Moon, then you would notice that they appeared slow and sluggish while he was hopping around the Moon surface. However, his other bodily motions (like swinging hands, planting American flag on the surface) appeared to be normal. There were even some <a class = "link" href="http://thedailybanter.com/2014/07/45-years-apollo-11-debunking-top-11-moon-landing-conspiracy-theories/"> conspiracy theories</a> which claimed that the Moon landing was a hoax, in the sense that all the moon landing clips were actually shot in Hollywood and was played at a slower rate. 
<header><a href= "http://www.phymath.com/assets/img/TopImage/astronautonmoon.gif"><img class="alignnone size-full wp-image-751" src="http://www.phymath.com/assets/img/TopImage/astronautonmoon.gif" alt="" width="320" height="182" /></a></header><header>Figure: Astronaut jumping along on the moon</header>Is time really progressing slower when you are on the Moon? To tackle this problem, let's compare the astronaut on the Moon with a teenager on the Earth, both jumping off with the same upward velocity $9.0\ \mathrm{ms^{-1}}$. Who will stay above the ground for the longer time? (gravitational acceleration on the Earth�s surface is $9.81\ \mathrm{ms^{-2}}$ whereas gravitational acceleration on the Moon is $1.62\ \mathrm{ms^{-2}}$). Let�s denote the gravitational acceleration on the Earth as $a_E$ and the acceleration on the Moon as $a_M$. We have the following quantities:

$\begin{aligned}
a_E&=-9.81 \mathrm{ms^{-2} \ \ (note \ the\ negative\ sign)}\\
a_M&=-1.62 \mathrm{ms^{-2}}\\
u_E&=u_M=10.0 \mathrm{ms^{-2}}\\
\end{aligned} $

Both persons go up and fall back to the ground at the same level, so the displacement is zero as there is no change between their final and initial positions.
$s_E=s_M=0$.
Now, we try to calculate the difference in their time, we make sure of the formula $s=ut+\frac{1}{2}at^2$
$\begin{aligned}
0& =u+\frac{1}{2}at\\
t& =\frac{2 u}{a}
\end{aligned} $

Working with this calculation, we obtain
$\begin{aligned}
t_E&amp;=2.0 \mathrm{s}\\t_M&amp;=12.3\mathrm{s}
\end{aligned} $
<p>Therefore, the reason that astronaut stays longer when he jumps on the Moon surface is due to the low gravity on the Moon. This, however, does not (necessarily) imply that time is faster on the Earth compared with on the Moon. </p>
    <canvas id="myCanvas1"></canvas>
<script>
var myGamePiece2;
var myGamePiece;
var myObstacles = [];
var myScore;
var showpos;
onload=function startGame() {
    myGamePiece = new component(60, 60, 'http://www.html5canvastutorials.com/demos/assets/darth-vader.jpg', 300, 260,"image");
    myGamePiece.gravity = 0.2;
    myGamePiece.acceleratehorizontal=0;
    myScore = new component("30px", "Consolas", "black", 210, 55, "text");
    showpos= new component("30px", "Consolas", "black", 10, 22, "text");
    myGameArea.start();
    myGamePiece2 = new component(30, 60, "/images/boy.png", 100, 260,"image");
    myGamePiece2.gravity = 0.8;
    myGamePiece2.acceleratehorizontal=0;
}
var myGameArea = {
    dcanvas : document.getElementById("myCanvas1"),
    start : function() {
        this.dcanvas.width = 460;
        this.dcanvas.height = 260;
        this.context = this.dcanvas.getContext("2d");
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 20);
        },
    clear : function() {
        this.context.clearRect(0, 0, this.dcanvas.width, this.dcanvas.height);
    }
}
function component(width, height, color, x, y, type) {
    this.type = type;
    if (type == "image") {
        this.image = new Image();
        this.image.src = color;
    }
    this.score = 0;
    this.width = width;
    this.height = height;
    this.speedX = 0;
    this.speedY = -10;    
    this.x = x;
    this.y = y;
    this.gravity = 10;
    this.gravitySpeed = 0;
    this.update = function() {
        ctx = myGameArea.context;
    if (type == "image") {
      ctx.drawImage(this.image, 
        this.x, 
        this.y,
        this.width, this.height);
    } else{
        if (this.type == "text") {
            ctx.font = this.width + " " + this.height;
            ctx.fillStyle = color;
            ctx.fillText(this.text, this.x, this.y);
        } else {
            ctx.fillStyle = color;
            ctx.fillRect(this.x, this.y, this.width, this.height);
        }
    }}
    this.newPos = function() {
        this.gravitySpeed += this.gravity;
        this.speedX+=this.acceleratehorizontal;
        this.x += this.speedX;
        this.y += this.speedY + this.gravitySpeed;
        this.hitBottom();
    }
    this.hitBottom = function() {
        var rockbottom = myGameArea.dcanvas.height - this.height;
        if (this.y > rockbottom) {
            this.y = rockbottom;
            this.gravitySpeed = 0;
        this.speedY = 0;    
        }
    }
}
function updateGameArea() {
    var x, height, gap, minHeight, maxHeight, minGap, maxGap;
    myGameArea.clear();
    myGameArea.frameNo += 1;
 //   myScore.text="a_x "+myGamePiece.acceleratehorizontal+" a_y "+myGamePiece.gravity;
 myScore.text="";
    myScore.update();
    myGamePiece.newPos();
    myGamePiece2.newPos();
     showpos.text="";
 //   showpos.text="Position = "+myGamePiece.x.toFixed(2)+", "+myGamePiece.y.toFixed(2);
    showpos.update();
    myGamePiece.update();
    myGamePiece2.update();
}
</script>
<div><input type="button" value="Let them jump!" onclick="myGamePiece2.speedY = -10;myGamePiece.speedY=-10; "></div>
Let's have fun with simulation! Just click on the "Let them jump!" button just at the figure above to watch these two guys jump on the Moon and Earth surface respectively. Please note that they are jumping with the same upward speed.
&nbsp; 
&nbsp; 

<h2>Pendulum System - Another Comparison</h2>
    <div><script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js' type='text/javascript'></script></div>
    <div class='sidebar'>
      <form id='set_variables_form'>
        <label for='mass1'>Mass1:</label>
        <input id='mass1' max='50' min='1' type='range' value='10'>
        <label for='Phi1'>Phi1 (in deg):</label>
        <input id='Phi1' max='90' min='-90' type='range' value='50' step='5'>
        <label for='l1'>length</label>
        <input id='l1' max='250' min='100' type='range' value='150'>
  <label for='g'>g-Moon   <<>>   g-Earth</label>
        <input id='g' max='600' min='100' type='range' step='500'>
        <input class='submit-btn' type='submit' value='Start Simulation'>
      </form>
      <footer style='padding-left: 10px'>
        <a href='https://github.com/micaeloliveira/physics-sandbox'>
        </a>
      </footer>
    </div>
    <canvas class='phys-canvas' height='400' id='myCanvas' width='700' background ></canvas>
  <script>
$('#set_variables_form').submit(function (e) {
  e.preventDefault();
  console.log($('#mass1').val());
  m1     = $('#mass1').val();
  Phi1   = $('#Phi1').val()/180*(Math.PI);
  l1     = $('#l1').val();
  g =$('#g').val();
  d2Phi1 = 0;
  dPhi1  = 0;
  run();
});
function drawCircle(myCircle, context) {
  context.beginPath();
  context.arc(myCircle.x, myCircle.y, myCircle.mass, 0, 2 * Math.PI, false);
  context.fillStyle = '#000';
  context.fill();
  context.lineWidth = 5;
  context.strokeStyle = 'black';
  context.stroke();
}
function drawLine(myLine, context) {
  context.beginPath();
  context.moveTo(myLine.x0, myLine.y0);
  context.lineTo(myLine.x, myLine.y);
  context.strokeStyle = 'blue';
  context.stroke();
}
function animate(myCircle1,myLine1,  canvas, context) {
  mu      =  m1;
  d2Phi1  =  -g/l1*Phi1;
  dPhi1   += d2Phi1*time;
  Phi1    += dPhi1*time;
  myCircle1.x = X0+l1*Math.sin(Phi1);
  myCircle1.y = Y0+l1*Math.cos(Phi1);
  myLine1.x  = myCircle1.x;
  myLine1.y  = myCircle1.y;
  context.clearRect(0, 0, canvas.width, canvas.height);
  drawLine(myLine1, context);
  drawCircle(myCircle1, context);
}
//Physics Constants
var d2Phi1 = 0;
var dPhi1  = 0;
var Phi1   = 0*(Math.PI)/2;
var m2     = 10;
var m1  =10;
var l1     = 150;
var X0     = 350;
var Y0     = 60;
var g      = 9.8;
var time   = 0.05;
var canvas  = document.getElementById('myCanvas');
var context = canvas.getContext('2d');
var init    = {};
function run(){
  var myLine1 = {x0: X0, y0: Y0, x: 0, y: 0};
  var myCircle1 = {x: X0+l1*Math.sin(Phi1), y: Y0+l1*Math.cos(Phi1), mass: m1};
  clearInterval(init);
  context.clearRect(0, 0, canvas.width, canvas.height);
  init = setInterval(function(){
    animate(myCircle1, myLine1, canvas, context);
  }, 10);
}
</script>

<p>Now, let's look at the pendulum system, the interactive figure shown above is a pendulum that you can adjust its length and the gravity of its environment. As you can see there, the pendulum on the Earth swings at the faster rate compared with the pendulum on the Moon. Therefore, if you were to bring a <a href="http://www.theclockdepot.com/clocks-blog/history-of-the-pendulum-clock/" target="_blank"> grandfather clock </a> to the Moon, you would observe that the clock time progresses much slower. However, don't expect that you would live longer than your Earthling peers if you have migrated to the Moon. The reason of the difference in time period is due to the lower gravity of the Moon that affects the period of oscillation of the pendulum. If a quartz clock instead of a pendulum clock is brought to the Moon, the time difference is almost negligible compared to that of Earth.</p>
$\begin{aligned}
T=2\pi \sqrt(\frac{l}{g})
\end{aligned}$
Where $l$ is the length of pendulum and $g$ is the acceleration due to gravity. So from this equation, it is clear that the time period is smaller when the value of g is greater. Since the Earth has higher gravity than Moon, the pendulum indeed swing faster. For instance, the time period of a 1 meter pendulum is $2\pi\times\sqrt{\frac{1}{9.81}}=2.0\ \mathrm{s}$ on the Earth while it is $5.0\ \mathrm{s}$ on the Moon.

<h2>Time Actually Progresses A Little Faster on The Moon</h2>
Counter-intuitively, time actually progresses faster on the Moon, although the difference is at the scale of a fraction. According to Albert Einstein�s <a href="https://en.wikipedia.org/wiki/Time_dilation" target="_blank"> general relativity theory</a>, the stronger is the gravitational potential, the slower the time passes. This is because time passes slower for anything undergoing an acceleration, and as gravity is just an acceleration towards a centre of mass, then time will move more slowly relative to something under a smaller gravity. This phenomenon is called gravitational time dilation, and it has already been attested by the well known<a href="http://www.circlon-theory.com/HTML/poundRebka.html" target="_blank"> Pound�Rebka experiment.</a>�Calculation shows that, after about a hundred hour passed on Earth, the clock on the Moon (using an atomic clock of course) would be less than 1 millisecond faster than the Earth.

So next time you happen to go to the Moon, do enjoy this slightly faster pace of life there, but don't forget the radiations from the outer space (which Moon has no protection from) will deteriorate your life span even further.
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