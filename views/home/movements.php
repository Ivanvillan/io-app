<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IO | Movimientos</title>
</head>
<body>
    <?php include('../provider/provider.php') ?>
    <div class="container">
        <div class="row row-movements">
            <a href="#" class="back-home col s1 m1 l1" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <h4 class="col s12 m11 l11">MOVIMIENTOS</h4>
            <div class="row" style="padding: 0 !important; margin: 0 !important;">
                <div class="col s6 m5 l5 input-field">
                    <input type="text" id="searchMovement">
                    <label for="searchMovement">Buscar...</label>
                </div>
                <div class="col s6 m7 l7">
                    <a href="#!" id="newMovement" class="btn right grey lighten-5 tooltipped" data-position="left" data-tooltip="Nuevo Movimiento"><i class="material-icons" style="color: #000 !important;">add</i></a>
                </div>
            </div>
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
                <div class="col s12 m12 l12">
                    <a href="#!" id="cleanFilter" class="btn right grey lighten-5 tooltipped" data-position="left" data-tooltip="Limpiar Filtros"><span style="color: #000;">Limpiar</span></a>
                </div>
            </div>
            <div class="col s12 m12 l12">
                <table class="responsive-table highlight movements-table">
                    <thead>
                        <tr>
                            <th>CATEGORIA</th>
                            <th>MÉTODO DE PAGO</th>
                            <th>RAZÓN</th>
                            <th>DETALLE</th>
                            <th>MONTO</th>
                            <th>TIPO</th>
                            <th>FECHA</th>
                            <th>ESTADO</th>
                            <th>ANULAR</th>
                        </tr>
                    </thead>
                    <tbody>
    
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Nuevo movimiento -->
        <div class="hide row row-newMovement">
            <a href="#" class="back-movements col s6 m6 l6" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <div id="new-movement" class="col s12 m8 l8 offset-m2 offset-l2 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">REGISTRO DE MOVIMIENTO</span>
                        <div class="divider"></div>
                        <form action="" id="form-newMovement">
                            <div class="input-field col s12 m12 l12">
                                <div class="input-field">
                                    <select name="" id="type-movement">
                                        <option value="" disabled selected>Tipo</option>
                                        <option value="input">ENTRADA</option>
                                        <option value="output">SALIDA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <select name="" id="type-cat">
                                    <option value="0" disabled selected>Tipo de categoria</option>
                                </select>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <select name="" id="type-method">
                                    <option value="0" disabled selected>Tipo de metodo</option>
                                </select>
                            </div>
                            <div class="input-field col s6 m6 l6 mt">
                                <input type="text" id="date" class="datepicker" name="date">
                                <label for="date">Fecha</label>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <input type="number" id="amount" class="activate" name="amount">
                                <label for="amount">Monto</label>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <input type="text" id="reason" class="activate" name="reason">
                                <label for="reason">Razón</label>
                            </div>
                            <div class="input-field col s6 m6 l6 left">
                                <input type="text" id="detail" class="activate" name="detail">
                                <label for="detail">Detalle</label>
                            </div>
                        </form>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-movement">Aceptar</button>
                        <div class="preloader-wrapper movement-wrapper hide small right active">
                            <div class="spinner-layer spinner-red-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div><div class="gap-patch">
                                <div class="circle"></div>
                            </div><div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
    <script>
        // Variables de entorno
        var selectedTypeCat;
        var selectedTypeMethod;
        var selectedTypeMov;
        var selectedCat = '/all';
        var selectedMet = '/all';
        var selectedMov = 'all';
        var selectedUser = '/all';
        var dateInit = '';
        var dateFinish = '';
        var paramMovement;
        // 
        // Funciones iniciales
        $(document).ready(function () {
            getMovements('', '');
            searchMovement();
            getUsers();
            getMethods('#select-met');
            $('.tooltipped').tooltip();
            $("#type-movement").change(function(){
                selectedTypeMov = $(this).children("option:selected").val();
                console.log(selectedTypeMov);
                // Elimina todas las categorias y agrega una genérica. Esto para poder hacer un append de las cat de E o S
                $('#type-cat').find('option').remove().end().append('<option value="0" selected>Tipo de categoria</option>').val('whatever');
                getCategories(selectedTypeMov, '#type-cat');
            });
            $("#type-cat").change(function(){
                selectedTypeCat = $(this).children("option:selected").val();
                console.log(selectedTypeCat);
            });
            $("#type-method").change(function(){
                selectedTypeMethod = $(this).children("option:selected").val();
                console.log(selectedTypeMethod);
            });
            $("#select-type").change(function(){
                selectedMov = $(this).children("option:selected").val();
                console.log(selectedMov);
                // Elimina todas las categorias y agrega una genérica. Esto para poder hacer un append de las cat de E o S
                $('#select-cat').find('option').remove().end().append('<option value="0" selected>Tipo de categoria</option>').val('whatever');
                getCategories(selectedMov,'#select-cat');
                getMovements('', '');
            });
            $("#select-cat").change(function(){
                selectedCat = '/' + $(this).children("option:selected").val();
                console.log(selectedCat);
                getMovements('', '');
            });
            $("#select-met").change(function(){
                selectedMet = '/' + $(this).children("option:selected").val();
                console.log(selectedMet);
                getMovements('', '');
            });
            $("#select-user").change(function(){
                selectedUser = '/' + $(this).children("option:selected").val();
                console.log(selectedUser);
                getMovements('', '');
            });
            $('#dateF').change(function (e) { 
                e.preventDefault();
                var dateI = $('input[name=dateI]').val();
                var dateF = $(this).val();
                getMovements(dateI, dateF);
            });
        });
        // 
        // Manejo de vistas
        $('.back-home').click(function (e) { 
            e.preventDefault();
            window.location = '../home/index.php'
        });
        $('.back-movements').click(function (e) { 
            e.preventDefault();
            window.location = '../home/movements.php'
        });
        $('#newMovement').click(function (e) { 
            e.preventDefault();
            $('.row-movements').addClass('hide');
            $('.row-newMovement').removeClass('hide');
            getMethods('#type-method');
        });
        // 
        // Funcion estadística (data1 = fecha inicio data2 = fecha fin)
        function getMovements(date1, date2){
            // Comparación si es usuario administrador o cliente
            if (user_role == '1') {
                // habilitar el filtro por usuario
                $('.select-enabled').removeClass('hide');
                // Filtrar si no es por fecha
                if (date2 == '') {
                    $.ajax({
                        type: "GET",
                        url: "http://localhost/io-api/public/movements/get/" + selectedMov + selectedCat + selectedMet + selectedUser,
                        dataType: "json",
                        success: function (response) {
                        console.log(response);
                        let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        var state = row[i].enabled;
                        if (state == '1') {
                            state = 'Activo';
                        }else{
                            state = 'Inactivo';
                        }
                        var rol = row[i].role;
                        if (rol == '1') {
                            rol = 'Administrador';
                        }
                        if (rol == '2') {
                            rol = 'Usuario';
                        }
                        var cancel = row[i].canceled;
                        if (cancel == null) {
                            cancel = 'Activo';
                        }else{
                            cancel = 'Cancelado'
                        }
                        html.push(
                        `<tr movementID="${row[i].idmovement}" class="content">
                            <td>${row[i].description}</td>  
                            <td>${row[i].denomination}</td>  
                            <td>${row[i].reason}</td>  
                            <td>${row[i].detail}</td>  
                            <td>${row[i].amount}</td>  
                            <td>${row[i].direction}</td>  
                            <td>${row[i].date.split(' ')[0]}</td>  
                            <td>${cancel}</td>  
                            <td><a href="#" class="btn drop-movement red"><i class="material-icons">delete</i></a></td> 
                            <td></td> 
                        </tr>`
                        );
                    }  
                    $('.movements-table>tbody').html(html.join(''));
                    $('select').formSelect();
                    $('.datepicker').datepicker({
                        format: "yyyy-mm-dd"
                    });
                    $('.drop-movement').click(function (e) { 
                        e.preventDefault();
                        var element = $(this)[0].parentElement.parentElement;
                        paramMovement = $(element).attr('movementID');
                        dropMovement();
                    });
                    }
                });
                }else{
                    $.ajax({
                    type: "GET",
                    url: "http://localhost/io-api/public/movements/get/" + selectedMov + selectedCat + selectedMet + selectedUser + '/' + date1 + '/' + date2,
                    dataType: "json",
                    success: function (response) {
                        let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        var state = row[i].enabled;
                        if (state == '1') {
                            state = 'Activo';
                        }else{
                            state = 'Inactivo';
                        }
                        var rol = row[i].role;
                        if (rol == '1') {
                            rol = 'Administrador';
                        }
                        if (rol == '2') {
                            rol = 'Usuario';
                        }
                        var cancel = row[i].canceled;
                        if (cancel == null) {
                            cancel = 'Activo';
                        }else{
                            cancel = 'Cancelado'
                        }
                        html.push(
                        `<tr movementID="${row[i].idmovement}" class="content">
                            <td>${row[i].description}</td>  
                            <td>${row[i].denomination}</td>  
                            <td>${row[i].reason}</td>  
                            <td>${row[i].detail}</td>  
                            <td>${row[i].amount}</td>  
                            <td>${row[i].direction}</td>  
                            <td>${row[i].date.split(' ')[0]}</td>  
                            <td>${cancel}</td>  
                            <td><a href="#" class="btn drop-movement"><i class="material-icons">delete</i></a></td> 
                            <td></td> 
                        </tr>`
                        );
                    }  
                    $('.movements-table>tbody').html(html.join(''));
                    $('select').formSelect();
                    $('.datepicker').datepicker({
                        format: "yyyy-mm-dd"
                    });
                    $('.drop-movement').click(function (e) { 
                        e.preventDefault();
                        var element = $(this)[0].parentElement.parentElement;
                        paramMovement = $(element).attr('movementID');
                        dropMovement();
                    });
                    }
                });
                }
            }else{
                if (date2 == '') {
                    var user;
                    if (selectedMov == 'input') {
                        user = 'all'
                    }else{
                        user = user_id;
                    }
                    var url = "http://localhost/io-api/public/movements/get/" + selectedMov + selectedCat + selectedMet + '/' + user;
                    console.log(url);
                    $.ajax({
                        type: "GET",
                        url: url,
                        dataType: "json",
                        success: function (response) {
                        console.log(response);
                        let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        var state = row[i].enabled;
                        if (state == '1') {
                            state = 'Activo';
                        }else{
                            state = 'Inactivo';
                        }
                        var rol = row[i].role;
                        if (rol == '1') {
                            rol = 'Administrador';
                        }
                        if (rol == '2') {
                            rol = 'Usuario';
                        }
                        var cancel = row[i].canceled;
                        if (cancel == null) {
                            cancel = 'Activo';
                        }else{
                            cancel = 'Cancelado'
                        }
                        html.push(
                        `<tr movementID="${row[i].idmovement}" class="content">
                            <td>${row[i].description}</td>  
                            <td>${row[i].denomination}</td>  
                            <td>${row[i].reason}</td>  
                            <td>${row[i].detail}</td>  
                            <td>${row[i].amount}</td>  
                            <td>${row[i].direction}</td>  
                            <td>${row[i].date.split(' ')[0]}</td>  
                            <td>${cancel}</td>  
                            <td><a href="#" class="btn drop-movement red"><i class="material-icons">delete</i></a></td> 
                            <td></td> 
                        </tr>`
                        );
                    }  
                    $('.movements-table>tbody').html(html.join(''));
                    $('select').formSelect();
                    $('.datepicker').datepicker({
                        format: "yyyy-mm-dd"
                    });
                    $('.drop-movement').click(function (e) { 
                        e.preventDefault();
                        var element = $(this)[0].parentElement.parentElement;
                        paramMovement = $(element).attr('movementID');
                        dropMovement();
                    });
                    }
                });
                }else{
                    var user;
                    if (selectedMov == 'input') {
                        user = 'all'
                    }else{
                        user = user_id;
                    }
                    var url = "http://localhost/io-api/public/movements/get/" + selectedMov + selectedCat + selectedMet + '' + user + '/' + date1 + '/' + date2;
                    console.log(url);
                    $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        let row = response.result;
                        let html = [];
                        for (let i=0; i < row.length; i++){
                        var state = row[i].enabled;
                        if (state == '1') {
                            state = 'Activo';
                        }else{
                            state = 'Inactivo';
                        }
                        var rol = row[i].role;
                        if (rol == '1') {
                            rol = 'Administrador';
                        }
                        if (rol == '2') {
                            rol = 'Usuario';
                        }
                        var cancel = row[i].canceled;
                        if (cancel == null) {
                            cancel = 'Activo';
                        }else{
                            cancel = 'Anulado'
                        }
                        html.push(
                        `<tr movementID="${row[i].idmovement}" class="content">
                            <td>${row[i].description}</td>  
                            <td>${row[i].denomination}</td>  
                            <td>${row[i].reason}</td>  
                            <td>${row[i].detail}</td>  
                            <td>${row[i].amount}</td>  
                            <td>${row[i].direction}</td>  
                            <td>${row[i].date.split(' ')[0]}</td>  
                            <td>${cancel}</td>  
                            <td><a href="#" class="btn drop-movement"><i class="material-icons">delete</i></a></td> 
                            <td></td> 
                        </tr>`
                        );
                    }  
                    $('.movements-table>tbody').html(html.join(''));
                    $('select').formSelect();
                    $('.datepicker').datepicker({
                        format: "yyyy-mm-dd"
                    });
                    $('.drop-movement').click(function (e) { 
                        e.preventDefault();
                        var element = $(this)[0].parentElement.parentElement;
                        paramMovement = $(element).attr('movementID');
                        dropMovement();
                    });
                    }
                });
                }
            }
            // fin comparación
        }
        function getCategories(type, id){
            $.ajax({
                type: "GET",
                url: "http://localhost/io-api/public/settings/get/" + type + '/' + '1',
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
                    $(id).append(html.join(''));
                    $('select').formSelect();
                }
            });
        }
        function getMethods(id){
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
                    $(id).append(html.join(''));
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
        $('.send-movement').click(function (e) { 
            e.preventDefault();
            $('.send-movement').addClass('hide');
            $('.movement-wrapper').removeClass('hide');
            var idcategorie = selectedTypeCat;
            var idpaymentmethod = selectedTypeMethod;
            var date = $('input[name=date]').val();
            var amount = $('input[name=amount]').val();
            var direction = selectedTypeMov;
            var reason = $('input[name=reason]').val();
            var detail = $('input[name=detail]').val();
            var data;
            if (selectedTypeMov == 'input') {
                data = {
                    "idcategorie": idcategorie,
                    "idpaymentmethod": idpaymentmethod,
                    "date": date,
                    "amount": amount,
                    "direction": direction,
                    "reason": reason,
                    "detail": detail
                }
            }else{
                data = {
                    "idcategorie": idcategorie,
                    "idpaymentmethod": idpaymentmethod,
                    "date": date,
                    "amount": amount,
                    "direction": direction,
                    "reason": reason,
                    "detail": detail,
                    "iduser": user_id
                }
            }
            $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/movements/register",
                data: data,
                dataType: "json",
                success: function (response) {
                    M.toast({html: '¡Movimiento creado correctamente!'});
                    $('.send-movement').removeClass('hide');
                    $('.movement-wrapper').addClass('hide');
                    $('#form-newMovement').trigger('reset');
                    getMovements('', '');
                },
                error: function(){
                    M.toast({html: 'Error al crear movimiento, compruebe los datos'});
                    $('.send-movement').removeClass('hide');
                    $('.movement-wrapper').addClass('hide');
                }
            });
        });
        function dropMovement(){
            $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/movements/drop",
                data: {
                    "id": paramMovement    
                },
                dataType: "json",
                success: function (response) {
                    M.toast({html: 'Movimiento anulado correctamente'});
                    getMovements('', '');
                },
                error: function(){
                    M.toast({html: 'Error al anulado movimiento'});
                }
            });
        }
        //
        // Buscador
        function searchMovement(){
            $("#searchMovement").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".content").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        }
        // 
        // Limpiar filtro
        $('#cleanFilter').click(function (e) { 
            e.preventDefault();
            window.location = '../home/movements.php';
        });
        //  
    </script>
</body>
</html>