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
    <link rel="stylesheet" href="../../assets/css/spacing.css">
    <style>
      .fixed-action-btn{
        right: auto; 
        margin-left: 2%;
      }
    </style>
    <title>IO | Provider</title>
</head>
<body>
    <ul id="slide-out" class="sidenav">
      <li><a href="#!" class="username"><i class="material-icons prefix" style="margin: 0px 5px 0px 0px; padding: 0;">portrait</i></a></li>
      <li><a href="#!" class="rol"><i class="material-icons prefix" style="margin: 0px 5px 0px 0px; padding: 0;">security</i></a></li>
      <li><div class="divider"></div></li>
      <li><a href="#!" class="logout">Logout<i class="material-icons prefix" style="margin: 0px 5px 0px 0px; padding: 0;">exit_to_app</i></a></li>
      <li><a class="waves-effect" href="#!">SYSTEM IO</a></li>
    </ul>
    <div class="fixed-action-btn">
      <a class="btn-floating btn-large sidenav-trigger black left" data-target="slide-out">
        <i class="large material-icons">account_circle</i>
      </a>
    </div>
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