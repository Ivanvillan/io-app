<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IO | Resumen</title>
</head>
<body>
    <?php include('../provider/provider.php') ?>
    <div class="container">
        <div class="row row-resumen">
            <a href="#" class="back-home col s1 m1 l1" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <div class="col s12 m6 l6 offset-m2 offset-l2">
                <div class="input-field">
                    <select name="" id="type">
                        <option value="" disabled selected>Filtro</option>
                        <option value="1">Cantidad</option>
                        <option value="2">Importe</option>
                        <option value="3">Cobrado</option>
                    </select>
                </div>
            </div>
            <div class="col s12 m12 l12">
                <canvas  width="600" height="140"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        // Variables de entorno
        // 
        // Funciones iniciales
        $(document).ready(function () {
            $('select').formSelect();
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