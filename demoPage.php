<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php
        @ob_start();
        session_start();
    ?> 
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
    <script type="text/javascript"> 
         
          
      function checkinput() // submit handler
{
   
    $("#formS").hide(); 
    $("#formS2").show(); 
    
    
  document.getElementById('loadingGif').style.display = "block";
 
  //document.getElementById('vis').style.display = "none";
  document.getElementById('vis').style.visibility = "hidden";

  //$("vis").hide(); 
  

}
         

        </script>
  </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <section id="projectShowcase">

      <!-- The background image is located in the css attached to this file -->
      <div class="sectionShowcase backgroundImg"> 
          <div class="centeredFlexbox">
              <h1 class="text-uppercase font-weight-bold text-center">Don't Do it!</h1> 
              <h4 class="text-center"> At-risk users behaviors modeling on social networks </h4>
          
              <h2 style="text-align: center; color: white" >Demo</h2>
              <form id="contact-form" method="post" role="form" onsubmit="checkinput()">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">User post</span>
                  </div>
                  <textarea  class="form-control" rows="4" required="required" data-error="Please, leave us a message." name="message" ><?php if(isset($_GET['textMsg'])) { echo htmlentities ($_GET['textMsg']); }?></textarea>
                  
                </div>
              </div>
                
             <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                 <button            type="submit" name="submit" class="btn btn-primary btn-lg" id="formS" >Score this post</button>
                 <button  disabled  type="submit" name="submit" class="btn btn-primary btn-lg" id="formS2" style="display: none"><span class="glyphicon glyphicon-refresh"></span> Score this post </button>
                 <div id="loadingGif" style="display:none"><img src="content/logos/loading-7.gif" ></div>
              
            </div>
       </div>
                
                </form>   
    
              
       
              <div id="vis" style=" display:compact"> 
<?php if($_GET['st'] == "success") { ?>
                         <br>
                <p style="text-align: center;">Scores:</p>
                 <div id="chart_div" align='center' style="width: 400px; height: 120px; display: inline-block; margin: 0 auto;"></div>

<?php } ?>
                 
                 <?php if($_GET['st'] == "connFail") { ?>
                 <div align='center'>
                     <img src="content/logos/error--v1.png" style="display: block;  margin-left: auto;  margin-right: auto;   width: 10%;" >
                     <h4>We&rsquo;ll be back soon!</h4>
                     <p style="font-size:120%;">Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to, you can always <a href="template_full.php#projectContact">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
                       
                </div>
                 <?php } ?>
              </div>
                
                  </div>
      </div>
      </section>
    

       
        <?php
        
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
   #echo $result;
   #if(!$result){die("Connection Failure");}
   curl_close($curl);
   return $result;
 }
 
        //////////////////////////////
        if (isset($_POST['submit'])) {
            $text_toProcess = htmlspecialchars($_POST['message']);
            if (empty($text_toProcess)) {
                     header("Location: ./demoPage.php?contact=empty");
                    exit();
            }
            else{
                $data_array =  array(
      "data"        => $text_toProcess,
    );
                set_time_limit(300);
$make_call = callAPI('POST', 'http://advanse.lirmm.fr:5000/predict', json_encode($data_array));
if(!$make_call){ 
    $query = array(
    'st' => "connFail",
    'textMsg' => $_POST['message'],
    );
    
    $textUrl = "Location: ./demoPage.php?". http_build_query($query);
    header($textUrl);
    die("");
}
   ###############################################################
   
#    $data = json_encode($data_array);
#    $url = 'http://advanse.lirmm.fr:5000/predict';
#   echo "start here..1"; 
#   $curl = curl_init();
#   echo "start here..---1.1";
#   curl_setopt($curl, CURLOPT_POST, 1);
#   curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
#   curl_setopt($curl, CURLOPT_URL, $url);
#   curl_setopt($curl, CURLOPT_HTTPHEADER, array(
#      'APIKEY: 111111111111111111111',
#      'Content-Type: application/json',
#   ));
#   echo "start here..2";
#   curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
#   curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // EXECUTE:
#   echo "start here..3";
#   $result = curl_exec($curl);
   #echo $result;

#   if(!$result){die("Connection Failure");}
 #  curl_close($curl);
    #############################################################
$response = json_decode($make_call, true);
#$errors   = $response['response']['errors'];
#$data     = $response['response']['data'][0];
$past = time() - 3600;
#foreach ( $_COOKIE as $key => $value )
#{
#    echo $key;
#    echo "<br>";
#    echo $value;
#    setcookie( $key, $value, 1, '/' );
#    setcookie( $key, FALSE );
 #echo "<br>";
#echo '<br>';
#echo implode(', ', $response['anx_pos']) ;
#echo round($response['anx_pos'][0] * 100, 1);

$anx_scr = round($response['anorexia_pos'][0] * 100, 1);
echo $anx_scr;
echo '<br>';
$_SESSION['anx_scr'] = $anx_scr;
#setcookie("MyCookie_anx", $anx_scr,time()+ (60*15),"/");
#if (isset($_COOKIE['MyCookie_anx'])) {
#    echo "ANX yes it was set";
#    unset($_COOKIE['MyCookie_anx']); 
#    #return true;
#}
#$_COOKIE["MyCookie_anx"] = $anx_scr;
#echo round($response['dep_pos'][0] * 100, 1);
$dep_scr = round($response['depression_pos'][0] * 100, 1);
echo $dep_scr;
$_SESSION['dep_scr'] = $dep_scr;

$_SESSION['message'] = htmlspecialchars($_POST['message']);
#setcookie("MyCookie_dep", $dep_scr,time()+ (60*15),"/");
#if (isset($_COOKIE['MyCookie_dep'])) {
#    echo "DEP yes it was set";
#    unset($_COOKIE['MyCookie_dep']); 
#    #return true;
#}
#$_COOKIE["MyCookie_dep"] = $dep_scr;
#echo implode(', ', $response['dep_pos']);
$query = array(
    'st' => "success",
    'textMsg' => $_POST['message'],
);
#$textUrl = "Location: ./demoPage.php?contact=mailsent&textMsg=" . $_POST['message'];
$textUrl = "Location: ./demoPage.php?". http_build_query($query);
header($textUrl);
#header("Refresh:0");

            }
            
        }
        
        // put your code here
        

    
