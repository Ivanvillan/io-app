<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    </style>
    <title>IO | Inicio</title>
</head>
<body>
  <?php include('../provider/provider.php') ?>
  <div class="container">
      <div class="hide row row-admin">
          <div class="col s12 m12 l12 center-align" style="margin-top: 100px;">
              <img class="responsive-img" width="400" height="250" src=""> 
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 80px;">
              <a href="#" class="btn waves-effect waves-light black movements-admin" style="width: 350px;">Movimientos</a>
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
              <a href="#" class="btn waves-effect lastRegister waves-light black control" style="width: 350px;">Panel de Control</a>
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
              <a href="#" class="btn waves-effect dashboard waves-light black resumen-admin" style="width: 350px;">Resumenes</a>
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 140px;">
              <img class="responsive-img" width="150" height="120" src="">
          </div>
      </div>
      <div class="hide row row-client">
          <div class="col s12 m12 l12 center-align" style="margin-top: 100px;">
              <img class="responsive-img" width="400" height="250" src=""> 
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 80px;">
              <a href="#" class="btn waves-effect waves-light black movements-client" style="width: 350px;">Movimientos</a>
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
              <a href="#" class="btn waves-effect lastRegister waves-light black resumen-client" style="width: 350px;">Resumen</a>
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 140px;">
              <img class="responsive-img" width="150" height="120" src="">
          </div>
      </div>
  </div>
  <script>
    // Variables
    $(document).ready(function () {
      homeUser();
    });
    // MANEJO DE VISTAS
    $('.movements-admin').click(function (e) { 
      e.preventDefault();
      window.location = '../home/movements.php';
    });
    $('.control').click(function (e) { 
      e.preventDefault();
      window.location = '../home/settings.php';
    });
    $('.users').click(function (e) { 
      e.preventDefault();
      window.location = '../auth/users.php';
    });
    $('.resumen-admin').click(function (e) { 
      e.preventDefault();
      window.location = '../home/resumen.php';
    });
    $('.movements-clien').click(function (e) { 
      e.preventDefault();
      window.location = '../home/movements.php';
    });
    $('.resumen-client').click(function (e) { 
      e.preventDefault();
      window.location = '../home/resumen.php';
    });
    // 
    function homeUser(){
      if (user_role == '1') {
        $('.row-admin').removeClass('hide');
      }
      if (user_role == '2') {
        $('.row-client').removeClass('hide');
      }
    }
  </script>
</body>
</html>