<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Collision Simulations</title>
  <!-- Meta -->
  <meta name="description" content="Simulations of Collision and Momentum">
  <meta name="author" content="Elijah Wong">
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
      margin: 0 auto; /* Center the canvas horizontally */
    }

    .simulation-container {
      text-align: center; /* Center the content */
    }

    .content-div {
      margin-top: 20px; /* Bring the text closer to the canvas */
      margin-bottom: 100px;
      text-align: center; /* Center the text */
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
      <h1>Momentum Simulation</h1>
      <p>manual control ("awsd") for extra fun!</p>
      <button onmousedown="accelerate(-0.01)" onmouseup="accelerate(0.005)">ACCELERATE UP</button>
      <button onmousedown="acchori(0.01)" onmouseup="acchori(0.00)">ACCELERATE RIGHT</button>
      <button onmousedown="acchori(-0.01)" onmouseup="acchori(0.00)">ACCELERATE LEFT</button>
      <p>Please set the parameters (observe the max speed:120)</p>
      Red speed: <input class="edit-items1" type="number" name="rname" id="rspeed" value="19" max="120" min="-120">
      Blue speed: <input class="edit-items" type="number" name="lname" id="bspeed" value="-14" max="120" min="-120">
      Red mass: <input name="lname" id="mass1" type="number" value="41" max="9999" min="1">
      Blue mass: <input name="lname" id="mass2" type="number" value="23" max="9999" min="1">
      <p>Warning: avoid negative mass at all costs!</p>
      <button onclick="resetGame()">Launch them!</button>
      <p>Watch them collide!</p>
    </div>
  </div>

  <?php include("../footer_2018.html"); ?>

  <!-- JavaScript Code -->
  <script>
    var myGamePiece;
    var myGamePiece2;
    var myObstacles = [];
    var myScore;
    var showpos;
    var myGamePiecemass = 4;
    var myGamePiece2mass = 3;

    function startGame() {
      myGamePiece = new component(30, 30, "red", 310, 490);
      myGamePiece2 = new component(30, 30, "blue", 800, 490);
      myGamePiece.gravity = 0.005;
      myGamePiece.acceleratehorizontal = 0.0;
      myGamePiece2.gravity = 0.005;
      myGamePiece2.acceleratehorizontal = 0.0;
      myGamePiece2.speedX = -1.4;
      myGamePiece.speedX = 1.9;
      myScore = new component("30px", "Consolas", "black", 280, 55, "text");
      showpos = new component("30px", "Consolas", "black", 10, 22, "text");
      myGameArea.start();
    }

    function resetGame() {
      myGamePiece = new component(30, 30, "red", 10, 490);
      myGamePiece2 = new component(30, 30, "blue", 900, 490);
      myGamePiece.gravity = 0.05;
      myGamePiece.acceleratehorizontal = 0.0;
      myGamePiece2.gravity = 0.05;
      myGamePiece2.acceleratehorizontal = 0.0;
      myGamePiecemass = parseFloat(document.getElementById("mass1").value);
      myGamePiece2mass = parseFloat(document.getElementById("mass2").value);
      myGamePiece2.speedX = parseFloat(document.getElementById("bspeed").value) / 10;
      myGamePiece.speedX = parseFloat(document.getElementById("rspeed").value) / 10;
      myScore = new component("30px", "Consolas", "black", 280, 55, "text");
      showpos = new component("30px", "Consolas", "black", 10, 22, "text");
    }

    var myGameArea = {
      canvas: document.createElement("canvas"),
      start: function () {
        this.canvas.width = 1400;
        this.canvas.height = 380;
        this.context = this.canvas.getContext("2d");
        var container = document.getElementById('game-container');
        container.appendChild(this.canvas);
        this.frameNo = 0;
        this.interval = setInterval(updateGameArea, 2);
      },
      clear: function () {
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
      }
    }

    function component(width, height, color, x, y, type, state, crash) {
      this.type = type;
      this.score = 0;
      this.width = width;
      this.height = height;
      this.state = 'air';
      this.speedX = 0;
      this.speedY = 0;
      this.x = x;
      this.y = y;
      this.gravity = 0;
      this.gravitySpeed = 0;
      this.update = function () {
        ctx = myGameArea.context;
        if (this.type == "text") {
          ctx.font = this.width + " " + this.height, this.state;
          ctx.fillStyle = color;
          ctx.fillText(this.text, this.x, this.y, state);
        } else {
          ctx.fillStyle = color;
          ctx.fillRect(this.x, this.y, this.width, this.height);
        }
      }
      this.newPos = function () {
        this.gravitySpeed += this.gravity;
        this.speedX += this.acceleratehorizontal;
        this.x += this.speedX;
        this.y += this.speedY + this.gravitySpeed;
        this.hitBottom();
        this.crashWith();
      }
      this.hitBottom = function () {
        var rockbottom = myGameArea.canvas.height - this.height;
        if (this.y > rockbottom) {
          this.y = rockbottom;
          this.gravitySpeed = 0;
          if (this.state == 'air') {
            this.state = 'ground';
          }
        }
      }
      this.crashWith = function () {
        var myleft = this.x;
        var myright = this.x + (this.width);
        var mytop = this.y;
        var mybottom = this.y + (this.height);
        var otherleft = myGamePiece2.x;
        var otherright = myGamePiece2.x + (myGamePiece2.width);
        var othertop = myGamePiece2.y;
        var otherbottom = myGamePiece2.y + (myGamePiece2.height);
        if ((mybottom < othertop) || (mytop > otherbottom) || (myright < otherleft) || (myleft > otherright)) {
          this.crash = false;
        } else {
          this.crash = true;
        }
        if (this.crash == true) {
          var myGamePieceoldspeedX = this.speedX;
          this.speedX = (myGamePiecemass * this.speedX + myGamePiece2.speedX * myGamePiece2mass + myGamePiece2mass * myGamePiece2.speedX - myGamePiece2mass * this.speedX) / (myGamePiecemass + myGamePiece2mass);
          myGamePiece2.speedX = (myGamePieceoldspeedX - myGamePiece2.speedX + this.speedX);
        }
      }
    }

    function updateGameArea() {
      var rockbottom = myGameArea.canvas.height - myGamePiece.height;
      myGameArea.clear();
      myGameArea.frameNo += 1;
      myScore.text = "gamePiece_v_x " + (myGamePiece.speedX * 10).toFixed(2) + " gamePiece2_v_x " + (myGamePiece2.speedX * 10).toFixed(2);
      myScore.update();
      myGamePiece.newPos();
      showpos.text = "Position = " + myGamePiece.x.toFixed(2) + ", " + myGamePiece.y.toFixed(2) + " piece 1 acc = " + myGamePiece.gravity;
      showpos.update();
      myGamePiece.update();
      myGamePiece2.newPos();
      myGamePiece2.update();
      if (myGamePiece.y < rockbottom) {
        myGamePiece.state = 'air';
      }
    }

    function accelerate(n) {
      myGamePiece.gravity = n;
    }

    function acchori(n) {
      myGamePiece.acceleratehorizontal = n;
    }

    document.onkeydown = function (evt) {
      evt = evt || window.event;
      switch (evt.keyCode) {
        case 65:
          acchori(-0.01);
          break;
        case 87:
          accelerate(-0.01);
          break;
        case 68:
          acchori(0.01);
          break;
        case 83:
          accelerate(0.01);
          break;
      }
    };

    document.onkeyup = function (evt) {
      evt = evt || window.event;
      switch (evt.keyCode) {
        case 65:
          acchori(0);
          break;
        case 87:
          accelerate(0.005);
          break;
        case 68:
          acchori(0);
          break;
        case 83:
          accelerate(0.005);
          break;
      }
    }

    // Input validation scripts
    document.getElementsByClassName('edit-items')[0].oninput = function () {
      var max = parseInt(this.max);
      var min = parseInt(this.min);
      if (parseInt(this.value) > max) {
        this.value = max;
      }
      if (parseInt(this.value) < min) {
        this.value = min;
      }
    }
    document.getElementsByClassName('edit-items1')[0].oninput = function () {
      var max = parseInt(this.max);
      var min = parseInt(this.min);
      if (parseInt(this.value) > max) {
        this.value = max;
      }
      if (parseInt(this.value) < min) {
        this.value = min;
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