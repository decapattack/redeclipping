<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>Rede Clipping</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!-- Colors -->
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

        <!-- CSS Files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="landing/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/pagina.css" rel="stylesheet">

        <style>
            html {
                background: url(img/background.webp) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>

    </head>

    <body class="corpo-pagina-login">


        <div class="form-transparente-login">

        </div>
        <div class="form-pagina-login">
            <div class="cabecalho-form-login">
                <b>Login</b>
            </div>
            <div>
                <form method="post" action="/sessions">
                    <div class="container-campos-login">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input class="campo-login-login" id="login" name="login" type="text" placeholder="Usuário">
                        </div>

                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-asterisk"></i></span>
                            <input class="campo-login-password" id="password" name="password" type="password" placeholder="Senha">

                        </div>
                        <div class="container-botao-login" align="center">
                            <input type="submit" value="Entrar" class="btn btn-primary">
                        </div>
                        <div class="erros-login">
                            {{$errors->first('login','<span class="error">:message</span>')}}
                            {{$errors->first('password','<span class="error">:message</span>')}}
                        </div>
                    </div>
                </form>
            </div>
        </div>






        <!-- /.javascript files -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
        /* global $ */
            $(function() {
                $('.form-transparente-login').css({
                    'position' : 'absolute',
                    'z-index' : '2',
                    'left' : '50%',
                    'top' : '50%',
                    'margin-left' : -$('.form-transparente-login').outerWidth()/2,
                    'margin-top' : -$('.form-transparente-login').outerHeight()/2
                });
            });

            $(function() {
                $('.form-pagina-login').css({
                    'position' : 'absolute',
                    'z-index' : '3',
                    'left' : '50%',
                    'top' : '50%',
                    'margin-left' : -$('.form-pagina-login').outerWidth()/2,
                    'margin-top' : -$('.form-pagina-login').outerHeight()/2
                });
            });
        </script>
    </body>
</html>
