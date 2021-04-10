<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IO | Panel de Control</title>
</head>
<body>
    <?php include('../provider/provider.php') ?>
    <div class="container">
        <!-- Vista principal -->
        <div class="row row-settings">
            <a href="#" class="back-home col s1 m1 l1" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <div class="col s12 m12 l12 center-align" style="margin-top: 80px;">
                <a href="#" class="btn waves-effect waves-light black category" style="width: 350px;">Categorias</a>
            </div>
            <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
                <a href="#" class="btn waves-effect lastRegister waves-light black method" style="width: 350px;">Métodos de pago</a>
            </div>
            <div class="col s12 m12 l12 center-align" style="margin-top: 40px;">
                <a href="#" class="btn waves-effect dashboard waves-light black register" style="width: 350px;">Registro de usuario</a>
            </div>
        </div>
        <!--  -->
        <!-- Vista nueva categoria -->
        <div class="hide row row-categories">
            <a href="#" class="hide hide-categories col s1 m6 l6" style="margin-top: 30px"><i class="material-icons prefix" style="color: #000 !important;">arrow_back</i></a>
            <div class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">REGISTRO DE CATEGORIA</span>
                        <div class="divider"></div>
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">library_books</i>
                            <input type="text" id="category" class="activate" name="category">
                            <label for="category">Nombre de la Categoria</label>
                        </div>
                        <div class="input-field col s12 m11 l11 offset-m1 offset-l1">
                            <select name="" id="type-category">
                                <option value="" disabled selected>Tipo de categoria</option>
                                <option value="input">Entrada</option>
                                <option value="output">Salida</option>
                            </select>
                        </div>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-category">Aceptar</button>
                        <div class="preloader-wrapper hide small right active">
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
            <div class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">REGISTRO DE MÉTODO DE PAGO</span>
                        <div class="divider"></div>
                        <div class="input-field col s12 m12 l12">
                            <i class="material-icons prefix">library_books</i>
                            <input type="text" id="method" class="activate" name="method">
                            <label for="method">Nombre del Método</label>
                        </div>
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-methodpayment">Aceptar</button>
                        <div class="preloader-wrapper hide small right active">
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
            <div class="col s12 m6 l6 offset-m3 offset-l3 center-align">
                <div class="card horizontal hoverable">
                    <div class="card-content">
                        <span class="card-title left-align text-flow">REGISTRO DE USUARIO</span>
                        <div class="divider"></div>
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
                        <button class="waves-effect waves-yellow blue-grey lighten-5 black-text btn right send-register">Aceptar</button>
                        <div class="preloader-wrapper hide small right active">
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
        $('.hide-categories').click(function (e) { 
            e.preventDefault();
            $('.row-categories').addClass('hide');
            $('.row-settings').removeClass('hide');
        });
        $('.category').click(function (e) { 
            e.preventDefault();
            $('.row-settings').addClass('hide');
            $('.hide-categories').removeClass('hide');
            $('.row-categories').removeClass('hide');
            $('select').formSelect();
        });
        $('.hide-methodpayment').click(function (e) { 
            e.preventDefault();
            $('.row-methodpayment').addClass('hide');
            $('.row-settings').removeClass('hide');
        });
        $('.method').click(function (e) { 
            e.preventDefault();
            $('.row-settings').addClass('hide');
            $('.hide-methodpayment').removeClass('hide');
            $('.row-methodpayment').removeClass('hide');
        });
        $('.hide-register').click(function (e) { 
            e.preventDefault();
            $('.row-register').addClass('hide');
            $('.row-settings').removeClass('hide');
        });
        $('.register').click(function (e) { 
            e.preventDefault();
            $('.row-settings').addClass('hide');
            $('.hide-register').removeClass('hide');
            $('.row-register').removeClass('hide');
        });
        // 
    </script>
</body>
</html>