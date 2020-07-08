<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mangaldeep Das | Projects</title>
    <link
      rel="stylesheet"
      href="./fontawesome-free-5.12.1-web/css/all.min.css"
    />
    <!-- css -->
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="./css/styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
     <link rel="shorcut icon" type="image/png" href="favicon.png">
  </head>

  <body>
    <!-- navbar -->
   <nav class="nav" id="nav">
      <div class="nav-center">
        <!-- nav header -->
        <div class="nav-header">
          <a class="navbar-brand animation-1 sign" href="#"><span class="animation-2" >M</span>
      <span class="animation-2">a</span>
      <span  class="animation-2">n</span>
      <span  class="animation-2">g</span>
      <span  class="animation-2">a</span>
      <span  class="animation-2">l</span>
      <span  class="animation-2">d</span>
      <span  class="animation-2">e</span>
      <span  class="animation-2">e</span>
      <span  class="animation-2">P</span>
      
      </a>
          <button class="nav-btn" id="nav-btn">
            <i class="fas fa-bars"></i>
          </button>
        </div>
        <!-- nav-links -->
        <ul class="nav-links">
        
       <li><a class="tryna1" href="index.php">
           Home</a></li>
        
         

         <li><a  class="tryna2" href="about.php">
         <span></span>
        <span></span>
        <span></span>
        <span></span>
         About</a></li>
          

         <li><a  class="tryna6" href="projects.php"><span></span>
        <span></span>
        <span></span>
        <span></span>
            Projects</a></li>
          

        <li><a  class="tryna7" href="contact.php"><span></span>
        <span></span>
        <span></span>
        <span></span>
            Contact</a></li>
        </ul>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- sidebar -->
    <aside class="sidebar" id="sidebar">
      <div>
        <button class="close-btn" id="close-btn">
          <i class="fas fa-times"></i>
        </button>
        <!-- nav-links -->
        <ul class="sidebar-links">
          <li>
            <a href="index.php">home</a>
          </li>
          <li>
            <a href="about.php" onclick="closeSidebar()">about</a>
          </li>
          <li>
            <a href="projects.php" onclick="closeSidebar()">projects</a>
          </li>
          <li>
            <a href="contact.php" onclick="closeSidebar()">contact</a>
          </li>
        </ul>

      </div>
    </aside>
    <!-- end of sidebar -->

   
    <header class="projects-hero">
      <!-- section title -->
      <div class="section-title">
        <h1> projects</h1>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
    </header>
     
        <section id="projects" class="section blog">
      <!-- section title -->
      <!--end of section title -->
      <div class="section-center blog-center">
        <!-- single article -->
        <div class="card">
          <!-- front of the card -->
          <div class="card-side card-front">
            <img class="gitimage" src="images/gitproj.png" alt="" />
            <div class="card-info">
              <h4>Github Account Fetcher</h4>
              <p>
                In this website you can fetch details of anyone's github account. This app is build using Reactjs and Firebase.
              </p>
              <div class="card-footer">
                <img src="images/projlast.png" alt="author image" />
              </div>
            </div>
          </div>
          <!-- card back  -->
          <div class="card-side card-back">
            <a href="https://github.com/liku88/React_Github_Account_Fetcher"><button class="btn btn-contact">visit site</button></a>
          </div>
        </div>
        <!-- end of single article -->
        <!-- single article -->
        <div class="card">
          <!-- front of the card -->
          <div class="card-side card-front">
            <img class="gitimage" src="images/Mernproj.png" alt="" />
            <div class="card-info">
              <h4>Mern E-commerce website</h4>
              <p>
              An e-commerce store with 2 payment gateway integration, by using mongo, Express, React and Nodejs.
              </p>
              <div class="card-footer">
                <img src="images/projlast.png" alt="author image" />
              </div>
            </div>
          </div>
          <!-- card back  -->
          <div class="card-side card-back">
            <a href="https://github.com/liku88/MERN-ECOMMERCE_WEBSITE"><button class="btn btn-contact">visit site</button></a>
          </div>
        </div>
        <!-- end of single article -->
        <!-- single article -->
        <div class="card">
          <!-- front of the card -->
          <div class="card-side card-front">
            <img class="gitimage" src="images/covidliku.png" alt="" />
            <div class="card-info">
              <h4>Covid-19 Tracker</h4>
              <p>
            Live tracking corona cases all over the world. 
              </p>
              <div class="card-footer">
                <img src="images/projlast.png" alt="author image" />
              </div>
            </div>
          </div>
          <!-- card back  -->
          <div class="card-side card-back">
            <a href="https://github.com/liku88/Corona-Live-Tracking.github.io"><button class="btn btn-contact">visit site</button></a>
          </div>
        </div>
        </div>
        <!-- end of single article -->
    </section>
    <!--end of  blog -->
    
  

    <!-- footer -->
    <footer class="footer">
      <p>&copy; <span id="date"></span> Mangaldeep Das. All rights reserved.</p>
    </footer>
    
    <script src="js/app.js"></script>
  </body>
</html>
