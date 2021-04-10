<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IO | Registro</title>
</head>
<body>
    <?php include('../provider/provider.php') ?>
    <div class="container">
        <div class="row row-register">
            <a href="#" class="back-home col s1 m1 l1" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
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