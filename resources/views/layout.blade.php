<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>


  <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"> <i class="material-icons right">cloud</i>Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn">Button</a></li>
        <li><a class="waves-effect waves-light btn">Button <i class="material-icons right">cloud</i></a></li>
        <li><a class="waves-effect waves-light btn-large">Large Button</a></li>
      </ul>
    </div>
  </nav>


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center orange-text">Starter Template</h1>
      <div class="row center">
        <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
      </div>
      <div class="row center">
        <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light orange">Get Started</a>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
        
          @yield('primero')
    

    
  </div>
</div>



  <div class="container">
        <!-- Page Content goes here -->
      <div class="row">
      <div class="col s4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque eaque architecto repellendus molestiae, impedit odit qui ut sunt, voluptatibus pariatur in cupiditate, hic. Voluptatem earum quisquam dignissimos nam, perferendis at.</div>

      <a class="waves-effect waves-light btn-small">button</a>
      <a class="waves-effect waves-light btn"><i class="material-icons left">android</i>button</a>
      <a class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>button</a>
        
      <div class="col s8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique quasi, earum debitis neque corrupti suscipit nostrum quidem impedit aliquid, laboriosam, odit? Adipisci, unde quo assumenda maxime ullam est tempora repellendus.</div>
      
      <div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="media/images/icono.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="http://www.facebook.com" target="_blank">This is a link</a>
        </div>
      </div>
    </div>
  </div>
    </div>
  </div>


  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{!!asset('js/jquery-3.3.1.min.js')!!}"></script>
  <script src="{!!asset('materialize.js')!!}"></script>
  <script src="{!!asset('js/init.js')!!}"></script>
  

  </body>
</html>