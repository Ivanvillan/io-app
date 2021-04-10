<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IO | Usuarios</title>
</head>
<body>
    <?php include('../provider/provider.php') ?>
    <div class="container">
        <div class="row row-users">
            <a href="#" class="back-home col s1 m1 l1" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <h4 class="col s12 m11 l11">USUARIOS</h4>
            <div class="col s12 m5 l5 input-field">
                <input type="text" id="searchUsers">
                <label for="searchUsers">Buscar...</label>
            </div>
            <div class="col s12 m7 l7">
                <a href="#newUser" class="btn right grey lighten-5 modal-trigger"><i class="material-icons" style="color: #000 !important;">add</i></a>
            </div>
            <div class="col s12 m12 l12">
                <table class="responsive-table highlight users-table">
                    <thead>
                        <tr>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>EMAIL</th>
                            <th>PRIVILEGIO</th>
                            <th>ESTADO</th>
                            <th>FECHA</th>
                            <th>EDITAR</th>
                        </tr>
                    </thead>
                    <tbody>
    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        // Variables de entorno
        // 
        // Funciones iniciales
        $(document).ready(function () {
            
        });
        // 
        // Manejo de vistas
        $('.back-home').click(function (e) { 
            e.preventDefault();
            window.location = '../home/index.php'
        });
        // 
    </script>
</body>
</html>