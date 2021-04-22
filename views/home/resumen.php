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
                    <div class="col s6 m2 l2 hide select-enabled">
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
                </div>
                <div class="row">
                    <div class="col s6 m6 l6">
                        <a href="#!" id="" class="btn teal darken-3 toExcel"><span>EXCEL</span></a>
                        <a href="#!" id="" class="btn red darken-4 toPDF"><span>PDF</span></a>
                    </div>
                    <div class="col s6 m6 l6">
                        <a href="#!" id="cleanFilter" class="btn grey right lighten-5 tooltipped" data-position="right" data-tooltip="Limpiar Filtro"><span style="color: #000;">Limpiar</span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12 hide col-draw" id="draw">
                        <canvas id="myChart"></canvas>
                    </div>
                    <div class="col s12 m12 l12 col-table">
                        <table class="responsive-table highlight resume-table">
                            <thead>
                                <tr>
                                    <th>CATEGORIA</th>
                                    <th>MÉTODO DE PAGO</th>
                                    <th>TIPO</th>
                                    <th>MONTO</th>
                                    <th>USUARIO</th>
                                </tr>
                            </thead>
                            <tbody>
            
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script src="https://unpkg.com/jspdf@1.5.3/dist/jspdf.min.js"></script>
    <script src="https://unpkg.com/jspdf-autotable@3.5.3/dist/jspdf.plugin.autotable.js"></script>
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
            $('.datepicker').datepicker({
                format: "yyyy-mm-dd"
            });
            $('.tooltipped').tooltip();
            $('select').formSelect();
            getMethods();
            getData('', '');
            getUsers();
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
        // Funcion estadística (data1 = fecha inicio data2 = fecha fin)
        function getData(data1, data2){
            // Comparación si es usuario administrador o cliente
            if (user_role == '1') {
                // Habilitar el filtro por usuario
                $('.select-enabled').removeClass('hide');
                // Filtrar si no es por fecha
                if (data2 == '') {
                    var url = "http://localhost/io-api/public/movements/resume/" + selectedMov + selectedCat + selectedMet + selectedUser;
                    console.log(url);
                    $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        html.push(
                            `<tr class="content">
                                <td>${row[i].description}</td>  
                                <td>${row[i].denomination}</td>  
                                <td>${row[i].direction}</td>  
                                <td>${row[i].amount}</td>  
                                <td>${row[i].user}</td> 
                            </tr>`
                            );
                        }  
                    $('.resume-table>tbody').html(html.join(''));
                    }
                });
                }else{
                    var url = "http://localhost/io-api/public/movements/resume/" + selectedMov + selectedCat + selectedMet + selectedUser + '/' + data1 + '/' + data2;
                    $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        // TABLA
                        let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        html.push(
                            `<tr class="content">
                                <td>${row[i].description}</td>  
                                <td>${row[i].denomination}</td>  
                                <td>${row[i].direction}</td>  
                                <td>${row[i].amount}</td>  
                                <td>${row[i].user}</td> 
                            </tr>`
                            );
                        }  
                    $('.resume-table>tbody').html(html.join(''));
                    }
                });
            }   
            }else{
                if (data2 == '') {
                    var user;
                    if (selectedMov == 'input') {
                        user = 'all'
                    }else{
                        user = user_id;
                    }
                    var url = "http://localhost/io-api/public/movements/resume/" + selectedMov + selectedCat + selectedMet + '/' + user;
                    console.log(url);
                    $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        // TABLA
                        let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        html.push(
                            `<tr class="content">
                                <td>${row[i].description}</td>  
                                <td>${row[i].denomination}</td>  
                                <td>${row[i].direction}</td>  
                                <td>${row[i].amount}</td>  
                                <td>${row[i].user}</td>  
                            </tr>`
                        );
                    }  
                    $('.resume-table>tbody').html(html.join(''));
                    }
                });
                }else{
                    var user;
                    if (selectedMov == 'input') {
                        user = 'all'
                    }else{
                        user = user_id;
                    }
                    var url = "http://localhost/io-api/public/movements/resume/" + selectedMov + selectedCat + selectedMet + '/' + user + '/' + data1 + '/' + data2;
                    $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        // TABLA
                        let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        html.push(
                            `<tr class="content">
                            <td>${row[i].description}</td>  
                                <td>${row[i].denomination}</td>  
                                <td>${row[i].direction}</td>  
                                <td>${row[i].amount}</td>  
                                <td>${row[i].user}</td> 
                            </tr>`
                        );
                    }  
                    $('.resume-table>tbody').html(html.join(''));
                    }
                });
            }   

        }
        // Fin de la comparación
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
        // Exportar datos
        $('.toExcel').click(function (e) { 
            e.preventDefault();
            $('.resume-table').table2excel({
                // exclude:
                name: "Reporte",
                filename: "Reporte" + new Date().toISOString().replace(/[\-\:\.]/g, ""),
                fileext: ".xls"
            });
        });
        $('.toPDF').click(function(event) {
          var pdfsize = 'a3';
          var doc = new jsPDF('l', 'pt', pdfsize)
          doc.autoTable({ 
                html: '.resume-table',  
                startY: 60,
                styles: {
                fontSize: 9.5,
                cellWidth: 'wrap'
                },
                columnStyles: {
                1: {columnWidth: 'auto'}
                }
            })
          doc.save("Reporte" + new Date().toISOString().replace(/[\-\:\.]/g, ""))
        });
        // Manejo de vistas
        $('.back-home').click(function (e) { 
            e.preventDefault();
            window.location = '../home/index.php'
        });
        $('#cleanFilter').click(function (e) { 
            e.preventDefault();
            window.location = '../home/resumen.php'
        });
        // 
    </script>
</body>
</html>