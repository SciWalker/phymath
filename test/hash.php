<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> 
<body>




<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Data</label>
    <input class="form-control" id="ori_text"  placeholder="Enter your text">
    <small id="emailHelp" class="form-text text-muted">Please input your text to be hashed!</small>
  </div>
</form>

<button type="button" onclick="UserAction()">Request data API</button>

<script>

const UserAction = async () => {
    var rt1 = document.getElementById("ori_text").value;
obj = { content: rt1};
dbParam = JSON.stringify(obj);
console.log(dbParam)
  const response = await fetch('https://prohasher.azurewebsites.net/api/hash', {
    method: 'POST',
    //crossDomain: true, 
    body: dbParam, // string or object
    headers: {
      'Content-Type': 'application/json'
    }
  });
  const myJson = await response.json(); 
  document.getElementById("showResultHash").innerHTML = JSON.stringify(myJson);
  
}
</script>
<p id="showResultHash"></p>
</body>
</html>



