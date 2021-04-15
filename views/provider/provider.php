<?php 
session_start();
if (isset($_SESSION['ID'])) {
    $user_id = $_SESSION['ID'];
    $user_name = $_SESSION['USERNAME']; 
    $user_role = $_SESSION['ROLE']; 
  }else{
    header("Location: ../auth/login.php");
    die();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
      .fixed-action-btn{
        right: auto; 
        margin-left: 2%;
      }
      .session-name-padding {
          padding-left: 5px !important;
          margin-right: 10px;
      }
    </style>
    <title>IO | Provider</title>
</head>
<body>
    <!-- <ul id="slide-out" class="sidenav">
    </ul>
    <div class="fixed-action-btn">
      <a class="btn-floating btn-large sidenav-trigger black left" data-target="slide-out">
        <i class="large account material-icons">account_circle</i>
      </a>
    </div> -->
    <div class="navbar-fixed">
        <nav class="blue darken-4">
            <div class="nav-wrapper">
                <a href="#" data-target="sidenav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><i class="material-icons prefix ">person</i></li>
                    <li><span class="username session-name-padding"></span></li>
                    <li><a href="!#" class="logout"><i class="material-icons">exit_to_app</i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav blue darken-4" id="sidenav-mobile">
        <li><a href="#!" class="username white-text"><i class="material-icons prefix" style="margin: 0px 5px 0px 0px; padding: 0; color: #fff">portrait</i></a></li>
        <li><a href="#!" class="rol white-text"><i class="material-icons prefix" style="margin: 0px 5px 0px 0px; padding: 0; color: #fff">security</i></a></li>
        <li><div class="divider"></div></li>
        <li><a href="#!" class="logout white-text">Logout<i class="material-icons prefix" style="margin: 0px 5px 0px 0px; padding: 0; color: #fff">exit_to_app</i></a></li>
        <li><a class="white-text">SISTEMA DE MOVIMIENTOS</a></li>
    </ul>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      // Variables de entorno
      let user_id = <?php echo json_encode($user_id) ?>;
      let user_name = <?php echo json_encode($user_name) ?>;
      let user_role = <?php echo json_encode($user_role) ?>;
      var rol = user_role;
      // 
      // Funciones de inicio
      $(document).ready(function () {
        if (rol == '1') {
            rol = 'Administrador';
        }
        if (rol == '2') {
            rol = 'Usuario';
        }
        $('.sidenav').sidenav();
        $('.username').append(user_name);
        $('.rol').append(rol);
      });
      // 
      // Funcion logout
        $('.logout').click(function (e) { 
          e.preventDefault();
          $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/users/logout",
                data: {
                    id: user_id
                },
                dataType: "json",
                success: function (response) {
                    M.toast({html: 'Sesión terminada'});
                    window.location.href = "../auth/login.php";
                },
                error: function(){
                    M.toast({html: 'Error al terminar sesión'});
                }
            });
        });
      // 
    </script>
</body>
</html>