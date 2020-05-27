<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- This page use bootstrap and a custom css file in which you can change things -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="./css/template_full.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- The following allows to use icons from font awesome -->
    <script src="https://kit.fontawesome.com/222ebe9af0.js" crossorigin="anonymous"></script>
  </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <section id="projectShowcase">

      <!-- The background image is located in the css attached to this file -->
      <div class="sectionShowcase backgroundImg"> 
          <div class="centeredFlexbox">
        <h2 class="text-uppercase font-weight-bold text-center">Don't Do it! DEMO</h2>
        <?php
        // put your code here
        
 function callAPI($method, $url, $data){
   $curl = curl_init();
   switch ($method){
      case "POST":
         curl_setopt($curl, CURLOPT_POST, 1);
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
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   echo $result;
   if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
 }
    $data_array =  array(
      "data"        => "MY MACHINE Rockstar should make freemode events that are car shows. When you enter the area, your car can't be blown uo. Everyone who participates could vote on the best car. Winner could earn RP and like 25k. It would be dope",
    );
#$make_call = callAPI('POST', 'http://advanse.lirmm.fr:5000/predict', json_encode($data_array));
   ###############################################################
    $data = json_encode($data_array);
    $url = 'http://advanse.lirmm.fr:5000/predict';
    
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_POST, 1);
   curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
      'APIKEY: 111111111111111111111',
      'Content-Type: application/json',
   ));
   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
   $result = curl_exec($curl);
   echo $result;
   if(!$result){die("Connection Failure");}
   curl_close($curl);
    #############################################################
$response = json_decode($make_call, true);
$errors   = $response['response']['errors'];
$data     = $response['response']['data'][0];

echo $response;
echo $errors;
echo $data
        
        ?>
          </div>
      </div>
      </section>
    </body>
</html>
