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
                    <a href="#newCategory" class="btn right grey lighten-5 modal-trigger"><i class="material-icons" style="color: #000 !important;">add</i></a>
                </div>
            </div>
            <div class="row">
                <div class="col s6 m2 l2">
                    <div class="input-field">
                        <select name="" id="state-met">
                            <option value="" disabled selected>Tipo</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col s6 m2 l2">
                    <div class="input-field">
                        <select name="" id="state-met">
                            <option value="" disabled selected>Categoria</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col s6 m2 l2">
                    <div class="input-field">
                        <select name="" id="state-met">
                            <option value="" disabled selected>Método de pago</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col s6 m2 l2">
                    <div class="input-field">
                        <select name="" id="state-met">
                            <option value="" disabled selected>Usuario</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col s6 m2 l2">
                    <div class="input-field">
                        <select name="" id="state-met">
                            <option value="" disabled selected>Fecha inicio</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col s6 m2 l2">
                    <div class="input-field">
                        <select name="" id="state-met">
                            <option value="" disabled selected>Fecha fin</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
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
                            <th>CANCELAR</th>
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
            getMovements();
            searchMovement();
        });
        // 
        // Manejo de vistas
        $('.back-home').click(function (e) { 
            e.preventDefault();
            window.location = '../home/index.php'
        });
        // 
        // Funciones
        function getMovements(){
            $.ajax({
                type: "GET",
                url: "http://localhost/io-api/public/movements/get/all/all/all/all",
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
                    `<tr methodID="${row[i].idmovement}" class="content">
                        <td>${row[i].description}</td>  
                        <td>${row[i].denomination}</td>  
                        <td>${row[i].reason}</td>  
                        <td>${row[i].detail}</td>  
                        <td>${row[i].amount}</td>  
                        <td>${row[i].direction}</td>  
                        <td>${row[i].registered}</td>  
                        <td>${cancel}</td>  
                        <td><a href="#" class="btn cat-edit"><i class="material-icons">delete</i></a></td> 
                        <td></td> 
                    </tr>`
                    );
                }  
                $('.movements-table>tbody').html(html.join(''));
                $('select').formSelect();
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
    </script>
</body>
</html>