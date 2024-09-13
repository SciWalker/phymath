<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Simple Gravity Simulation</title>
  <!-- Meta -->
  <meta name="description" content="Simple Gravity Simulation">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <!-- Favicon -->
  <link href="favicon.html" rel="shortcut icon">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="../../../assets/css/bootstrap.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../../../assets/css/animate.css">
  <link rel="stylesheet" href="../../../assets/css/font-awesome.css">
  <link rel="stylesheet" href="../../../assets/css/nexus.css">
  <link rel="stylesheet" href="../../../assets/css/responsive.css">
  <link rel="stylesheet" href="../../../assets/css/custom.css">
  <!-- Google Fonts-->
  <link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
  <style>
    canvas {
      border: 1px solid #d3d3d3;
      background-color: #f1f1f1;
      display: block;
      margin: 0 auto;
    }
    .simulation-container {
      text-align: center;
      margin-top: 20px;
    }
    .content-div {
      margin-top: 10px;
      margin-bottom: 50px;
      text-align: center;
    }
    .content-div h1 {
      margin-top: 0;
    }
  </style>
</head>
<body onload="startGame()">
  <?php include("../header_2018.html"); ?>

  <div class="simulation-container">
    <div id="game-container">
      <!-- Canvas will be inserted here by JavaScript -->
    </div>
    <div class="content-div">
      <h1>Simple Gravity Simulation</h1>
      <button onmousedown="accelerate(-0.2)" onmouseup="accelerate(0.05)">ACCELERATE UP</button>
      <button onmousedown="acchori(0.2)" onmouseup="acchori(0.00)">ACCELERATE RIGHT</button>
      <button onmousedown="acchori(-0.2)" onmouseup="acchori(0.00)">ACCELERATE LEFT</button>
      <p>Use the ACCELERATE button to stay in the air</p>
      <p>How long can you stay alive?</p>
    </div>
  </div>

  <?php include("../footer_2018.html"); ?>

  <script>
  var myGamePiece;
  var myObstacles = [];
  var myScore;
  var showpos;

  function startGame() {
      myGamePiece = new component(30, 30, "red", 10, 120);
      myGamePiece.gravity = 0.05;
      myGamePiece.acceleratehorizontal=0.0;
      myScore = new component("30px", "Consolas", "black", 280, 55, "text");
      showpos= new component("30px", "Consolas", "black", 10, 22, "text");
      myGameArea.start();
  }

  var myGameArea = {
      canvas : document.createElement("canvas"),
      start : function() {
          this.canvas.width = 960;
          this.canvas.height = 520;
          this.context = this.canvas.getContext("2d");
          document.getElementById('game-container').appendChild(this.canvas);
          this.frameNo = 0;
          this.interval = setInterval(updateGameArea, 20);
          },
      clear : function() {
          this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
      }
  }

  function component(width, height, color, x, y, type) {
      this.type = type;
      this.score = 0;
      this.width = width;
      this.height = height;
      this.speedX = 0;
      this.speedY = 0;    
      this.x = x;
      this.y = y;
      this.gravity = 0;
      this.gravitySpeed = 0;
      this.update = function() {
          ctx = myGameArea.context;
          if (this.type == "text") {
              ctx.font = this.width + " " + this.height;
              ctx.fillStyle = color;
              ctx.fillText(this.text, this.x, this.y);
          } else {
              ctx.fillStyle = color;
              ctx.fillRect(this.x, this.y, this.width, this.height);
          }
      }
      this.newPos = function() {
          this.gravitySpeed += this.gravity;
          this.speedX+=this.acceleratehorizontal;
          this.x += this.speedX;
          this.y += this.speedY + this.gravitySpeed;
          this.hitBottom();
      }
      this.hitBottom = function() {
          var rockbottom = myGameArea.canvas.height - this.height;
          if (this.y > rockbottom) {
              this.y = rockbottom;
              this.gravitySpeed = 0;
          }
      }
      this.crashWith = function(otherobj) {
          var myleft = this.x;
          var myright = this.x + (this.width);
          var mytop = this.y;
          var mybottom = this.y + (this.height);
          var otherleft = otherobj.x;
          var otherright = otherobj.x + (otherobj.width);
          var othertop = otherobj.y;
          var otherbottom = otherobj.y + (otherobj.height);
          var crash = true;
          if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
              crash = false;
          }
          return crash;
      }
  }

  function updateGameArea() {
      var x, height, gap, minHeight, maxHeight, minGap, maxGap;
      myGameArea.clear();
      myGameArea.frameNo += 1;
      myScore.text="a_x "+myGamePiece.acceleratehorizontal+" a_y "+myGamePiece.gravity;
      myScore.update();
      myGamePiece.newPos();
      showpos.text="Position = "+myGamePiece.x.toFixed(2)+", "+myGamePiece.y.toFixed(2);
      showpos.update();
      myGamePiece.update();
  }

  function everyinterval(n) {
      if ((myGameArea.frameNo / n) % 1 == 0) {return true;}
      return false;
  }

  function accelerate(n) {
      myGamePiece.gravity = n;
  }
  function acchori(n) {
      myGamePiece.acceleratehorizontal= n;
  }
      
  document.onkeydown = function(evt) {
      evt = evt || window.event;
      switch (evt.keyCode) {
          case 37:
              acchori(-0.2) ;
              break;
          case 38:
              accelerate(-0.2);
              break;
          case 39:
               acchori(0.2) ;
              break;
          case 40:
               accelerate(0.2);
              break;
      }
  };

  document.onkeyup = function(evt) {
      evt = evt || window.event;
      switch (evt.keyCode) {
          case 37:
              acchori(0) ;
              break;
          case 38:
              accelerate(0.1);
              break;
          case 39:
               acchori(0) ;
              break;
          case 40:
               accelerate(0.1);
              break;
      }
  }
  </script>

  <!-- JS -->
  <script src="../../../assets/js/jquery.min.js"></script>
  <script src="../../../assets/js/bootstrap.min.js"></script>
  <script src="../../../assets/js/scripts.js"></script>
  <!-- End JS -->
</body>
</html>
