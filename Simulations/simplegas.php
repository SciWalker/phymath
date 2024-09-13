<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    <!-- Title -->
    <title>Gas Molecule Simulation</title>
    <!-- Meta -->
    <meta name="description" content="Simulations of Gas Molecules">
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
            display: block;
            margin: 0 auto;
            border: 1px solid #d3d3d3;
            background-color: #f1f1f1;
        }

        #controls {
            text-align: center;
            margin: 20px 0;
            position: relative;
        }
        #controls input {
            margin-right: 10px;
            width: 80px;
        }
        #controls label {
            margin-right: 5px;
        }
    </style>
</head>
<body onload="startSimulation()">
    <?php include("../header_2018.html"); ?>

    <!-- Main Content -->
    <div>
        <h1>Gas Molecule Simulation</h1>
        <canvas id="simulationCanvas" width="1400" height="520"></canvas>
        <div id="controls">
            <label for="temperature">Temperature (K):</label>
            <input type="number" id="temperature" value="300" min="100" max="1000">
            <label for="numParticles">Amount of Gas:</label>
            <input type="number" id="numParticles" value="50" min="1" max="200">
            <label for="volume">Volume (%):</label>
            <input type="number" id="volume" value="100" min="50" max="100">
            <button onclick="startSimulation()">Start Simulation</button>
        </div>
    </div>
    <!-- End Main Content -->

    <!-- JS -->
    <script type="text/javascript" src="https://www.phymath.com/assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.phymath.com/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.phymath.com/assets/js/scripts.js"></script>
    <!-- Additional JS Scripts -->
    <script>
        var canvas = document.getElementById('simulationCanvas');
        var ctx = canvas.getContext('2d');
        var particles = [];
        var numParticles = 50;
        var temperature = 300; // Kelvin
        var volumePercent = 100; // Percentage of canvas size
        var animationId;

        function Particle(x, y, vx, vy, radius, mass) {
            this.x = x;
            this.y = y;
            this.vx = vx; // velocity in x-direction
            this.vy = vy; // velocity in y-direction
            this.radius = radius;
            this.mass = mass;
        }

        Particle.prototype.update = function() {
            this.x += this.vx;
            this.y += this.vy;

            // Check for collision with walls
            if (this.x - this.radius < 0) {
                this.x = this.radius;
                this.vx = -this.vx;
            } else if (this.x + this.radius > canvas.width) {
                this.x = canvas.width - this.radius;
                this.vx = -this.vx;
            }

            if (this.y - this.radius < 0) {
                this.y = this.radius;
                this.vy = -this.vy;
            } else if (this.y + this.radius > canvas.height) {
                this.y = canvas.height - this.radius;
                this.vy = -this.vy;
            }
        };

        Particle.prototype.draw = function() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI);
            ctx.fillStyle = 'blue';
            ctx.fill();
            ctx.stroke();
        };

        function initParticles() {
            particles = [];
            for (var i = 0; i < numParticles; i++) {
                var radius = 5;
                var mass = 1;
                var x = Math.random() * (canvas.width - 2 * radius) + radius;
                var y = Math.random() * (canvas.height - 2 * radius) + radius;

                // Assign velocity based on temperature
                var speed = Math.sqrt(temperature) * 0.05; // Adjust scaling factor as needed
                var angle = Math.random() * 2 * Math.PI;
                var vx = speed * Math.cos(angle);
                var vy = speed * Math.sin(angle);

                var particle = new Particle(x, y, vx, vy, radius, mass);
                particles.push(particle);
            }
        }

        function update() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            // Update and draw each particle
            particles.forEach(function(particle, index) {
                particle.update();

                // Check for collisions with other particles
                for (var j = index + 1; j < particles.length; j++) {
                    var other = particles[j];
                    var dx = other.x - particle.x;
                    var dy = other.y - particle.y;
                    var distance = Math.hypot(dx, dy);
                    if (distance < particle.radius + other.radius) {
                        // Simple elastic collision
                        var angle = Math.atan2(dy, dx);
                        var sin = Math.sin(angle);
                        var cos = Math.cos(angle);

                        // Rotate particle velocities
                        var v1 = rotate(particle.vx, particle.vy, sin, cos);
                        var v2 = rotate(other.vx, other.vy, sin, cos);

                        // Swap velocities
                        var temp = v1.x;
                        v1.x = v2.x;
                        v2.x = temp;

                        // Rotate back
                        var vFinal1 = rotate(v1.x, v1.y, -sin, cos);
                        var vFinal2 = rotate(v2.x, v2.y, -sin, cos);

                        particle.vx = vFinal1.x;
                        particle.vy = vFinal1.y;
                        other.vx = vFinal2.x;
                        other.vy = vFinal2.y;
                    }
                }

                particle.draw();
            });

            animationId = requestAnimationFrame(update);
        }

        // Function to rotate velocities during collision
        function rotate(vx, vy, sin, cos) {
            return {
                x: vx * cos + vy * sin,
                y: vy * cos - vx * sin
            };
        }

        function startSimulation() {
            cancelAnimationFrame(animationId);
            numParticles = parseInt(document.getElementById('numParticles').value);
            temperature = parseFloat(document.getElementById('temperature').value);
            volumePercent = parseInt(document.getElementById('volume').value);

            // Fix: Adjust the canvas size without modifying its aspect ratio
            var originalWidth = 1400;
            var originalHeight = 520;
            canvas.width = originalWidth * (volumePercent / 100);
            canvas.height = originalHeight * (volumePercent / 100);

            initParticles();
            update();
            }
    </script>
    <!-- End JS -->

    <?php include("../footer_2018.html"); ?>
</body>
</html>
