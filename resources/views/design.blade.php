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
      <a href="#!" class="brand-logo"> <i class="material-icons right">cloud</i>MiniProject</a>
      <ul class="right hide-on-med-and-down">
        
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
     <div class="row">
        @yield('primero')
      
    </div>
    <br><br>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
        </div>   
      </div>
    </div>

    <div class="footer-copyright">
      <div class="container">   
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="{!!asset('/js/jquery-3.3.1.min.js')!!}"></script>
  <script src="{!!asset('/materialize.js')!!}"></script>
  <script src="{!!asset('/js/init.js')!!}"></script>

  </body>
</html>