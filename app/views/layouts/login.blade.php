<!DOCTYPE html>
<html>
    <head>

        <!-- /.website title -->
        <title>Rede Clipping</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

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
            <div class="corpo-login">
                @yield('content')
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
