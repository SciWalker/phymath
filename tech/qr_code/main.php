<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<div class="form">
  <h1>QR Code using qrcodejs</h1>
  <form>
    <input type="url" id="website" name="website" placeholder="https://phymath.com" required />
    <input type="color" id="qrColor" name="qrColor" value="#000000" /> <!-- Color picker added -->
    <button type="button" onclick="generateQRCode()">Generate QR Code</button>
  </form>

  <div id="qrcode-container">
    <div id="qrcode" class="qrcode"></div>
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
        document.getElementById("qrcode-container").style.display = "block";
      } else {
        alert("Please enter a valid URL");
      }
    }
  </script>
</div>