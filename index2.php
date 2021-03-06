<!DOCTYPE HTML>
<html lang="es">
  <head>
      <meta charset="utf-8">
      <title>Practica 3 DIU</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="http://cdn.kendostatic.com/2015.1.429/styles/kendo.common-material.min.css" />
      <link rel="stylesheet" href="http://cdn.kendostatic.com/2015.1.429/styles/kendo.material.min.css" />
      <link rel="stylesheet" href="http://cdn.kendostatic.com/2015.1.429/styles/kendo.dataviz.min.css" />
      <link rel="stylesheet" href="http://cdn.kendostatic.com/2015.1.429/styles/kendo.dataviz.material.min.css" />

      <script src="http://cdn.kendostatic.com/2015.1.429/js/jquery.min.js"></script>
      <script src="http://cdn.kendostatic.com/2015.1.429/js/kendo.all.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
  <body>
    <script>
        $(document).ready(function() {
            // create Calendar from div HTML element
            $("#calendar").kendoCalendar();
        });
    </script>
    <header>
      <section class="row">
        <section class="col-xs-3 col-md-1">
          <img id="logo" src="imagenes/logo.png" >
        </section>
        <section class="col-xs-9 col-md-8">
          <section id="tit">
           <h1>AGENDA UGR</h1>
          </section>
        </section>
        <section class="col-xs-12 col-md-3">
          <section class="col-xs-12 col-md-3">
            <h3>Bienvenido <label><?php echo $_GET['usuario']; ?></label></h3>
          </section>
        </section>
      </section>
    </header>
    <section class="row">
      <section class="col-xs-12 col-md-12">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="index2.php">AGENDA UGR</a>
            </div>
            <ul class="nav navbar-nav">
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Actividades <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="actividades.html">General</a></li>
                  <li><a href="recomentadas.html">Recomendadas</a></li>
                  <li><a href="campus.html">Campus</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Social <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="perfil.html">Perfil</a></li>
                  <li><a href="mensajes.html">Mensajes</a></li>
                </ul>
              </li>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Mi espacio <span class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="agenda.html">Mi Agenda</a></li>
                  <li><a href="concursos.html">Mis Concursos</a></li>
                  <li><a href="reservas.html">Mis Reservas</a></li>
                </ul>
              </li>
              <li><a href="foro.html">Foro</a></li>
              <li><a href="contacto.html">Contacto</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="registro.html"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
              <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Desconectar</a></li>
            </ul>
          </div>
        </nav>
      </section>
    </section>
    <section class="row">
      <section class="col-xs-12 col-md-12">
        <label id="Barra"> Inicio</label>
      </section>
    </section>
    <section class="row">
      <section class="col-xs-12 col-md-8">
        <table class="table table-hover table-condensed">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Descripción</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Excursión a la Alhambra</td>
              <td>Descripción de la excursión</td>
              <td><img id="logo" src="imagenes/logo.png" ></td>
            </tr>
            <tr>
              <td>Cine de verano</td>
              <td>Descripción sobre las películas</td>
              <td><img id="logo" src="imagenes/logo.png" ></td>
            </tr>
            <tr>
              <td>Cine de verano</td>
              <td>Descripción sobre las películas</td>
              <td><img id="logo" src="imagenes/logo.png" ></td>
            </tr>
          </tbody>
        </table>

      </section>
      <section class="col-xs-12 col-md-4">
        <table class="table table">
          <tbody>
            <tr>
              <div id="calendar"> </div>
            </tr>
            <tr>
              <td>
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google"></a>
              </td>
            </tr>
          </tbody>
        </table>
      </section>
    </section>
    <footer>
      <a href="index.html">Español</a> - <a href="indexE.html">English</a><br>
        Informacion de contacto: <a href="mailto:agendaugr@ugr.es">agendaugr@ugr.es</a></p>
    </footer>
  </body>
</html>
