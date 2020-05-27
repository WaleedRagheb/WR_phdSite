<!DOCTYPE html>
<html lang="en">
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
  
  <!-- Some explanations about the scrollspy : https://www.w3schools.com/bootstrap/bootstrap_scrollspy.asp -->
  <body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!--
      There some color schemes you can choose by changing the navbar-* and bg-* classes
      See examples here : https://getbootstrap.com/docs/4.0/components/navbar/#color-schemes
      You can create a custom one here : https://stackoverflow.com/questions/18529274/change-navbar-color-in-twitter-bootstrap
      (Be mindful that you'll have to import css by doing so)

      The 'sticky-top' class allows to keep the navbar at the top of the page when scrolling
    -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">

      <!-- You can change the icon displayed by another one from https://fontawesome.com -->
      <!-- p-* applies a padding with a given size. More informations here : https://www.w3schools.com/bootstrap4/bootstrap_utilities.asp -->
      <span class="p-1" style="font-size: 2em; color: white;">
        <!--<i class="fas fa-umbrella-beach"></i>-->
      </span>
      <!--<a class="navbar-brand" href="#">Don’t Do It </a>-->

      <!-- This buttons allows to use a dropdown menu in case the screen is too small -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <!-- ml-auto allows to move items in the menu at the the right of the navbar -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">

            <!-- href="#idName" allows to redirect to an anchor (an id="...") on the page -->
            <a class="nav-link" href="#projectMore">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projectTeam">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projectNews">Publications</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#projectContact">Contact us !</a>
          </li>
        </ul>
      </div>

    </nav>

    <!-- Elements in this page are divided into sections for more clarity -->

    <!-- The first element displays a simple background image with some text about your project -->
    <section id="projectShowcase">

      <!-- The background image is located in the css attached to this file -->
      <div class="sectionShowcase backgroundImg">

        <!-- centeredFlexbox centers elements both horizontally and vertically, see the css for more details -->
        <div class="centeredFlexbox">
          <h1 class="text-uppercase font-weight-bold text-center">Don't Do it!</h1>
          <h4 class="text-center">At-risk users behaviors modeling on social networks </h4>
          <a class="btn btn-primary" href="#projectMore" role="button">Learn more about our project</a>
          <br>
          <a class="btn btn-primary" href="./demoPage.php" role="button">Project Demo</a>
        </div>
      </div>
      
    </section>

    <!-- The second element displays informations about your project -->
    <section id="projectMore">
      <div class="sectionMore section">

        <!--
          .my-# / my-*-# allows to change the top and bottom margins (sm/md/lg/xl allows it to be responsive)
          m*-5 allows to add a margin with a given size (defined in the boostrap css)
        -->
        <div class="container my-sm-5 my-md-5 my-lg-5 my-xl-5 mt-5 mb-5">

          <!-- similar to m*-5, p*-4 allows to add a padding with a given size -->
          <h2 style="text-align: center; color: white" class="pb-4">Our project !</h2>

          <!--
            Here is one of the main component of Bootstrap : the grid system.
            A grid is divided into 12 columns, which are called with the 'col-*' class.
            Thus, if 4 elements must be displayed on the screen, each element will have the 'col-3' class.
            You can either let Bootstrap decide which space each column can occupy, or you can specify it.
            To do so, simply pass mutliples 'col-*' classes to a tag : sm for small screen, md for medium screen and so on.
            So if the screen is too small to display the 4 elements in one row, the css will change and it will accordingly
            display the columns (one under each other on smartphones for example).

            More information about the grid system in Bootstrap :
              https://getbootstrap.com/docs/4.3/layout/grid/
              https://www.w3schools.com/bootstrap4/bootstrap_grid_basic.asp

            Another main component to get a grasp on is the flexbox : https://css-tricks.com/snippets/css/a-guide-to-flexbox/
          -->
          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
              <!-- As explained before, the column here will occupy :
                all available space on extra small and small screens
                4 columns on medium to extra large screens
              -->
              <div class="col-120 col-sm-120 col-md-40 col-lg-40 col-xl-40 ">
                <!--<h3>Abstract</h3>-->
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra ante eros, eget hendrerit dui auctor sit amet. Fusce finibus, dui et volutpat bibendum, odio lorem vulputate metus, et euismod dui sem porta sem.</p>-->
                <p style="text-align: center;"> Suicide is a person's deliberate act of ending his/her own life. Suicide reveals serious personal problems but also often reflects a deterioration of the social context in which an individual lives. According to a recent and alarming WHO (World Health Organisation) report (September 4, 2014), one person dies of suicide every 40 seconds in the world - more than all the yearly victims of wars and natural disaster – more than 1,100,000 by year. Most suicide attempts are supported by hospital emergency units. Suicide is a major public health issue with strong socio-economic consequences. For example, the economic cost of suicide was estimated to 5 billion euros in 2009 in France. In the framework of the 2013-2020 Mental Health Action Plan, WHO member states plan 10% reduction in suicide rates in each country before 2020.


</p>
<p style="text-align: center;">The main objective is to design and implement new approaches for early detection of at risk individuals through their use of social media. We have already developed predictive prototypes based on attentive deep models, which has proven to be effective for identifying at-risk individuals of the most common mental disorder (depression, signs of anorexia and self-harm) through modeling the temporal variation and capture a possible deterioration in users mental state in order to offer assistance when needed. </p>
      
<p class="mentions" style="font-size: 15px; font-style: italic;">
                  We would like to acknowledge La Région Occitanie and lAgglomération Béziers
Méditerranée which finance this thesis as well as INSERM and CNRS for their financial support of CONTROV project.
                
                </p>
                <img height="60" width="60" src="./content/logos/lirmm.png"
                     data-holder-rendered="true" align="right" hspace="10">
                
                <img height="60" width="60" src="./content/logos/montpellier_university_logo.png"
                     data-holder-rendered="true" align="right" hspace="10">
                
                <img height="60" width="80" src="./content/logos/logoIUT.jpg"
                     data-holder-rendered="true" align="right"  hspace="10">
              </div>
            <!--Grid column-->

            <!--Grid column-->
             <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h3>A nice list</h3>

                <!--
                  To build a nested list, you need to instantiate list items inside
                  unordered list inside list items inside unordered list inside...
                
                <div class="nestedList">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <h4>Level 1</h4>
                      <ul class="list-group">
                        <li class="list-group-item">
                          <h4>Level 1.1</h4>
                          <ul class="list-group">
                            <li class="list-group-item">Level 1.1.1</li>
                            <li class="list-group-item">Level 1.1.2</li>
                            <li class="list-group-item">Level 1.1.3</li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div> -->
            <!--Grid column-->

            <!--Grid column-->
           <!-- <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

              <!--
                There are various styles available for button : info, warning, danger, success, default, ...
                More info about buttons : https://getbootstrap.com/docs/4.3/components/buttons/
              
              <h3>Some buttons and a dropdown list</h3>
              <button class="btn btn-info">Click me!</button>
              <button class="btn btn-danger">Don't click me !</button>
              <button class="btn btn-success">Success !</button>
              <hr>

              <!--
                A simple dropdown list opened using a button
                More info about it : https://getbootstrap.com/docs/4.3/components/dropdowns/
             
              <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle"
                  type="button" id="dropdownMenuButton" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div> -->
            <!--Grid column-->

          </div>
          <!--Grid row-->

          </div>
      </div>
    </section>

    <!-- The third element displays informations about your team -->
    <section id="projectTeam">
      <div class="sectionTeam section">

        <!-- .my-# / my-*-# allows to change the top and bottom margins (sm/md/lg/xl allows it to be responsive) -->
        <div class="container my-sm-2 my-md-2 my-lg-5 my-xl-5 mt-5 mb-5">
          <h2 style="text-align: center; color: white" class="pb-4">Our team !</h2>

          <!--Grid row-->
          <!--
            As the name implies, 'text-center' centers elements inside the div
            More info about it : https://getbootstrap.com/docs/4.3/utilities/text/#text-alignment
          -->
          <div class="row text-center">

            <!--Grid column-->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">

              <!-- More about rounded images : https://www.w3schools.com/bootstrap4/bootstrap_images.asp -->
              <img class="rounded-circle forcedSizeImg" alt="100x100" src="./content/Team/ragheb.jpg"
                data-holder-rendered="true">
                <h4>Waleed Ragheb</h4>
                <p>PhD Student</p>

                <!-- If you wnat to customize the buttons, replace 'btn-primary' by 'btn-icon' -->
                <!-- You can change the icon displayed by another one from https://fontawesome.com in the <i> tag -->
                
                <a href="https://www.lirmm.fr/users/utilisateurs-lirmm/waleed-ragheb2" class="btn btn-primary btn-lg"><i class="fas fa-globe-europe"></i></a>
                <a href="mailto:Waleed.Ragheb@lirmm.fr" class="btn btn-primary btn-lg"><i class="fas fa-at"></i></a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">

                <img class="rounded-circle forcedSizeImg" alt="100x100" src="./content/Team/aze.jpg"
                data-holder-rendered="true">
                <h4>Jérôme Azé</h4>
                <p>Professor</p>

                <!-- If you wnat to customize the buttons, replace 'btn-primary' by 'btn-icon' -->
                <!-- You can change the icon displayed by another one from https://fontawesome.com in the <i> tag -->
                
                <a href="https://www.lirmm.fr/users/utilisateurs-lirmm/jerome-aze" class="btn btn-primary btn-lg"><i class="fas fa-globe-europe"></i></a>
                <a href="mailto:Jerome.Aze@lirmm.fr" class="btn btn-primary btn-lg"><i class="fas fa-at"></i></a>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <img class="rounded-circle forcedSizeImg" alt="100x100" src="./content/Team/sandra-light.jpg"
                data-holder-rendered="true">
                <h4>Sandra Bringay</h4>
                <p>Professor</p>

                <!-- If you wnat to customize the buttons, replace 'btn-primary' by 'btn-icon' -->
                <!-- You can change the icon displayed by another one from https://fontawesome.com in the <i> tag -->
                
                <a href="https://www.lirmm.fr/users/utilisateurs-lirmm/sandra-bringay" class="btn btn-primary btn-lg"><i class="fas fa-globe-europe"></i></a>
                <a href="mailto:Sandra.Bringay@lirmm.fr" class="btn btn-primary btn-lg"><i class="fas fa-at"></i></a>
            </div>
            <!--Grid column-->
            
            <!--Grid column-->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
               
            </div>
            
            <!--Grid column-->
            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <img class="rounded-circle forcedSizeImg" alt="100x100" src="./content/Team/maximilienservajean.png"
                data-holder-rendered="true">
                <h4>Maximilien Servajean</h4>
                <p>Assistant Professor</p>

                <!-- If you wnat to customize the buttons, replace 'btn-primary' by 'btn-icon' -->
                <!-- You can change the icon displayed by another one from https://fontawesome.com in the <i> tag -->
                
                <a href="https://www.lirmm.fr/users/utilisateurs-lirmm/maximilien-servajean" class="btn btn-primary btn-lg"><i class="fas fa-globe-europe"></i></a>
                <a href="mailto:Maximilien.Servajean@lirmm.fr" class="btn btn-primary btn-lg"><i class="fas fa-at"></i></a>
            </div>
            <!--Grid column-->
            <!--Grid column-->

          </div>
          <!--Grid row-->

        </div>
      </div>
    </section>
    
    <!-- The fourth element displays news about your project -->
    <section id="projectNews">

      <div class="sectionNews section">
        <div class="container my-sm-2 my-md-2 my-lg-5 my-xl-5 mt-5 mb-5">
          <h2 style="text-align: center; color: white" class="pb-4">Publications</h2>
           <h4 style="text-align: left; color: white" class="pb-4">Conference Papers</h4>
           <ul style="list-style-type:disc;">
               <li>
                   <a href="https://link.springer.com/chapter/10.1007/978-3-030-28577-7_21">  <strong> Language Modeling in Temporal Mood Variation Models for Early Risk Detection on The Internet </strong> </a> Waleed Ragheb, Jérôme Azé, Sandra Bringay, Maximilien Servajean. Proceedings of the 10th International Conference of the CLEF Association (CLEF 2019). Lugano, Switzerland(2019)
               </li>
               <li>
                    <a href="https://www.irit.fr/pfia2019/wp-content/uploads/2019/07/actes_IC_CH_PFIA2019-2.pdf">  <strong> Pourquoi dois-je croire ta prédiction ? Comment expliquer les résultats d’une classification automatique de sentiments à partir de textes. </strong> </a> Waleed Ragheb, Jérôme Azé, Sandra Bringay, Maximilien Servajean. Journées francophones d’Ingénierie des Connaissances (IC-2019). Toulouse, France (2019)
               </li>

           </ul>
           <br>
           <h4 style="text-align: left; color: white" class="pb-4">Workshops Papers</h4>
           <ul style="list-style-type:disc;">
               <li>
                   <a href="https://www.aclweb.org/anthology/S19-2042/">  <strong> LIRMM-Advanse at SemEval-2019 Task 3: Attentive Conversation Modeling for Emotion Detection and Classification </strong> </a> Waleed Ragheb, Jérôme Azé, Sandra Bringay, Maximilien Servajean. SemEval @ NAACLHLT 2019: 251-255. Minnesota, USA (2019)
               </li>
               
               <li>
                   <a href="http://ceur-ws.org/Vol-2380/paper_126.pdf">  <strong> Attentive Multi-stage Learning for Early Risk Detection of Signs of Anorexia and Self-harm on Social Media. </strong> </a> Waleed Ragheb, Jérôme Azé, Sandra Bringay, Maximilien Servajean. CLEF eRisk-2019 Tasks for Early Risk Detection on The Internet (working notes). Lugano, Switzerland (2019)
               </li>
               
               <li>
                   <a href="https://www.semanticscholar.org/paper/Attention-based-Modeling-for-Emotion-Detection-and-Ragheb-Az%C3%A9/9285b7ae0e3aca489f3bc54c413e534a1230aed0">  <strong> Attention-based Modeling for Emotion Detection and Classification in Textual Conversations </strong> </a> Waleed Ragheb, Jérôme Azé, Sandra Bringay, Maximilien Servajean. 2ndWorkshop on Humanizing AI (HAI)@IJCAI’19. Macao, China (2019)
               </li>
               
               <li>
                   <a href="http://ceur-ws.org/Vol-2125/paper_78.pdf">  <strong> Temporal Mood Variation: at the CLEF eRisk-2018 Tasks for Early Risk Detection on The Internet </strong> </a> Waleed Ragheb, Bilel Moulahi, Sandra Bringay, Jérôme Azé, Maximilien Servajean. CLEF eRisk-2018 Tasks for Early Risk Detection on The Internet (working notes). Avignon, France (2018)
               </li>
               
               <li>
                   <a href="https://www.semanticscholar.org/paper/LIRMM%40DEFT-2018-%E2%80%93-Mod%C3%A8le-de-classification-de-la-Ragheb-Moulahi/48afb9e91f4fec2d1f6c064b16e97210ec564263">  <strong> LIRMM@DEFT-2018 – Modèle de classification de la vectorisation des documents </strong> </a> Waleed Ragheb, Bilel Moulahi, Sandra Bringay, Jérôme Azé, Maximilien Servajean. DEFT-2018: Défi Fouille de Textes. Rennes, France (2018)
               </li>
               

           </ul>
           
          <!--Grid row-->
<!--          <div class="row">
                
            Grid column
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">

               More info about the cards : https://getbootstrap.com/docs/4.3/components/card/ 
              <div class="card">
                <img src="https://image.shutterstock.com/image-photo/green-lemons-on-tree-600w-1503797960.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            Grid column

            Grid column
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">
              <div class="card">
                <img src="https://image.shutterstock.com/image-photo/amazing-autumn-forest-morning-sunlight-600w-1471472060.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            Grid column

            Grid column
            <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-5">
              <div class="card">
                <img src="https://image.shutterstock.com/image-photo/mountains-during-sunset-beautiful-natural-600w-407021107.jpg" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            Grid column

          </div>-->
          <!--Grid row-->
        </div>
      </div>

    </section>

    <!-- The fifth element let users send you an email -->
    <section id="projectContact">

      <div class="sectionContact ">
        <div class="container my-sm-2 my-md-2 my-lg-5 my-xl-5 mt-5 mb-5">
          <h2 style="text-align: center; color: white" class="pb-4">Contact us !</h2>

          <!-- Upon submitting the form, the contact.php script is called -->
          <form id="contact-form" method="post" action="./contact.php" role="form">

            <!--Grid row-->
            <!--
              As the name implies, 'justify-content-center' centers elements inside the flexbox
              More info about it here : https://getbootstrap.com/docs/4.1/utilities/flex/
            -->
            <div class="row justify-content-center">

              <!--Grid column-->
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Firstname</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter your firstname" name="firstname"
                    aria-label="Enter your firstname" aria-describedby="basic-addon1" required="required" data-error="Firstname is required.">
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">

                <!-- More info about input groups here : https://getbootstrap.com/docs/4.3/components/input-group/ -->
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Lastname</span>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter your lastname" name="lastname"
                    aria-label="Enter your lastname" aria-describedby="basic-addon1" required="required" data-error="Lastname is required.">
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                  </div>
                  <input type="email" class="form-control" placeholder="Enter your email" name="email"
                    aria-label="Enter your email" aria-describedby="basic-addon1" required="required" data-error="Valid email is required.">
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mb-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">Your message</span>
                  </div>
                  <textarea class="form-control" rows="4" required="required" data-error="Please, leave us a message." name="message"></textarea>
                </div>
              </div>
              <!--Grid column-->

              <!--Grid column-->
              <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">Send message</button>
              <div>
              <!--Grid column-->

            </div>
            <!--Grid row-->

          </form>

        </div>
      </div>

    </section>

  </body>
  
  <footer style="background-color: #051c34">
    <div class="container">

      <!-- 'align-items' work in pair with flexbox, it simply aligns items vertically in the parent flexbox -->
      <div class="row" style="align-items: center;">
        <div class="col-md-4">
          <span class="copyright">Waleed Ragheb, ADVANSE Team, LIRMM 2019</span>
        </div>
        <div class="col-md-4">
<!--          <a href="#" class="btn btn-primary"><i class="fas fa-hashtag"></i></a>
          <a href="#" class="btn btn-primary"><i class="fas fa-globe-europe"></i></a>
          <a href="#" class="btn btn-primary"><i class="fas fa-link"></i></a>-->
        </div>
        <div class="col-md-4">
          <a href="#">Privacy Policy</a>
          <a href="#">Terms of Use</a>
        </div>
      </div>
    </div>
  </footer>

  <?php
    function phpAlert($message) {
      echo '<script type="text/javascript">';
      echo 'alert("'.$message.'");';
      echo 'window.location.href = "template_full.php#projectContact";';
      echo '</script>';
    }

    if (!isset($_GET['contact'])) {
      exit();
    }
    else {
      $contactCheck = $_GET['contact'];

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
      elseif ($contactCheck == "mailsent") {
        phpAlert('Mail sent!');
        exit();
      }
    }
  ?>

</html>