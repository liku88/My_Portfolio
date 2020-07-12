<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mangaldeep Das</title>
    <!-- font-awesome -->
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
   
  
  
   <div id="progressbar"></div>
<div id="scrollPath"></div>
   
   <div class="preloader">
       <div class="counter">0</div>
   </div>
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
        
         

         <li><a  class="tryna2" href="#about">
         <span></span>
        <span></span>
        <span></span>
        <span></span>
         About</a></li>
          

         <li><a  class="tryna6" href="#projects"><span></span>
        <span></span>
        <span></span>
        <span></span>
            Projects</a></li>
          

        <li><a  class="tryna7" href="#connect"><span></span>
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
            <a href="#about" onclick="closeSidebar()">about</a>
          </li>
          <li>
            <a href="#projects" onclick="closeSidebar()">projects</a>
          </li>
          <li>
            <a href="#connect" onclick="closeSidebar()">contact</a>
          </li>
        </ul>
      </div>
    </aside>
    <!-- end of sidebar -->

    <!-- header -->
    <header class="hero">
      <div class="section-center hero-center"  >
        <article class="hero-info" id="body">
          <div class="underline"></div>
                   <div  class="glitch" data-text="I'm MANGALDEEP">I'm MANGALDEEP</div>
  <div class="glow">I'm MANGALDEEP</div>
          <h4>
          <span class="hello"></span>
          </h4>
          
          <br>
         
         <a href="contact.php" class="neon-effect">
             <span></span>
             <span></span>
             <span></span>
             <span></span>
             Hire Me
         </a>
         
         
          <!-- social icons -->
          <ul class="social-icons hero-icons md-icons">
            <li>
              <a href="https://github.com/liku88" class="social-icon github" target="_blank">
                <i class="fab fa-github github"></i>
              </a>
            </li>
              <li>
              <a href="https://www.instagram.com/mangaldeep88/" class="social-icon" target="_blank">
                <i class="fab fa-instagram insta"></i>
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/mangaldeep-das-1a4367159/" class="social-icon" target="_blank">
                <i class="fab fa-linkedin link"></i>
              </a>
            </li>
            <li>
              <a href="./resume/MangaldeepDas.pdf" class="social-icon" download >
                <i class="fas fa-file-pdf file"></i>
              </a>
            </li>
                <li>
              <a href="https://www.youtube.com/channel/UCS3qMz3kVd0pHwGLjV4s5MA" class="social-icon" target="_blank" >
                <i class="fab fa-youtube file"></i>
              </a>
            </li>
          </ul>
        </article>
        <article class="hero-img">
          <img src="images/liku.jpg" class="hero-photo" alt="Mangaldeep Das" />
        </article>
      </div>
    </header>
    
    <!-- end of header -->

    <!-- about -->
    <section id="about" class="section about">
      <div class="section-center about-center">
        <!-- about img -->
        <article class="about-img">
          <img
            src="images/IMG-20200124-WA0004-01.jpeg" class="hero-photo" alt="about img"/>
        </article>
        <!-- about info -->
        <article class="about-info">
          <!-- section title -->
          <div class="section-title about-title">
            <h2>about</h2>
            <div class="underline"></div>
          </div>
          <!--end of section title -->
          <p>
            I am Mangaldeep Das, a Full Stack web devloper working from home.
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quae,
            eum maiores est enim earum fugiat aspernatur. Fuga qui iste amet
            reiciendis possimus rerum omnis recusandae molestias error
            consequuntur, doloribus inventore reprehenderit officiis. Dolore
            aut, repellendus eius fugiat numquam cumque.
          </p>
          <a href="about.php" class="btn aboutmebtn">about me</a>
        </article>
      </div>
    </section>
    <!-- end of about -->

    <!-- skills -->
    <section id="skills" class="section">
      <!-- section title -->
      <div class="section-title">
        <h2>Skills</h2>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div class="services-center section-center">
        <!-- single service -->
        <article class="service">
          <i class="fas fa-code service-icon"></i>
          <h4>HTML</h4>
          <div class="underline"></div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <i class="fab fa-css3 service-icon"></i>
          <h4>CSS</h4>
          <div class="underline"></div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <i class="fab fa-js-square service-icon"></i>
          <h4>Javascript</h4>
          <div class="underline"></div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <i class="fab fa-react service-icon"></i>
          <h4>React JS</h4>
          <div class="underline"></div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <i class="fab fa-bootstrap service-icon"></i>
          <h4>Bootstrap</h4>
          <div class="underline"></div>
        </article>
        <!-- end of single service -->
        <!-- single service -->
        <article class="service">
          <i class="fab fa-php service-icon"></i>
          <h4>PHP</h4>
          <div class="underline"></div>
        </article>
        <article class="service">
          <i class="fab fa-node service-icon"></i>
          <h4>Node</h4>
          <div class="underline"></div>
        </article>
        <article class="service">
          <i class="fab fa-java service-icon"></i>
          <h4>Java</h4>
          <div class="underline"></div>
        </article>
         <article class="service">
          <i class="fas fa-blender service-icon"></i>
          <h4>Blender</h4>
          <div class="underline"></div>
        </article>
        <!-- end of single service -->
      </div>
    </section>
    <!-- end of skills -->
    
        <!-- timeline -->
    <section id="education" class="section timeline">
      <!-- section title -->
      <div class="section-title">
        <h2>education</h2>
        <div class="underline"></div>
      </div>
      <!--end of section title -->
      <div class="section-center timeline-center">
        <!-- single timeline item --
        <!-- end of  single timeline item -->
        <!-- single timeline item -->
        <article class="timeline-item">
          <img src="images/soa.jfif" class="timeline-logo" alt="logo">
          <h4>2018-22</h4>
          <p>
            Bachelor of Technology in Computer Science & Information Technology.
            <br>
            Institute of Technical Education & Research.
            <br>
            Bhubaneswar,India
          <span class="number">
            3
          </span>
          </p>
        </article>
        <!-- end of  single timeline item -->
        <!-- single timeline item -->
        <article class="timeline-item">
          <img src="images/pem.jfif" class="timeline-logo" alt="logo">
          <h4>2018</h4>
          <p>
            Pre-University Course,PCMB
            <br>
            Prabhujee English Medium School 
            <br>
            Bhubaneswar,India
          </p>
          <span class="number">
            2
          </span>
        </article>
        <!-- end of  single timeline item -->
        <!-- single timeline item -->
        <article class="timeline-item">
          <img src="images/pem.jfif" class="timeline-logo" alt="logo">
          <h4>2016</h4>
          <p>
            Primary and High School
            <br>
            Prabhujee English Medium School
            <br>
            Bhubaneswar,India
          </p>
          <span class="number">
            1
          </span>
        </article>
        <!-- end of  single timeline item -->
      </div>
    </section>
    <!--end of  timeline -->

    <!--experience-->
    <section id="experience" class="section">
      <!-- section title -->
      <div class="section-title">
        <h2>Blender</h2>
        <div class="underline"></div>
      </div>
      <div class="services-centerr section-center" >
        <div class="carousel">
    <div class="carousel-item"><img class="blenderimg" src="images/blender1.jpg"></div>
    <div class="carousel-item"><img class="blenderimg" src="images/blender2.jpg"></div>
   <div class="carousel-item"><img class="blenderimg" src="images/blender3.jpg"></div>
    <div class="carousel-item"><img class="blenderimg" src="images/blender5.jpg"></div>
    <div class="carousel-item"><img class="blenderimg" src="images/blender6.jpg"></div>