//////////////////////////////////////////////////////////////////////////////
         function phpAlert($message) {
      echo '<script type="text/javascript">';
      echo 'alert("'.$message.'");';
      #echo 'window.location.href = "template_full.php#projectContact";';
      echo '</script>';
    }

    if (!isset($_GET['st'])) {
      exit();
    }
    else {
      $contactCheck = $_GET['st'];

      if ($contactCheck == "error") {
        phpAlert('Something went wrong! Try again!');
        exit();
      }
      elseif ($contactCheck == "empty") {
        phpAlert('You did not fill in all the fileds!');
        exit();
      }
      elseif ($contactCheck == "char") {
        phpAlert('You used invalid characters!');
        exit();
      }
      elseif ($contactCheck == "invalidemail") {
        phpAlert('Your email address is invalid!');
        exit();
      }
      elseif ($contactCheck == "success") {
        #phpAlert('Mail sent!');
      ?>
    
       
    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  
   google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
           
        var depScr = <?php echo $_SESSION['dep_scr']?>;
       var anxScr = <?php echo $_SESSION['anx_scr']?>;
       
      
    
        //alert(Sring(cookies))

//var anxScr = cookies["MyCookie_anx"];
//var depScr = cookies["MyCookie_dep"];
//alert(Sring(cookies))


        var data_init = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Depression', 0],
          ['Anorexia', 0],
          ['Suicide', 0]
        ]);
        
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Depression', parseFloat(depScr)],
          ['Anorexia', parseFloat(anxScr)],
          ['Suicide', 0]
        ]);

        var options = {
          width: 400, height: 120,
          redFrom: 85, redTo: 100,
          yellowFrom:65, yellowTo: 85,
          minorTicks: 5,
          animation: {
              startup: true,
                duration: 1000,

               }
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

      
    chart.draw(data_init, options);
    chart.draw(data, options);
        
        

        
      }
    </script>               
                 
<?php  
    
        exit();
      }
    }

        ?>

    </body>

</html>
