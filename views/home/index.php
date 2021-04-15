<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        a.btn{
          width: 350px; 
          border: 1px solid #8c8b87; 
          border-radius: 10px;
        }
        a.btn:hover{
        background-color: #4f5250;
        color: #fff;
      }
    </style>
    <title>IO | Inicio</title>
</head>
<body>
  <?php include('../provider/provider.php') ?>
  <div class="container">
      <div class="hide row row-admin">
          <h1 class="col s12 m6 l6 offset-m3 offset-l3 center-align margin-col text-flow">INICIO</h1>
          <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
              <a href="#" class="btn btn-flat movements-admin">Movimientos</a>
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
              <a href="#" class="btn btn-flat lastRegister control">Panel de Control</a>
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
              <a href="#" class="btn btn-flat dashboard resumen-admin">Resumenes</a>
          </div>
      </div>
      <div class="hide row row-client">
          <div class="col s12 m12 l12 center-align" style="margin-top: 80px;">
              <a href="#" class="btn btn-flat waves-light movements-client" style="width: 350px;">Movimientos</a>
          </div>
          <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
              <a href="#" class="btn btn-flat lastRegister waves-light resumen-client" style="width: 350px;">Resumen</a>
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