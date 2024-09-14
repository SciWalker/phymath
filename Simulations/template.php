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
      margin: 0 auto;
    }

    .simulation-container {
      text-align: center;
      margin-top: 20px; 
    }

    .content-div {
      margin-top: 10px; /* Reduce this value */
      margin-bottom: 50px; /* Reduce this value if needed */
      text-align: center;
    }

    /* Add this new rule to reduce space above h1 */
    .content-div h1 {
      margin-top: 0;
    }
  </style>
</head>
<body onload="startGame()">
  <?php include("../header_2018.html"); ?>


  <!-- JS -->
  <script src="../../../assets/js/jquery.min.js"></script>
  <script src="../../../assets/js/bootstrap.min.js"></script>
  <script src="../../../assets/js/scripts.js"></script>
  <!-- End JS -->
</body>
</html>