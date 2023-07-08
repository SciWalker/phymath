
<!DOCTYPE html> 
<html> 
      
<head> 
    <title> 
         PHP function 
    </title> 
</head> 
  
<body style="text-align:center;"> 
      
    <h1 style="color:green;"> 
        GeeksforGeeks 
    </h1> 
      
    <h4> 
        How to call PHP function 
        on the click of a Button ? 
    </h4> 
      
    <?php
            if(array_key_exists('button1', $_POST)) { 
            button1(); 
        } 
        else if(array_key_exists('button2', $_POST)) { 
            button2(); 
        } 
    
    
    
    
    
    
function button1() {
        $postdata = json_encode([
        'name' => 'Arfan',
        'color'=> '#FF0000'
    ]);
    
    callAPI("POST","http://210.195.188.134:30004/uploader_normal",$postdata);

        } 
        function button2() {
            echo "test";
            $response = file_get_contents('http://210.195.188.134:30004/uploader_normal');
            $response = json_decode($response);
            echo $response;
        } 
        
        
        
        
        function callAPI($method, $url, $data){
   $curl = curl_init();
   
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
         echo $data;
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
         break;
      case "PUT":
         curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
         if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
         break;
      default:
         if ($data)
            $url = sprintf("%s?%s", $url, http_build_query($data));
   }
   // OPTIONS:
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl,CURLOPT_VERBOSE,1);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'Content-Type: application/json',
   ));
   curl_setopt($curl,CURLOPT_PROXYTYPE,CURLPROXY_HTTP);
    curl_setopt($curl,CURLOPT_PROXY,'http://proxy.shr.secureserver.net:3128');
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
}
        
        
        
    ?> 
  
    <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Button1" /> 
          
        <input type="submit" name="button2"
                class="button" value="Button2" /> 
    </form> 
</head> 
  
</html> 
