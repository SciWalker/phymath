<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>PhyMath Object Recognition</title>
  <!-- Meta -->
  
  <meta name="description" content="machine learning, object recognition">
  <meta name="author" content="Elijah Wong">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
  <!-- Favicon -->
  <link href="favicon.html" rel="shortcut icon">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="../../assets/css/bootstrap.css" rel="stylesheet">
  <!-- Template CSS -->
  <link rel="stylesheet" href="../../assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/nexus.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" href="../../assets/css/custom.css" rel="stylesheet">
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








<!-- Load TensorFlow.js. This is required to use MobileNet. -->
<script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@2.0.0/dist/tf.min.js"></script>

<!-- Load the MobileNet model. -->
<script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/mobilenet@1.0.0"> </script>

<!-- Replace this with your image. Make sure CORS settings allow reading the image! -->
<div>

<button><label for="file" style="cursor: pointer;">Upload Image</label></button>
    <p id="inp"></p>
</div>
<!--<img id="img" src="1800x1200_cat_relaxing_on_patio_other.jpg"></img>-->
<input type="file"  accept="image/gif, image/jpeg, image/png" name="image" id="file" onchange="loadFile(event)" style="display: none;">
<img id="output" width="200" />	
<!-- Place your code in the script tag below. You can also use an external .js file -->
<script>
  // Notice there is no 'import' statement. 'mobilenet' and 'tf' is
  // available on the index-page because of the script tag above.
    var loadFile = function(event) {
    	var image = document.getElementById('output');
    	image.src = URL.createObjectURL(event.target.files[0]);
    	
    	
    	  // Load the model.
  mobilenet.load().then(model => {
    // Classify the image.
    model.classify(image).then(predictions => {
        var parsed ="Result: \n"+"\n";
        console.log('Predictions: ');
        console.log(predictions);
    for (i = 0; i< predictions.length; i++) {
                    var myobj=  predictions[i];
                    for (var property in myobj) {
                        parsed += property + ": " + myobj[property] + "\n";          
                    }
                }
      document.getElementById("inp").innerHTML =parsed;
    });
  });
    	
    	
    };
//  const img = document.getElementById('img');

</script>

            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("/home/sciwalker/public_html/footer_2018.html") ?>

  <!-- JS -->
  <script type="text/javascript" src="../../assets/js/jquery.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="../../assets/js/scripts.js"></script>
  <!-- Isotope - Portfolio Sorting -->
  <script type="text/javascript" src="../../assets/js/jquery.isotope.js" type="text/javascript"></script>
  <!-- Mobile Menu - Slicknav -->
  <script type="text/javascript" src="../../assets/js/jquery.slicknav.js" type="text/javascript"></script>
  <!-- Animate on Scroll-->
  <script type="text/javascript" src="../../assets/js/jquery.visible.js" charset="utf-8"></script>
  <!-- Slimbox2-->
  <script type="text/javascript" src="../../assets/js/slimbox2.js" charset="utf-8"></script>
  <!-- Modernizr -->
  <script src="../../assets/js/modernizr.custom.js" type="text/javascript"></script>
  <!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->


