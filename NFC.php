
    

<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <!-- Title -->
  <title>Near Field Communication (NFC)</title>
  <!-- Meta -->
  
  <meta name="description" content="Near Field Communication">
  <meta name="author" content="Elijah Wong">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

  <meta property="og:url" content="https://phymath.com/NFC.php">
  <meta property="og:title" content="NFC">
  <meta name="description" content="Web NFC demo page">
  <meta property="og:description" content="Web NFC demo page">
  <meta property="og:image" content="https://phymath.com/images/mixspaceearth-smaller.png">
  <meta property="og:image:width" content="600">
  <meta property="og:image:height" content="315">
      <meta http-equiv="origin-trial" content="Apph+1XLa6rEGFo+5lSIfr2fCzvlR7sUSalNlJmYFlbwl49EOLXLm4GRFWuPp2EGxsI8F7IVycel8b1uikxOmAgAAABeeyJvcmlnaW4iOiJodHRwczovL3BoeW1hdGguY29tOjQ0MyIsImZlYXR1cmUiOiJXZWJORkMiLCJleHBpcnkiOjE1OTUxNjAw3NDgsImlzU3ViZG9tYWluIjp0cnVlfQ==">
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
  <link href="https://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
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

<!--

enum NFCTagType {
  "nfc-a",
  "nfc-b",
  "nfc-f",
  "nfc-v",
  "iso-dep"
};

dictionary NFCReadingMetadata {
  NFCTagType tagType;
  number transceiveMaxByteLength;
}

dictionary IsoDepReadingMetadata : NFCReadingMetadata {
  UInt8Array manufacturer;
  UInt8Array systemCode;
} 
...

interface NFCReadingEvent : Event {
  readonly attribute DOMString serialNumber;
  readonly attribute NDEFMessage ndef;
  readonly attribute NFCReadingMetadata metadata;

  Promise<Uint8Array> transceive(Uint8Array data, number? timeout); // or BufferSource?
  Promise<void> close();
};

-->


<head>
  <title>Near Field Communication with Browser</title>
</head>
<h2>Web NFC Demo Page</h2>
<p>
    This is a Demo page for Web NFC functionalities.
    
</p>
 <h3>
    How to use WebNFC read function in this test page:  
     
 </h3>
<ol>
<li>You must ensure that your android device supports NFC. </li>
<li>Next, you need to use the Chrome browser app*.</li>
<li>Direct to "chrome://flags".</li>
<li>Search for WebNFC and enable it. </li>
<li>Relaunch chrome.</li>
<li>Now, direct to this page, and click/press the button "NFC Read" to activate the NFC read function.</li>
<li>Place an NFC tag behind your phones or any other device, your phones should now be able to read the NFC tag.</li>

</ol>
<p>*Some android devices do not grant permission for reading NFC function in Chrome. In that case, you might need to get the Chrome Beta app from google play store to use the WebNFC.</p>
  <p>

  <button onclick="writeTag()">Write Text</button>
  

</p>
            <p>  
            <input type="text" id="myText" placeholder="please type your text here...">

  </p>

<p id="demo"></p>
<script>
function textFunction() {
  var x = document.getElementById("myText").value;

}
</script>

<pre id="log"></pre>


<script id="dynamicScript" type="text/javascript">


async function writeTag() {
  if ("NDEFWriter" in window) {
    const writer = new NDEFWriter();

    var x = document.getElementById("myText").value;
    try {
    consoleLog("Tap the phone to the NFC tag/card to write message.");
      await writer.write(x);
      consoleLog("NDEF message written!");

      
    } catch(error) {
      consoleLog(error);
    }
 
      
      
  } else {
    consoleLog("The NFC is not supported!");
  }
   setTimeout(() => controller.abort(), 1);
}









function consoleLog(data) {
  var logElement = document.getElementById('log');
  logElement.innerHTML += data + '\n';
};

</script>

<p>  <button onclick="readTag()">NFC Read</button>
</p>
<pre id="log1"></pre>
<script id="dynamicScript" type="text/javascript">

