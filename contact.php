<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mangaldeep Das | Contact</title>
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

    <section class="section single-page">
      <!-- section title -->
      <div class="section-title">
        <h1>contact</h1>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div id="error_message"></div>
      <form id="form" name="contact" method="post" data-netlify="true" onsubmit="return validate()">     
          <input name="name" id="name" type="text" class="feedback-input" placeholder="Name" />   
          <input name="email" id="email" type="text" class="feedback-input" placeholder="Email" />
          <textarea name="text" id="message" class="feedback-input" placeholder="Message"></textarea>
          <button type="submit" name="submit" class="btn btn-contact">Submit</button>
      </form>
    </section>

    <!-- footer -->
    <footer class="footer">
      <p>&copy; <span id="date"></span> Mangaldeep Das. All rights reserved.</p>
    </footer>
    
    <script src="js/app.js"></script>
  </body>
</html>

<?php
include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['text'];
    $insertquery = "insert into mangaldeep88(name, email, message) values ('$name','$email','$msg')";
    
    $query = mysqli_query($con, $insertquery);
    
    
}


    





?>
