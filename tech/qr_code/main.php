<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<div class="form max-w-md mx-auto mt-10">
  <h1 class="text-xl font-bold text-center mb-4">QR Code using qrcodejs</h1>
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <div class="mb-4">
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="url" id="website" name="website" placeholder="https://phymath.com" required />
    </div>
    <div class="mb-4">
      <input class="w-full" type="color" id="qrColor" name="qrColor" value="#000000" />
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" onclick="generateQRCode()">
        Generate QR Code
      </button>
    </div>
  </form>

  <div id="qrcode-container" class="flex justify-center mt-4">
    <div id="qrcode" class="qrcode"></div>
  </div>
</div>

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
          correctLevel: QRCode.CorrectLevel.H
        });
        document.getElementById("qrcode-container").style.display = "flex";
      } else {
        alert("Please enter a valid URL");
      }
    }
  </script>
