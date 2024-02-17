<head>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8733815049329161"
     crossorigin="anonymous"></script>
     </head>
<div class="form max-w-md mx-auto mt-10">
  <h1 class="text-xl font-bold text-center mb-4">QR Code Generator</h1>
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="url" id="website" name="website" placeholder="https://phymath.com" required />
    </div>
    <div class="mb-4">
      Choose the color for QR code:
      <input class="w-1/16" type="color" id="qrColor" name="qrColor" value="#ffd700" />
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="generateQRCode()">
        Generate
      </button>
    </div>
  </form>

  <div id="qrcode-container" class="flex justify-center mt-4">
    <div id="qrcode" class="qrcode"></div>
  </div>
</div>
<p class="text-l text-center mb-4">For more advanced QR code generation, please visit my rapidAPI page</p>

<h1 class="text-xl font-bold text-center mb-4">
  <a href="https://rapidapi.com/elijahwongww/api/milesridge-qr1" target="_blank">https://rapidapi.com/elijahwongww/api/milesridge-qr1</a>
</h1>


<script type="text/javascript">
    function generateQRCode() {
      let website = document.getElementById("website").value;
      let color = document.getElementById("qrColor").value; // Get the selected color
      if (website) {
        let qrcodeContainer = document.getElementById("qrcode");
        qrcodeContainer.innerHTML = "";
        new QRCode(qrcodeContainer, {
          text: website,
          width: 128,
          height: 128,
          colorDark: color, // Use the selected color for QR code
          colorLight: "#ffffff",
          correctLevel: QRCode.CorrectLevel.M
        });
        document.getElementById("qrcode-container").style.display = "flex";
      } else {
        alert("Please enter a valid URL");
      }
    }
  </script>
