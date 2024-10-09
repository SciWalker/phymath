<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <!-- Title -->
  <title>Hopf Fibration Simulation</title>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="description" content="Hopf Fibration of 3-dimensional sphere">
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
  <!-- Plotly.js -->
  <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
  <style>
    #sliderContainer {
      margin-top: 20px;
      padding: 10px;
      background-color: #f0f0f0;
      border-radius: 5px;
    }
    #axisRange {
      width: 300px;
    }
  </style>
</head>
<body>
  <?php include("../header_2018.html") ;?>

  <div id="content" class="container">
    <h1>Hopf Fibration Simulation</h1>
    <p>This simulation demonstrates the Hopf fibration, which maps a 3-sphere to a 2-sphere with circular fibers.</p>
    <div id="hopfGraph" style="width:100%;height:600px;"></div>
    <div id="sliderContainer">
      <label for="axisRange">Axis Range: <span id="rangeValue">8</span></label>
      <input type="range" id="axisRange" min="1" max="80" value="8" step="1">
    </div>
  </div>

  <script>
    function generateQubitStates(numPoints, numFibers) {
      const data = [];
      
      for (let f = 0; f < numFibers; f++) {
        const x = [], y = [], z = [], w = [];
        const phi = Math.random() * Math.PI * 2;
        const theta = Math.random() * Math.PI;
        
        for (let t = 0; t < numPoints; t++) {
          const psi = (t / (numPoints - 1)) * Math.PI * 2;
          
          const x4 = Math.cos(theta) * Math.cos(psi);
          const y4 = Math.cos(theta) * Math.sin(psi);
          const z4 = Math.sin(theta) * Math.cos(phi + psi);
          const w4 = Math.sin(theta) * Math.sin(phi + psi);
          
          x.push(x4);
          y.push(y4);
          z.push(z4);
          w.push(w4);
        }
        
        data.push({x, y, z, w});
      }
      
      return data;
    }

    function projectToHopfFibration(qubitStates) {
      const data = [];
      
      for (const fiber of qubitStates) {
        const x = [], y = [], z = [];
        
        for (let i = 0; i < fiber.x.length; i++) {
          const r = 2 / (1 + fiber.x[i]);
          x.push(r * fiber.y[i]);
          y.push(r * fiber.z[i]);
          z.push(r * fiber.w[i]);
        }
        
        data.push({
          type: 'scatter3d',
          mode: 'lines',
          x: x,
          y: y,
          z: z,
          line: {
            width: 6,
            color: qubitStates.indexOf(fiber),
            colorscale: 'Viridis'
          }
        });
      }
      
      return data;
    }

    const layout = {
      scene: {
        xaxis: {range: [-8, 8]},
        yaxis: {range: [-8, 8]},
        zaxis: {range: [-8, 8]},
        aspectmode: 'cube'
      },
      margin: {l: 0, r: 0, b: 0, t: 0},
      autosize: true
    };

    const qubitStates = generateQubitStates(100, 50);
    const projectedData = projectToHopfFibration(qubitStates);
    Plotly.newPlot('hopfGraph', projectedData, layout);

    // Make the graph responsive
    window.addEventListener('resize', function() {
      Plotly.Plots.resize('hopfGraph');
    });
  </script>

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