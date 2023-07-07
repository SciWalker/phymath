<!DOCTYPE html>
<html lang = "en">
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<meta charset=utf-8 />
<title>Phymath QR Codes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="A website for Dynamic QR codes" />
  <meta name="author" content="Elijah Wong" />
  <link rel="icon" type="image/x-icon" href="static/assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="static/css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">

<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    
      <a src="static/assets/img/6929247e9a984705ceb18f5bdff4bbdd.jpg" class="navbar-brand js-scroll-trigger" href="#page-top">					<img src="static/images/Asset 9@4x.png" style="width:323px ;height: 115px;" alt="Logo" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#demo">Demo</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Projects</a></li>
              <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Contact</a></li>
          </ul>
      </div>
  </div>
</nav>
        <!-- Demo-->
        <section class="projects-section bg-light" id="demo">
          <div class="container">
            <h2 class="text-black mb-4">Cutting Edge Dynamic QR Codes</h2>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select the pattern of QR code</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option value = "Embedded">Embedded</option>
                  <option value = "Normal">Normal</option>
                </select>
              </div>
            
              <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                  <div class="col-lg-8 mx-auto">
                      <p id="b64"></p>
                    </div>
                    <div class="col-lg-8 mx-auto">
                    <div class="Embedded box">You have selected <strong>Embedded QR code option, please upload your background picture.</strong><br>
                        <input id="inp" type='file'>
                    </div>
                    <div class="Normal box">You have selected <strong>normal QR code option, please choose the color of your QR code</strong><br>
                        <label for="exampleFormControlSelect2">Select the colour of your QR code</label>
                        <form action="/action_page.php">
                            <input type="color" id="favcolor" name="favcolor" value="#ff0000"><br><br>
                        </form>
                    </div>
                    </div>
                    <div class="col-lg-8 mx-auto">
                      <input class="form-control" id="ori_text"  placeholder="Enter your text">
                      <small id="emailHelp" class="form-text text-muted">Please input text to be encoded in QR code</small>
                      <p id="showResult"></p>
                      <button id="foo">Click to show QR code</button>
                    </div>
                    <div class="col-lg-8 mx-auto"> 
                    <img id="img1" class="img-fluid mb-3 mb-lg-0"></div>
              </div>

          </div>
      </section>
      <!-- Projects-->
      <section class="projects-section bg-light" id="projects">
          <div class="container">
              <!-- Featured Project Row-->
              <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                  <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="static/assets/img/index.jpg" alt="" /></div>
                  <div class="col-xl-4 col-lg-5">
                      <div class="featured-text text-center text-lg-left">
                          <h4>The Bridge</h4>
                          <p class="text-black-50 mb-0">We are committed to bridge the gap between the virtual, dynamic online world and the traditional, static media.</p>
                      </div>
                  </div>
              </div>
              <!-- Project One Row-->
              <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                  <div class="col-lg-6"><img class="img-fluid" src="static/assets/img/quantum-technology.jpg" alt="" /></div>
                  <div class="col-lg-6">
                      <div class="bg-black text-center h-100 project">
                          <div class="d-flex h-100">
                              <div class="project-text w-100 my-auto text-center text-lg-left">
                                  <h4 class="text-white">For the New Generation of Marketing</h4>
                                  <p class="mb-0 text-white-50">We strive to improve the QR technology and make it accessible to everyone</p>
                                  <hr class="d-none d-lg-block mb-0 ml-0" />
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- Project Two Row-->
              <div class="row justify-content-center no-gutters">
                  <div class="col-lg-6"><img class="img-fluid" src="static/assets/img/tech-against-trafficking-hero.jpg" style="height:100%;" alt="" /></div>
                  <div class="col-lg-6 order-lg-first">
                      <div class="bg-black text-center h-100 project">
                          <div class="d-flex h-100">
                              <div class="project-text w-100 my-auto text-center text-lg-right">
                                  <h4 class="text-white">One QR for all your advertising needs</h4>
                                  <p class="mb-0 text-white-50">
                                    Skyrocket your business, try our QR codes, and you won't regret it.</p>
                                  <hr class="d-none d-lg-block mb-0 mr-0" />
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      
      
      
      
      
      <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Please contact me (Eli) for business opportunity</p>

    <div class="container">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->



    </div>

