<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    a.btn-flat{
        width: 350px; 
        border: 1px solid #8c8b87; 
        border-radius: 10px;
    }
    a.btn-flat:hover{
        background-color: #4f5250;
        color: #fff;
      }
      .tabs .tab a{
            color:#000 !important;
        } /*Black color to the text*/

        .tabs .tab a:hover {
            background-color:#98b9eb !important;
            color:#000 !important;
        } /*Text color on hover*/

        .tabs .tab a.active {
            background-color:#d7e5fa !important;
            color:#000 !important;
        } /*Background and text color when a tab is active*/

        .tabs .indicator {
            background-color:#0D47A1 !important;
        }
    </style>
    <title>IO | Panel de Control</title>
</head>
<body>
    <?php include('../provider/provider.php') ?>
    <div class="container">
        <!-- Vista principal -->
        <div class="row row-settings">
            <a href="#" class="back-home col s1 m1 l1" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <h1 class="col s10 m10 l10 center-align margin-col text-flow">PANEL DE CONTROL</h1>
            <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
                <a href="#" class="btn btn-flat category">Categorias</a>
            </div>
            <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
                <a href="#" class="btn btn-flat lastRegister waves-light method">Métodos de pago</a>
            </div>
            <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
                <a href="#" class="btn btn-flat dashboard waves-light register">Usuarios</a>
            </div>
        </div>
        <!--  -->
        <!-- Vista nueva categoria -->
        <div class="hide row row-categories">
            <a href="#" class="hide hide-categories col s1 m6 l6" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <ul class="tabs">
                <li class="tab col s12 m3 l3 offset-m3 offset-l3"><a class="active" href="#list-cat">Listado de Categorias</a></li>
                <li class="tab col s12 m3 l3"><a href="#new-cat">Nueva Categoria</a></li>
            </ul>
            <div id="new-cat" class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">REGISTRO DE CATEGORIA</span>
                        <div class="divider"></div>
                        <form action="" id="form-newCat">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">library_books</i>
                                <input type="text" id="category" class="activate" name="category">
                                <label for="category">Nombre de la Categoria</label>
                            </div>
                            <div class="input-field col s12 m10 l10 offset-m2 offset-l2">
                                <select name="" id="type-category">
                                    <option value="0" disabled selected>Tipo de categoria</option>
                                    <option value="input">Entrada</option>
                                    <option value="output">Salida</option>
                                </select>
                            </div>
                        </form>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-category">Aceptar</button>
                        <div class="preloader-wrapper category-wrapper hide small right active">
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
            <div id="list-cat">
                <div class="col s12 m4 l4">
                    <div class="input-field">
                        <input type="text" id="searchCat">
                        <label for="searchCat">Buscar</label>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="input-field">
                        <select name="" id="type-cat">
                            <option value="" disabled selected>Tipo</option>
                            <option value="input">ENTRADA</option>
                            <option value="output">SALIDA</option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="input-field">
                        <select name="" id="state-cat">
                            <option value="" disabled selected>Estado</option>
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <table class="responsive-table highlight category-table">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>TIPO</th>
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
        <!-- Editar categoria -->
        <div class="hide row row-editCategories">
            <a href="#" class="hide-editCategories col s1 m6 l6" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <div id="edit-cat" class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">EDITAR CATEGORIA</span>
                        <div class="divider"></div>
                        <form action="" id="form-editCat">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">library_books</i>
                                <input type="text" id="ed-category" class="activate" name="ed-category">
                                <label for="ed-category">Nombre de la Categoria</label>
                            </div>
                            <div class="input-field col s12 m10 l10 offset-m2 offset-l2">
                                <select name="" id="type-editCategory">
                                    <option value="0" disabled selected>Tipo de categoria</option>
                                    <option value="input">Entrada</option>
                                    <option value="output">Salida</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m10 l10 offset-m2 offset-l2">
                                <select name="" id="state-editCategory">
                                    <option value="" disabled selected>Estado</option>
                                    <option value="1">Habilitada</option>
                                    <option value="0">Inactiva</option>
                                </select>
                            </div>
                        </form>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-editCategory">Aceptar</button>
                        <div class="preloader-wrapper editCategory-wrapper hide small right active">
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
        <!-- Vista nuevo metodo de pago -->
        <div class="hide row row-methodpayment">
            <a href="#" class="hide hide-methodpayment col s1 m6 l6" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <ul class="tabs">
                <li class="tab col s12 m3 l3 offset-m3 offset-l3"><a class="active" href="#list-method">Listado de Métodos</a></li>
                <li class="tab col s12 m3 l3"><a href="#new-method">Nuevo Método</a></li>
            </ul>
            <div id="new-method" class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">REGISTRO DE MÉTODO DE PAGO</span>
                        <div class="divider"></div>
                        <form action="" id="form-newMethod">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">library_books</i>
                                <input type="text" id="method" class="activate" name="method">
                                <label for="method">Nombre del Método</label>
                            </div>
                        </form>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-methodpayment">Aceptar</button>
                        <div class="preloader-wrapper methodpayment-wrapper hide small right active">
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
            <div id="list-method">
                <div class="col s12 m4 l4">
                    <div class="input-field">
                        <input type="text" id="searchMet">
                        <label for="searchMet">Buscar</label>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                    <div class="input-field">
                        <select name="" id="state-met">
                            <option value="" disabled selected>Estado</option>
                            <option value="1">ACTIVO</option>
                            <option value="0">INACTIVO</option>
                        </select>
                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <table class="responsive-table highlight method-table">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
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
        <!-- Editar metodo -->
        <div class="hide row row-editMethodpayment">
            <a href="#" class="hide-editMethodpayment col s1 m6 l6" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <div id="edit-method" class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">EDITAR MÉTODO DE PAGO</span>
                        <div class="divider"></div>
                        <form action="" id="form-editMethod">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">library_books</i>
                                <input type="text" id="ed-method" class="activate" name="ed-method">
                                <label for="ed-method">Nombre del Método</label>
                            </div>
                            <div class="input-field col s12 m10 l10 offset-m2 offset-l2">
                                <select name="" id="state-editMethod">
                                    <option value="" disabled selected>Estado</option>
                                    <option value="1">ACTIVO</option>
                                    <option value="0">INACTIVO</option>
                                </select>
                            </div>
                        </form>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-editMethodpayment">Aceptar</button>
                        <div class="preloader-wrapper editMethodpayment-wrapper hide small right active">
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
        <!-- Vista nuevo usuario -->
        <div class="hide row row-register">
            <a href="#" class="hide hide-register col s1 m6 l6" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <ul class="tabs">
                <li class="tab col s12 m3 l3 offset-m3 offset-l3"><a class="active" href="#list-users">Listado de Usuarios</a></li>
                <li class="tab col s12 m3 l3"><a href="#new-user">Nuevo Usuario</a></li>
            </ul>
            <div id="new-user" class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">REGISTRO DE USUARIO</span>
                        <div class="divider"></div>
                        <form action="" id="form-newRegister">
                            <div class="input-field col s12 m12 l12 mt">
                                <i class="material-icons prefix">face</i>
                                <input type="text" id="name" class="activate" name="name">
                                <label for="name">Nombre</label>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">account_box</i>
                                <input type="text" id="surname" class="activate" name="surname">
                                <label for="surname">Apellido</label>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">email</i>
                                <input type="email" id="email" class="activate" name="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" id="password" class="activate" name="password">
                                <label for="password">Contraseña</label>
                            </div>
                            <div class="input-field col s12 m10 l10 offset-m2 offset-l2">
                                <select name="" id="type-user">
                                    <option value="0" disabled selected>Tipo de usuario</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Cliente</option>
                                </select>
                            </div>
                        </form>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-register">Aceptar</button>
                        <div class="preloader-wrapper register-wrapper hide small right active">
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
            <div id="list-users">
                <div class="col s12 m4 l4">
                    <div class="input-field">
                        <input type="text" id="searchUsers">
                        <label for="searchUsers">Buscar</label>
                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <table class="responsive-table highlight users-table">
                        <thead>
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>EMAIL</th>
                                <th>PRIVILEGIOS</th>
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
        <div class="hide row row-editRegister">
            <a href="#" class="hide-editRegister col s1 m6 l6" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <div id="edit-user" class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">EDITAR USUARIO</span>
                        <div class="divider"></div>
                        <form action="" id="form-editRegister">
                            <div class="input-field col s12 m12 l12 mt">
                                <i class="material-icons prefix">face</i>
                                <input type="text" id="ed-name" class="activate" name="ed-name">
                                <label for="ed-name">Nombre</label>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">account_box</i>
                                <input type="text" id="ed-surname" class="activate" name="ed-surname">
                                <label for="ed-surname">Apellido</label>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">email</i>
                                <input type="email" id="ed-email" class="activate" name="ed-email">
                                <label for="ed-email">Email</label>
                            </div>
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">lock</i>
                                <input type="password" id="ed-password" class="activate" name="ed-password">
                                <label for="ed-password">Contraseña</label>
                            </div>
                            <div class="input-field col s12 m10 l10 offset-m2 offset-l2">
                                <select name="" id="type-editUser">
                                    <option value="0" disabled selected>Tipo de usuario</option>
                                    <option value="1">Administrador</option>
                                    <option value="2">Cliente</option>
                                </select>
                            </div>
                            <div class="input-field col s12 m10 l10 offset-m2 offset-l2">
                                <select name="" id="state-editUser">
                                    <option value="" disabled selected>Estado</option>
                                    <option value="1">ACTIVO</option>
                                    <option value="0">INACTIVO</option>
                                </select>
                            </div>
                        </form>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-editRegister">Aceptar</button>
                        <div class="preloader-wrapper editRegister-wrapper hide small right active">
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
    </div>
    <script>
        // Variables de entorno
        var typeCat;
        var typeUser;
        var filterCatType = 'input';
        var filterCatState = 'all';
        var filterMetState = 'all';
        var typeEditCat;
        var stateCat;
        var paramCat;
        var paramMet;
        var stateMet;
        var stateUser;
        var typeEditUser;
        var paramUser;
        // 
        // Funciones iniciales
        $(document).ready(function () {
            $("#type-category").change(function(){
                typeCat = $(this).children("option:selected").val();
                console.log(typeCat);
            });
            $("#type-editCategory").change(function(){
                typeEditCat = $(this).children("option:selected").val();
                console.log(typeEditCat);
            });
            $("#state-editCategory").change(function(){
                stateCat = $(this).children("option:selected").val();
                console.log(stateCat);
            });
            $("#state-editMethod").change(function(){
                stateMet = $(this).children("option:selected").val();
                console.log(stateMet);
            });
            $("#state-editUser").change(function(){
                stateUser = $(this).children("option:selected").val();
                console.log(stateUser);
            });
            $("#type-user").change(function(){
                typeUser = $(this).children("option:selected").val();
                console.log(typeUser);
            });
            $("#type-editUser").change(function(){
                typeEditUser = $(this).children("option:selected").val();
                console.log(typeEditUser);
            });
            $("#type-cat").change(function(){
                filterCatType = $(this).children("option:selected").val();
                console.log(filterCatType);
                getCategories();
            });
            $("#state-cat").change(function(){
                filterCatState = $(this).children("option:selected").val();
                console.log(filterCatState);
                getCategories();
            });
            $("#state-met").change(function(){
                filterMetState = $(this).children("option:selected").val();
                console.log(filterMetState);
                getMethods();
            });
        });
        // 
        // Manejo de vistas
        $('.back-home').click(function (e) { 
            e.preventDefault();
            window.location = '../home/index.php'
        });
        $('.hide-categories').click(function (e) { 
            e.preventDefault();
            $('.row-categories').addClass('hide');
            $('.row-settings').removeClass('hide');
        });
        $('.hide-editCategories').click(function (e) { 
            e.preventDefault();
            $('.row-categories').removeClass('hide');
            $('.row-editCategories').addClass('hide');
        });
        $('.category').click(function (e) { 
            e.preventDefault();
            $('.row-settings').addClass('hide');
            $('.hide-categories').removeClass('hide');
            $('.row-categories').removeClass('hide');
            $('select').formSelect();
            $('.tabs').tabs();
            searchCat();
        });
        $('.hide-methodpayment').click(function (e) { 
            e.preventDefault();
            $('.row-methodpayment').addClass('hide');
            $('.row-settings').removeClass('hide');
        });
        $('.hide-editMethodpayment').click(function (e) { 
            e.preventDefault();
            $('.row-editMethodpayment').addClass('hide');
            $('.row-methodpayment').removeClass('hide');
        });
        $('.method').click(function (e) { 
            e.preventDefault();
            $('.row-settings').addClass('hide');
            $('.hide-methodpayment').removeClass('hide');
            $('.row-methodpayment').removeClass('hide');
            $('.tabs').tabs();
            $('select').formSelect();
            searchMet();
            getMethods();
        });
        $('.hide-register').click(function (e) { 
            e.preventDefault();
            $('.row-register').addClass('hide');
            $('.row-settings').removeClass('hide');
        });
        $('.hide-editRegister').click(function (e) { 
            e.preventDefault();
            $('.row-editRegister').addClass('hide');
            $('.row-register').removeClass('hide');
        });
        $('.register').click(function (e) { 
            e.preventDefault();
            $('.row-settings').addClass('hide');
            $('.hide-register').removeClass('hide');
            $('.row-register').removeClass('hide');
            $('select').formSelect();
            $('.tabs').tabs();
            searchUsers();
            getUsers();
        });
        // 
        // Funciones
        $('.send-category').click(function (e) { 
            e.preventDefault();
            $('.send-category').addClass('hide');
            $('.category-wrapper').removeClass('hide');
            var description = $("input[name=category]").val();
            var direction = typeCat;
            $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/settings/save/categories",
                data: {
                    "description": description,
                    "direction":  direction
                },
                dataType: "json",
                success: function (response) {
                    M.toast({html: '¡Categoria creada correctamente!'});
                    $('.send-category').removeClass('hide');
                    $('.category-wrapper').addClass('hide');
                    $('#form-newCat').trigger('reset');
                    getCategories();
                },
                error: function(){
                    M.toast({html: 'Error al crear categoria, compruebe los datos'});
                    $('.send-category').removeClass('hide');
                    $('.category-wrapper').addClass('hide');
                }
            });
        });
        $('.send-editCategory').click(function (e) { 
            e.preventDefault();
            $('.send-editCategory').addClass('hide');
            $('.editCategory-wrapper').removeClass('hide');
            var description = $("input[name=ed-category]").val();
            var direction = typeEditCat;
            var state = stateCat;
            $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/settings/save/categories",
                data: {
                    "description": description,
                    "direction":  direction,
                    "enabled": state,
                    "id": paramCat,
                },
                dataType: "json",
                success: function (response) {
                    M.toast({html: '¡Categoria editada correctamente!'});
                    $('.send-editCategory').removeClass('hide');
                    $('.editCategory-wrapper').addClass('hide');
                    // $('#form-editCat').trigger('reset');
                    getCategories();
                },
                error: function(){
                    M.toast({html: 'Error al editar categoria, compruebe los datos'});
                    $('.send-editCategory').removeClass('hide');
                    $('.editCategory-wrapper').addClass('hide');
                }
            });
        });
        $('.send-methodpayment').click(function (e) { 
            e.preventDefault();
            $('.send-methodpayment').addClass('hide');
            $('.methodpayment-wrapper').removeClass('hide');
            var method = $("input[name=method]").val();
            $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/settings/save/paymentmethods",
                data: {
                    "denomination": method,
                },
                dataType: "json",
                success: function (response) {
                    M.toast({html: '¡Método creado correctamente!'});
                    $('.send-methodpayment').removeClass('hide');
                    $('.methodpayment-wrapper').addClass('hide');
                    $('#form-newMethod').trigger('reset');
                    getMethods();
                },
                error: function(){
                    M.toast({html: 'Error al crear método, compruebe los datos'});
                    $('.send-methodpayment').removeClass('hide');
                    $('.methodpayment-wrapper').addClass('hide');
                }
            });
        });
        $('.send-editMethodpayment').click(function (e) { 
            e.preventDefault();
            $('.send-editMethodpayment').addClass('hide');
            $('.editMethodpayment-wrapper').removeClass('hide');
            var method = $("input[name=ed-method]").val();
            var state = stateMet;
            $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/settings/save/paymentmethods",
                data: {
                    "denomination": method,
                    "enabled": state,
                    "id": paramMet
                },
                dataType: "json",
                success: function (response) {
                    M.toast({html: '¡Método editado correctamente!'});
                    $('.send-editMethodpayment').removeClass('hide');
                    $('.editMethodpayment-wrapper').addClass('hide');
                    // $('#form-editMethod').trigger('reset');
                    getMethods();
                },
                error: function(){
                    M.toast({html: 'Error al editar método, compruebe los datos'});
                    $('.send-editMethodpayment').removeClass('hide');
                    $('.editMethodpayment-wrapper').addClass('hide');
                }
            });
        });
        $('.send-register').click(function (e) { 
            e.preventDefault();
            $('.send-register').addClass('hide');
            $('.register-wrapper').removeClass('hide');
            var name = $("input[name=name]").val();
            var surname = $("input[name=surname]").val();
            var email = $("input[name=email]").val();
            var password = $("input[name=password]").val();
            var rol = typeUser;
            $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/users/create",
                data: {
                    "name": name,
                    "surname": surname,
                    "email": email,
                    "password": password,
                    "role": rol
                },
                dataType: "json",
                success: function (response) {
                    M.toast({html: '¡Usuario creado correctamente!'});
                    $('.send-register').removeClass('hide');
                    $('.register-wrapper').addClass('hide');
                    $('#form-newRegister').trigger('reset');
                    getUsers();
                },
                error: function(){
                    M.toast({html: 'Error al crear usuario, compruebe los datos'});
                    $('.send-register').removeClass('hide');
                    $('.register-wrapper').addClass('hide');
                }
            });
        });
        $('.send-editRegister').click(function (e) { 
            e.preventDefault();
            $('.send-editRegister').addClass('hide');
            $('.editRegister-wrapper').removeClass('hide');
            var name = $("input[name=ed-name]").val();
            var surname = $("input[name=ed-surname]").val();
            var email = $("input[name=ed-email]").val();
            var password = $("input[name=ed-password]").val();
            var rol = typeEditUser;
            var state = stateUser;
            var data;
            if (password == '') {
                data = {
                    "name": name,
                    "surname": surname,
                    "email": email,
                    "role": rol,
                    "enabled": state,
                    "id": paramUser
                };
            }else{
                data = {
                    "name": name,
                    "surname": surname,
                    "email": email,
                    "password": password,
                    "role": rol,
                    "enabled": state,
                    "id": paramUser
                }
            }
            $.ajax({
                type: "POST",
                url: "http://localhost/io-api/public/users/update",
                data: data,
                dataType: "json",
                success: function (response) {
                    M.toast({html: '¡Usuario editado correctamente!'});
                    $('.send-editRegister').removeClass('hide');
                    $('.editRegister-wrapper').addClass('hide');
                    // $('#form-editRegister').trigger('reset');
                    getUsers();
                },
                error: function(){
                    M.toast({html: 'Error al editar usuario, compruebe los datos'});
                    $('.send-editRegister').removeClass('hide');
                    $('.editRegister-wrapper').addClass('hide');
                }
            });
        });
        function getCategories(){
            $.ajax({
                type: "GET",
                url: "http://localhost/io-api/public/settings/get/" + filterCatType + '/' + filterCatState,
                dataType: "json",
                success: function (response) {
                    let row = response.result;
                    let html = [];
                    for (let i=0; i < row.length; i++){
                    var state = row[i].enabled;
                    if (state == '1') {
                        state = 'ACTIVO';
                    }else{
                        state = 'INACTIVO';
                    }
                    var direction = row[i].direction;
                    if (direction == '1') {
                        direction = 'ENTRADA';
                    }else{
                        direction = 'SALIDA';
                    }
                    html.push(
                    `<tr categoryID="${row[i].idcategorie}" class="content">
                        <td>${row[i].description}</td> 
                        <td>${direction}</td> 
                        <td>${state}</td> 
                        <td>${row[i].created}</td> 
                        <td><a href="#" class="btn cat-edit teal darken-2"><i class="material-icons">edit</i></a></td> 
                        <td></td> 
                    </tr>`
                    );
                }  
                $('.category-table>tbody').html(html.join(''));
                $('.cat-edit').click(function (e) { 
                    e.preventDefault();
                    $('.row-categories').addClass('hide');
                    $('.row-editCategories').removeClass('hide');
                    $('input[name="ed-category"]').val($(this).parent().parent().find('td').eq(0).html());
                    var stateUpdate = state;
                    if (stateUpdate == 'ACTIVO' ) {
                        stateUpdate = '1';
                    }else{
                        stateUpdate = '2';
                    }
                    stateCat = stateUpdate;
                    var element = $(this)[0].parentElement.parentElement;
                    paramCat = $(element).attr('categoryID');
                    M.updateTextFields();
                });
                }
            });
        }
        function getMethods(){
            $.ajax({
                type: "GET",
                url: "http://localhost/io-api/public/settings/get/paymentmethods/" + filterMetState,
                dataType: "json",
                success: function (response) {
                    let row = response.result;
                    let html = [];
                    for (let i=0; i < row.length; i++){
                    var state = row[i].enabled;
                    if (state == '1') {
                        state = 'ACTIVO';
                    }else{
                        state = 'INACTIVO';
                    }
                    html.push(
                    `<tr methodID="${row[i].idpaymentmethod}" class="content">
                        <td>${row[i].denomination}</td>  
                        <td>${state}</td> 
                        <td>${row[i].created}</td> 
                        <td><a href="#" class="btn met-edit teal darken-2"><i class="material-icons">edit</i></a></td> 
                        <td></td> 
                    </tr>`
                    );
                }  
                $('.method-table>tbody').html(html.join(''));
                $('.met-edit').click(function (e) { 
                    e.preventDefault();
                    $('.row-editMethodpayment').removeClass('hide');
                    $('.row-methodpayment').addClass('hide');
                    $('input[name="ed-method"]').val($(this).parent().parent().find('td').eq(0).html());
                    var stateUpdate = state;
                    if (stateUpdate == 'ACTIVO' ) {
                        stateUpdate = '1';
                    }else{
                        stateUpdate = '2';
                    }
                    stateMet = stateUpdate;
                    var element = $(this)[0].parentElement.parentElement;
                    paramMet = $(element).attr('methodID');
                    M.updateTextFields();
                });
                }
            });
        }
        function getUsers(){
            $.ajax({
                type: "GET",
                url: "http://localhost/io-api/public/users/get",
                dataType: "json",
                success: function (response) {
                    let row = response.result;
                    let html = [];
                    for (let i=0; i < row.length; i++){
                    var state = row[i].enabled;
                    if (state == '1') {
                        state = 'ACTIVO';
                    }else{
                        state = 'INACTIVO';
                    }
                    var rol = row[i].role;
                    if (rol == '1') {
                        rol = 'Administrador';
                    }
                    if (rol == '2') {
                        rol = 'Usuario';
                    }
                    html.push(
                    `<tr userID="${row[i].iduser}" class="content">
                        <td>${row[i].name}</td>  
                        <td>${row[i].surname}</td>  
                        <td>${row[i].email}</td>  
                        <td>${rol}</td>  
                        <td>${state}</td> 
                        <td>${row[i].created}</td> 
                        <td><a href="#" class="btn user-edit teal darken-2"><i class="material-icons">edit</i></a></td> 
                        <td></td> 
                    </tr>`
                    );
                }  
                $('.users-table>tbody').html(html.join(''));
                $('.user-edit').click(function (e) { 
                    e.preventDefault();
                    $('.row-editRegister').removeClass('hide');
                    $('.row-register').addClass('hide');
                    $("input[name=ed-name]").val($(this).parent().parent().find('td').eq(0).html());
                    $("input[name=ed-surname]").val($(this).parent().parent().find('td').eq(1).html());
                    $("input[name=ed-email]").val($(this).parent().parent().find('td').eq(2).html());
                    var rolUpdate = rol;
                    if (rolUpdate == 'Administrador') {
                        rolUpdate = '1';
                    }else{
                        rolUpdate = '2';
                    }
                    typeEditUser = rolUpdate;
                    var stateUpdate = state;
                    if (stateUpdate == 'ACTIVO' ) {
                        stateUpdate = '1';
                    }else{
                        stateUpdate = '2';
                    }
                    stateUser = stateUpdate;
                    var element = $(this)[0].parentElement.parentElement;
                    paramUser = $(element).attr('userID');
                    M.updateTextFields();
                });
                }
            });
        }
        // 
        // Buscadores
        function searchCat(){
            $("#searchCat").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".content").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        }
        function searchMet(){
            $("#searchMet").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".content").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        }
        function searchUsers(){
            $("#searchUsers").on("keyup", function() {
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