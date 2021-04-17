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
            <a href="#" class="back-home col s12 m12 l12" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
                <div class="row">
                    <div class="col s6 m2 l2">
                        <div class="input-field">
                            <select name="" id="select-type">
                                <option value="" disabled selected>Tipo</option>
                                <option value="input">ENTRADA</option>
                                <option value="output">SALIDA</option>
                            </select>
                        </div>
                    </div>
                    <div class="col s6 m2 l2">
                        <div class="input-field">
                            <select name="" id="select-cat">
                                <option value="" disabled selected>Categoria</option>
                            </select>
                        </div>
                    </div>
                    <div class="col s6 m2 l2">
                        <div class="input-field">
                            <select name="" id="select-met">
                                <option value="" disabled selected>Método de pago</option>
                            </select>
                        </div>
                    </div>
                    <div class="col s6 m2 l2">
                        <div class="input-field">
                            <select name="" id="select-user">
                                <option value="" disabled selected>Usuario</option>
                            </select>
                        </div>
                    </div>
                    <div class="col s6 m2 l2">
                        <div class="input-field">
                            <input type="text" id="dateI" class="datepicker" name="dateI">
                            <label for="dateI">Fecha Inicio</label>
                        </div>
                    </div>
                    <div class="col s6 m2 l2">
                        <div class="input-field">
                            <input type="text" id="dateF" class="datepicker" name="dateF">
                            <label for="dateF">Fecha Fin</label>
                        </div>
                    </div>
                    <div class="col s12 m12 l12">
                        <a href="#!" id="cleanFilter" class="btn right grey lighten-5"><span style="color: #000;">Limpiar</span></a>
                    </div>
                </div>
            <div class="col s12 m12 l12">
                <canvas id="myChart" width="400" height="400"></canvas>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script>
        // Variables de entorno
        var selectedMov = 'input';
        var selectedCat = '/all';
        var selectedMet = '/all';
        var selectedUser = '/all';
        var dateInit = '';
        var dateFinish = '';
        // 
        // Funciones iniciales
        $(document).ready(function () {
            $('select').formSelect();
            $('.datepicker').datepicker({
                format: "yyyy-mm-dd"
            });
            getMethods();
            getUsers();
            getData('', '');
            $("#select-type").change(function(){
                selectedMov = $(this).children("option:selected").val();
                console.log(selectedMov);
                // Elimina todas las categorias y agrega una genérica. Esto para poder hacer un append de las cat de E o S
                $('#select-cat').find('option').remove().end().append('<option value="" selected>Tipo de categoria</option>').val('whatever');
                getCategories();
                getData('', '');
            });
            $("#select-cat").change(function(){
                selectedCat = '/' + $(this).children("option:selected").val();
                console.log(selectedCat);
                getData('', '');
            });
            $("#select-met").change(function(){
                selectedMet = '/' + $(this).children("option:selected").val();
                console.log(selectedMet);
                getData('', '');
            });
            $("#select-user").change(function(){
                selectedUser = '/' + $(this).children("option:selected").val();
                console.log(selectedUser);
                getData('', '');
            });
            $('#dateF').change(function (e) { 
                e.preventDefault();
                var dateI = $('input[name=dateI]').val();
                var dateF = $(this).val();
                getData(dateI, dateF);
            });
        });
        // 
        // Funciones
        function getData(data1, data2){
            if (data2 == '') {
                $.ajax({
                    type: "GET",
                    url: "http://localhost/io-api/public/movements/resume/" + selectedMov + selectedCat + selectedMet + selectedUser,
                    dataType: "json",
                    success: function (response) {
                        console.log(response.result);
                    }
                });
            }else
                $.ajax({
                    type: "GET",
                    url: "http://localhost/io-api/public/movements/resume/" + selectedMov + selectedCat + selectedMet + selectedUser + '/' + date1 + '/' + date2,
                    dataType: "json",
                    success: function (response) {
                        console.log(response.result);
                    }
                });
        }
        function getCategories(){
            $.ajax({
                type: "GET",
                url: "http://localhost/io-api/public/settings/get/" + selectedMov + '/' + '1',
                dataType: "json",
                success: function (response) {
                    let rows = response.result;
                    let html = [];
                    for (let i=0; i < rows.length; i++){
                        html.push(
                            `
                            <option value="${rows[i].idcategorie}">${rows[i].description}</option>
                            `
                        );
                    }    
                    $('#select-cat').append(html.join(''));
                    $('select').formSelect();
                }
            });
        }
        function getMethods(){
            $.ajax({
                type: "GET",
                url: "http://localhost/io-api/public/settings/get/paymentmethods/1",
                dataType: "json",
                success: function (response) {
                    let rows = response.result;
                    let html = [];
                    for (let i=0; i < rows.length; i++){
                        html.push(
                            `
                            <option value="${rows[i].idpaymentmethod}">${rows[i].denomination}</option>
                            `
                        );
                    }    
                    $('#select-met').append(html.join(''));
                    $('select').formSelect();
                }
            });
        }
        function getUsers(){
            $.ajax({
                type: "GET",
                url: "http://localhost/io-api/public/users/get",
                dataType: "json",
                success: function (response) {
                    let rows = response.result;
                    let html = [];
                    for (let i=0; i < rows.length; i++){
                        html.push(
                            `
                            <option value="${rows[i].iduser}">${rows[i].name} ${rows[i].surname}</option>
                            `
                        );
                    }    
                    $('#select-user').append(html.join(''));
                    $('select').formSelect();
                }
            });
        }
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