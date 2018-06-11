<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ProyectoTeam</title>
  <!-- CSS  -->
  <link rel="shortcut icon" href="media/images/logo_footer.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    function ConfirmDelete(){
      var x = confirm('Estas seguro?');
      //mostrar en consola //
      console.log(x);
      if(x){
        return true;
      }
      else{
        return false;
      }
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
    $("#datepicker").datepicker({
      dateFormat: 'dd/mm/yy',
    }).datepicker("setDate", new Date());
    });
  </script>
</head>
<body>
  <nav>
    <div class="nav-wrapper  teal lighten-1">
      <a href="#" class="brand-logo"><img width="64" src="media/images/logo_footer.png"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/clientes" style="font-size:16pt;">Clientes</a></li>
        <li><a href="/cajas" style="font-size:16pt;">Cajas</a></li>
        <li><a href="/plantas" style="font-size:16pt;">Plantas</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12">
          @yield("indexCajas")
        </div>
        <div class="col s12 m8 offset-m2 l5 offset-l3">
          @yield("createCajas")
        </div>
        <div class="col s12 m8 offset-m2 l5 offset-l3">
          @yield("editCajas")
        </div>
        <div class="col s12">
          @yield("indexPlanta")
        </div>
        <div class="col s12 m8 offset-m2 l5 offset-l3">
          @yield("createPlanta")
        </div>
        <div class="col s12 m8 offset-m2 l5 offset-l3">
          @yield("editPlanta")
        </div>
        <div class="col s12">
          @yield("indexClientes")
        </div>
        <div class="col s12 m8 offset-m2 l5 offset-l3">
          @yield("createClientes")
        </div>
        <div class="col s12 m8 offset-m2 l5 offset-l3">
          @yield("editClientes")
        </div>
      </div>

    </div>
  </div>

  <footer class="page-footer teal darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Hecho por: </h5>
          <p class="grey-text text-lighten-4">
            -Alexis Giovanny Roque Morales.</br>
            -Hernández Tovar Jhaysón Daniel.</br>

          </p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Materia: </h5>
          <ul>
            <li><a class="white-text" href="#!">Desarrollo de aplicaciones Web.</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Profesor:</h5>
          <ul>
            <li><a class="white-text" href="#!">MC. Luis Rodrigez</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright teal darken-4">
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