<!--      <div class="carousel-item"><img class="blenderimg" src="images/blender4.jpg"></div>-->
        <div class="carousel-item">
         <img class="blender1img" src="images/blender7.jpg">
         </div>
         <img src="images/iphone6.png" alt="mobile" class="mobile">
  </div>
        </div>
        <!-- end of single service -->
      <!--end of experience -->
    </section>
    
<!--    spotify-->
       <section id="experience" class="section">
      <!-- section title -->
      <div class="section-title">
        <h2>My Spotify</h2>
        <div class="underline"></div>
      </div>
      <div class="services-centerr section-center" >
  <iframe src="https://open.spotify.com/embed/album/1DFixLWuPkv3KT3TnV35m3" width="1200" height="480" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
        </div>
        <!-- end of single service -->
      <!--end of experience -->
    </section>   
<!--   spotifyends-->
   
<!--   youtubesection-->
        
        
        
          <section id="experience" class="section">
      <!-- section title -->
      <div class="section-title">
        <h2>My Youtube</h2>
        <div class="underline"></div>
      </div>
      <div class="services-centerr section-center" >
        <div class="carousel">
    <div class="carousel-item"><iframe class="yotubeliku" width="240" height="450" src="https://www.youtube.com/embed/d3V1RUWYJZs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    <div class="carousel-item"><iframe class="yotubeliku" width="240" height="450" src="https://www.youtube.com/embed/lGiegAJNtiw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
     <div class="carousel-item"><iframe class="yotubeliku" width="240" height="450" src="https://www.youtube-nocookie.com/embed/JEcXyj4aJn8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    
      <div class="carousel-item"><iframe class="yotubeliku" width="240" height="450" src="https://www.youtube.com/embed/uEEU5N5eLVA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="carousel-item"><iframe class="yotubeliku" width="240" height="450" src="https://www.youtube.com/embed/nxfEkbfInZA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

         <img src="images/iphone6.png" alt="mobile" class="mobile">
  </div>
        </div>
        <!-- end of single service -->
      <!--end of experience -->
    </section>
        
