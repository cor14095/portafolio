<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Portafolio Perry</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  </head>

  <body>

    <nav class="perry-mouth" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">
          <img src="img/logo.png"></img>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#aboutMe">About me</a></li>
          <li><a href="#myWork">My work</a></li>
          <li><a href="#iKnow">What I know</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li class="center"><h2 class="perry-text">Menu</h2></li>
          <li><a href="#aboutMe">About me</a></li>
          <li><a href="#myWork">My work</a></li>
          <li><a href="#iKnow">What I know</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>

    <div id="index-banner" class="parallax-container">
      <div class="section no-pad-bot">
        <div class="container dark-bg-3">
          <br><br>
          <h1 class="header center white-text">Alejandro Cort&eacute;s</h1>
          <div class="row center">
            <h5 class="header col s12 light white-text">Joven programador, guatemalteco, delValleriano y gamer.</h5>
          </div>
          <br><br>
        </div>
      </div>
      <div class="parallax"><img src="img/index.jpg" alt="Unsplashed background img 1"></div>
    </div>

    <div class="parallax-container" id="aboutMe">
      <div class="section no-pad max-height">

        <div class="carousel carousel-slider center max-height" data-indicators="true">
          <div class="carousel-item perry-background white-text" href="#two!">
            <h1>Who is this guy?</h1>
            <div class="about-me-p white-text">
              <p>Well... Hi! I guess, My name is Alejandro Joaquin Cort&eacute;s De Le&oacute;n, born 8th of March of 1996.</p>
              <p> I'm from Guatemala, raise in the city playing with my friends and family knowing nothing about life...
              All my life I've like videogames and tech stuff but I start programming until I was 15 at Colegio Suizo Americano,
              it was kindda hard since I was really naive about the topic, but I start getting better at it, to the point that I became a really good programmer.</p>
              <p>After School I decide to study computer science at Universidad del Valle de Guatemala, or UVG. Right now I'm on my 8th semester, everything is...
                burning... pls... send help :(.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="container" id="myWork">
      <div class="section">

        <!--   Icon Section   -->
        <div class="row flex-center">
          <div class="col s12 m4">
            <div class="icon-block">
              <div class="icon-holder">
                <a class="icons" href="https://github.com/cor14095">
                  <img src="img/GitHub_Logo.png"></img>
                </a>
              </div>
              <h5 class="center">My github profile</h5>

              <p class="light">Here you might find a couple of repositories where I've been working on Java, PHP, C++, typescript, python, Unity C# and some other awsome stuff.</p>
              <p class="light">Most recently I'm learning about Redux, React, Vuejs and playing with things like that, you might want to check my latest repositories 'laberinto' and 'contador'!</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <div class="icon-holder">
                <a class="icons" href="https://bitbucket.org/Frostsaker/">
                  <img src="img/BitBucket_Logo.png"></img>
                </a>
              </div>
              <h5 class="center">My bitbucket profile</h5>

              <p class="light">In my bitbucket profile I keep most of my 'important' or work stuff, so you might not see much here other that work group and little secret proyect I might have.</p>
              <p class="light">I'm currently working as a Junior Front-End developer at Pulse SA, where we do some cool stuff with Laravel 5.5, Vuejs, SASS and some Android things.</p>
            </div>
          </div>

          <div class="col s12 m4">
            <div class="icon-block">
              <div class="icon-holder">
                <a class="icons" href="https://www.linkedin.com/in/alecrts1996/">
                  <img src="img/LinkedIn_Logo.png"></img>
                </a>
              </div>
              <h5 class="center">My linkedin profile</h5>

              <p class="light">Okay, so if you really want to know about me go and check my in profile! I don't post alot but I post important things about my work and interests there! Be sure to connect with me!</p>
              <p class="light">Other than that you can message me or see my CV there.</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="parallax-container valign-wrapper" id="iKnow">
      <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/OOP.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>OOP</h3>
              <h5 class="light grey-text text-lighten-3">I know stuff like Java, C#, Python, C++, etc...</h5>
            </div>
          </li>
          <li>
            <img src="img/frontend.png"> <!-- random image -->
            <div class="caption left-align">
              <h3>Front-End development</h3>
              <h5 class="light grey-text text-lighten-3">I've been working as a front-end developer since the start of 2017 at various projects.</h5>
            </div>
          </li>
          <li>
            <img src="img/git.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>Version controlers</h3>
              <h5 class="light black-text text-lighten-3">I've almost master the thecniques of git.</h5>
                <h5 class="light black-text text-lighten-3"> I'm not afraid of making a commit and having to merge a branch!</h5>
            </div>
          </li>
        </ul>
      </div>
    </div>

    <div class="container" id="contact">
      <div class="section">

        <div class="row">
          <div class="col s12 center">
            <h3>Contact Me!</h3>
            <p class="left-align light">Email me at: ale.crts1996@gmail.com</p>
            <p class="left-align light">Call me at: (+502) 4028-4947</p>
            <p class="left-align light">Twitter: @Ale_Crts</p>
          </div>

        </div>

      </div>
    </div>

    <footer class="page-footer perry-tail">
      <div class="footer-copyright">
        <div class="container">
        Made by <a class="brown-text text-lighten-3" href="https://github.com/cor14095">Alejandro 'Perry' Cort&eacute;s</a>
        </div>
      </div>
    </footer>

    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
  </body>
</html>
