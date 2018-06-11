<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Jhayson Daniel</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <nav>
   <div class="nav-wrapper green darken-1">
     <a href="#!" class="brand-logo"></a>
     <ul class="right hide-on-med-and-down">
       <li><a href="sass.html"><i class="material-icons">search</i></a></li>
       <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
       <li><a href="/products/index"><i class="material-icons">refresh</i></a></li>
       <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
     </ul>
   </div>
 </nav>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          @yield("indexCategory")
        </div>
        <div class="col s4">
          @yield("createCategory")
        </div>
        <div class="col s4">
          @yield("editCategory")
        </div>
        <div class="col s12">
          @yield("indexProduc")
        </div>
        <div class="col s4">
          @yield("createProduct")
        </div>
        <div class="col s4">
          @yield("editProduct")
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are .</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
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
  <script src="{!! asset('js/jquery-3.3.1.min.js') !!}"></script>
  <script src="{!! asset('js/materialize.js') !!}"></script>

  <script type="text/javascript">
  $(document).ready(function(){
      $('select').formSelect();
    });
  </script>
  </body>
</html>