<!--    youtubesectionends-->


    
    <!--volunteer work-->
    <section id="volunteer" class="section">
      <!-- section title -->
      <div class="section-title">
        <h2>Certifications</h2>
        <div class="underline"></div>
      </div>
      <div class="services-center section-center" >
        <!-- single service -->
       <div class="container-certificate">
          
           <div class="row">
        <div class="col-lg-4">
             <div class="card-certificate">
               <div class="imgBx">
                   <img src="images/certificate1.png" alt="">
               </div>
               <div class="content-certificate">
                   <h2>Front-End Course</h2>
               </div>
           </div>
        </div>
        <div class="col-lg-4">
           <div class="card-certificate">
               <div class="imgBx">
                   <img src="images/certificate2.png" alt="">
               </div>
               <div class="content-certificate">
                   <h2>React-Js</h2>
               </div>
           </div>
        </div>
        <div class="col-lg-4">
            <div class="card-certificate">
               <div class="imgBx">
                   <img src="images/certificate3.png" alt="">
               </div>
               <div class="content-certificate">
                   <h2>Full Stack Mern</h2>
               </div>
           </div>
        </div>
    </div> 
       </div>
        </div>
      <!--end of volunteer work -->
    </section>

     <!-- languages -->
     <section id="languages" class="section about">
      <div class="section-center about-center">
        <!-- about info -->
        <article class="about-info">
          <!-- section title -->
          <div class="section-title about-title">
            <h2>languages</h2>
            <div class="underline"></div>
          </div>
          <!--end of section title -->
          <h4 id="hero">
          </h4>
          <br>
          <p>English /   odia  /  Sanskrit  / Hindi</p>
        </article>
        <!-- about img -->
        <article class="about-img">
          <img
            src="images/likulanguage.jpg"
            class="hero-photo likume"
            alt="about img"
          />
        </article>
      </div>
    </section>
    <!-- end of languages -->
    
      <!-- projects -->
    <section id="projects" class="section blog">
      <!-- section title -->
      <div class="section-title">
        <h2>projects</h2>
        <div class="underline"></div>
      </div>
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
    <!--end of projects -->

    <!-- connect -->
  <section id="connect" class="connect">
      <video
        controls
        autoplay
        muted
        loop
        class="video-container"
        poster="./images/project-1.jpeg"
      >
        <source src="videos/connect.mp4" type="video/mp4" />
        Sorry, your browser does not support embedded videos
      </video>
      <div class="video-banner">
        <!-- section title -->
        <div class="section-title">
          <h2>let's get in touch</h2>
          <div class="underline"></div>
        </div>
        <!--end of section title -->
        <p class="video-text">
          If your organisation is looking to hire someone who can bring out of the box thinking to the team, or if you want to just say something nice, contact me using the form below.
        </p>
        <a href="contact.php" class="btn  btn-contact">contact me</a>
      </div>
    </section>
    <!-- end of connect -->
    
  

    <!-- footer -->
    <footer class="footer">
      <p>&copy; <span id="date"></span> Mangaldeep Das. all rights reserved</p>
    </footer>
    <!--script tags-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="particles.js"></script>
    <script src="particleapp.js"></script>
    <script src="typed.js-master/lib/typed.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typeit@7.0.4/dist/typeit.min.js"></script>
    <script src="./js/app.js"></script>
    
  </body>
</html>