</section>
      
      
      
      
      
      
      <!-- Contact-->
      <section class="contact-section bg-black">
          <div class="container">
              <div class="row">
                  <div class="col-md-4 mb-3 mb-md-0">
                      <div class="card py-4 h-100">
                          <div class="card-body text-center">
                              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                              <h4 class="text-uppercase m-0">Address</h4>
                              <hr class="my-4" />
                              <div class="small text-black-50">Kuala Lumpur</div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                      <div class="card py-4 h-100">
                          <div class="card-body text-center">
                              <i class="fas fa-envelope text-primary mb-2"></i>
                              <h4 class="text-uppercase m-0">Email</h4>
                              <hr class="my-4" />
                              <div class="small text-black-50"><a href="#!">admin@phymath.com</a></div>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-4 mb-3 mb-md-0">
                      <div class="card py-4 h-100">
                          <div class="card-body text-center">
                              <i class="fas fa-mobile-alt text-primary mb-2"></i>
                              <h4 class="text-uppercase m-0">Phone</h4>
                              <hr class="my-4" />
                              <div class="small text-black-50"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="social d-flex justify-content-center">
                  <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                  <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                  <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
              </div>
          </div>
      </section>
      <!-- Footer-->
      <footer class="footer bg-black small text-center text-white-50"><div class="container">Copyright © PhyMath 2020</div></footer>
      <!-- Bootstrap core JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
      <!-- Third party plugin JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      <!-- Core theme JS-->
      <script src="static/js/scripts.js"></script>

<script>
var elem = document.getElementById("inp");

var rt3=document.getElementById("exampleFormControlSelect1").value;
                if (rt3=="Embedded"){
                elem.removeEventListener("foo", readFile_normal);
                elem.addEventListener("foo", readFile);
                }
                else if (rt3=="Normal"){
                
                elem.removeEventListener("foo", readFile);
                elem.addEventListener("foo", readFile_normal);
                }

$(document).ready(function(){
    $("select").change(function(){

        $('#exampleFormControlSelect1').find("option:selected").each(function(){
            
            var optionValue = $(this).attr("value");
            if(optionValue){
                
                rt3=optionValue;
                if (rt3=="Embedded"){
                elem.removeEventListener("foo", readFile_normal);
                elem.addEventListener("foo", readFile);
                }
                else if (rt3=="Normal"){
                elem.removeEventListener("foo", readFile);
                elem.addEventListener("foo", readFile_normal);
                }
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();

            } else{
                $(".box").hide();
            }
        });



        
    }).change();
    
});

function readFile() {
    
    var rt1 = document.getElementById("ori_text").value;
    var rt2;

    var FR= new FileReader();

    FR.addEventListener("load", async(e)=> {
  document.getElementById("showResult").innerHTML = "Processing.."

                rt2=e.target.result.toString();
                var convert = rt2.split(',')[1];
                obj = { text: rt1,image:convert};
                dbParam = JSON.stringify(obj);

                const response = await fetch('https://project1.phymath.com/uploader', {
                method: 'POST',
                crossDomain: true, 
                body: dbParam, // string or object
                headers: {
                'Content-Type': 'application/json'
                }
            });
            
            var myJson = await response.json(); 
                            


  document.getElementById("showResult").innerHTML = JSON.stringify(myJson["response"]);
  var imageOut = new Image();
  
  document.getElementById("img1").src = 'data:image/png;base64,'+(myJson["image"]);

    }); 
    if (rt3=="Embedded") {
    FR.readAsDataURL( this.files[0] );
    }

}

async function readFile_normal() {
  
  var rt1 = document.getElementById("ori_text").value;
  var color=document.getElementById("favcolor").value;
  var FR2= new FileReader();
  document.getElementById("showResult").innerHTML = "Processing.."
              obj = { text: rt1,type:rt3,color:color};
              dbParam = JSON.stringify(obj);
            
            const response = await fetch('https://project1.phymath.com//uploader_normal', {
              method: 'POST',
              crossDomain: true, 
              body: dbParam, // string or object
              headers: {
              'Content-Type': 'application/json'
              }
          });
          var myJson = await response.json(); 
                          

document.getElementById("showResult").innerHTML = JSON.stringify(myJson["response"]);
var imageOut = new Image();

document.getElementById("img1").src = 'data:image/png;base64,'+(myJson["image"]);



}



document.getElementById('foo').addEventListener('click', function() {
  var event = new CustomEvent('foo');
  elem.dispatchEvent(event);
})

</script>


</body>
</html>