async function readTag() {
  try {
  const status = await navigator.permissions.query({ name: 'nfc'});
  
}
catch(e) {
  // No Web NFC support
}
  
  if ("NDEFReader" in window) {
    consoleLog1("Try to read the tag:");
    const reader = new NDEFReader();
    try {
      await reader.scan();
      reader.onreading = event => {
        const decoder = new TextDecoder();
        for (const record of event.message.records) {
          consoleLog1("Raw text: "+event.message);
          consoleLog1("Record type:  " + record.recordType);
          consoleLog1("MIME type:    " + record.mediaType);
          consoleLog1("encoding type:"+ record.encoding);
          consoleLog1("=== data ===\n" + decoder.decode(record.data));
          // window.location.href = "http://www.w3schools.com";
        }
      }
    } catch(error) {
      consoleLog1(error);
    }
  } else {
    consoleLog1("Web NFC is not supported.");
  }
}
function consoleLog1(data) {
  var logElement = document.getElementById('log1');
  logElement.innerHTML += data + '\n';
};

</script>

<p>First Record</p>
<form>
    <label for="recordtype1">Record Type:</label>
    <input name="Record Type" id="myText_ext_recordtype1" placeholder="mime">
</form>
<form>
    <label for="mediatype1">Media Type:</label>
    <input name="Media Type" id="myText_ext_mediatype1" placeholder="text/plain">
</form>
<form>
    <label for="data1">Data:</label>
    <input name="data1" id="myText_ext_data1" placeholder="write your text here">
</form>
<p>Second Record</p>
<form>
    <label for="recordtype2">Record Type:</label>
    <input name="Record Type" id="myText_ext_recordtype2" value="com.example:elijahresearch" placeholder="com.example:elijahresearch">
</form>
<form>
    <label for="mediatype2">Media Type:</label>
    <input name="Media Type" id="myText_ext_mediatype2">
</form>
<form>
    <label for="data2">Data:</label>
    <input name="data" id="myText_ext_data2" value ="com.iserve.nfctag" placeholder="com.iserve.nfctag">
</form>
<p>  <button onclick="writeExternal()">Write external</button>
</p>
<script>
function textFunction() {
  var x = document.getElementById("myText_ext").value;

}
</script>
<pre id="log3"></pre>
<script id="dynamicScript" type="text/javascript">

    async function writeExternal() {
  if ("NDEFWriter" in window) {
          const reader = new NDEFReader();
    const writer = new NDEFWriter();
    const encoder = new TextEncoder();
    var rt1 = document.getElementById("myText_ext_recordtype1").value;
    var mt1 = document.getElementById("myText_ext_mediatype1").value;
    var data1 = document.getElementById("myText_ext_data1").value;
    var rt2 = document.getElementById("myText_ext_recordtype2").value;
    var mt2 = document.getElementById("myText_ext_mediatype2").value;
    var data2 = document.getElementById("myText_ext_data2").value;    
    try {
        consoleLog3("Please tap on the tag to write the record.");
      await writer.write({
  records: [ {recordType: rt1, mediaType: mt1,data: encoder.encode(data1) },{recordType: "com.example:elijahresearch",data: encoder.encode("com.iserve.nfctag") }]
});
      await reader.scan();
      consoleLog3("NDEF message written!");
      
    } catch(error) {
      consoleLog3(error);
    }


    
  } else {
    consoleLog3("Web NFC is not supported.");
  }
}
function consoleLog3(data) {
  var logElement = document.getElementById('log3');
  logElement.innerHTML += data + '\n';
};

</script>

<p>  <button onclick="LowLevel()">NFC Low Level Access (not yet available)</button>
</p>
<pre id="log2"></pre>
<script id="dynamicScript" type="text/javascript">






async function LowLevel() {
  if ("NDEFWriter" in window) {
    const writer = new NDEFWriter();
    try {
      await writer.write("00 A4 04 00 0E 32 50 41 59 2E 53 59 53 2E 44 44 46 30 31 00",{ target: "peer", ignoreRead: false });
      consoleLog2("NDEF message written!");
    } catch(error) {
      consoleLog2("NFC write error:" +error);
    }
  
      
      
  } else {
    consoleLog2("Web NFC is not supported.");
  }
}
function consoleLog2(data) {
  var logElement = document.getElementById('log2');
  logElement.innerHTML += data + '\n';
};

</script>





            <!-- End Main Content -->
          </div>
          <!-- End Main Column -->
        </div>
      </div>
      <!-- === END CONTENT === -->
<?php include("footer_2018.html") ?>

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

