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
        
            $article = new stdClass();
            $article->title = "An example article";
            $article->summary = "An example of posting JSON encoded data to a web service";

            $json_data = json_encode($article);

            $post = file_get_contents('http://localhost/rest/articles',null,stream_context_create(array(
                        'http' => array(
                        'protocol_version' => 1.1,
                        'user_agent'       => 'PHPExample',
                        'method'           => 'POST',
                        'header'           => "Content-type: application/json\r\n".
                              "Connection: close\r\n" .
                              "Content-length: " . strlen($json_data) . "\r\n",
                        'content'          => $json_data,
                ),
            )));

            if ($post) {
                echo $post;
            } else {
                echo "POST failed";
            }
        ?>
          </div>
      </div>
      </section>
    </body>
</html>
