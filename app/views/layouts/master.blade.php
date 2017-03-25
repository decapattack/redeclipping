<!DOCTYPE html>
<html lang="br">
    <head>
        <title>Rede Clipping</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.css">-->
        <link rel="stylesheet" type="text/css" href="/css/pagina.css">
        <script src="/js/jquery.js"></script>
        <script src="/js/jquery.mask.js"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>-->
        <script src="/js/bootstrap.js"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </head>
    <body id="body-principal">
        <header> @include('layouts.header') </header>
        <div class="corpo">
            <div class="contents"> @yield('content') </div>
        </div>
    </body>
    <script>
        $("#body-principal").css("display","none");
        $(window).load(function(){
            $("#body-principal").css("display","block");
        });
    </script>
</html>
