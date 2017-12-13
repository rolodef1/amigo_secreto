<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5VH8LTF');
</script>
<!-- End Google Tag Manager -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Amigo secreto ETAFASHION.COM</title>

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

<style>
    .fila{
        width: 100%;
    }
    /*Estilos para desktop*/
    @media only screen and (min-width: 768px) {
        #app {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
        }
        .santa_fashion{
            width: 50%;
            text-align: center;
            float: left;
        }
        .santa_fashion img{
            width: 70%;
        }
        .amigo_secreto{
            width: 50%;
            text-align: center;
            float: left;
        }
        .amigo_secreto .logo img{
            width: 70%;
        }
        .amigo_secreto .info img{
            width: 70%;
        }

    }
    /*Estilos para mobile*/
    @media only screen and (max-width: 767px) {
        #app {
            width: 100%;
        }
        .santa_fashion{
            width: 100%;
            text-align: center;
        }
        .santa_fashion img{
            width: 70%;
        }
        .amigo_secreto{
            width: 100%;
            text-align: center;
        }
        .amigo_secreto .logo img{
            width: 70%;
        }
        .amigo_secreto .info img{
            width: 70%;
        }
        .flotar-derecha{
            width: 100%;
            float: right;
        }
        .flotar-izquierda{
            width: 100%;
            float: left;
        }
    }
</style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5VH8LTF"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="app">
            <div class="fila">
                <div style="width: 100%">
                    <div class="santa_fashion">
                        <img src="{{ asset('images/Home-Listo_02.png') }}" id="img_santa">
                    </div>
                    <div class="amigo_secreto">
                        <div class="fila">
                            <div class="logo">
                                <img src="{{ asset('images/Home-Listo_03.png') }}" id="img_logo">
                            </div>
                        </div>
                        <div class="fila">
                            <div class="info">
                                <img class="mensaje" src="{{ asset('images/Home-Listo_05.png') }}" onclick="show_info();" style="cursor: pointer;">
                            </div>
                        </div>
                        <div class="fila">
                            <div style="text-align: center; width: 50%; float: left;">
                                <a href="{{ route('login') }}" class="btn btn-default flotar-derecha" style="font-size: 1.5em;">Iniciar sesión
                                </a>
                            </div>
                            <div style="text-align: center; width: 50%; float: left;">
                                <a href="{{ route('register') }}" class="btn btn-default flotar-izquierda" style="font-size: 1.5em;">Registrarse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">
            function show_info(){
                var img_santa = document.querySelector('#img_santa');
                var img_logo = document.querySelector('#img_logo');
                img_santa.src = "{{ asset('images/banner-mas-informacion.jpg') }}";
                img_logo.src = "{{ asset('images/banner-mas-informacion2.png') }}";
                document.querySelector('.info').style.display = 'none';
            }
        </script>
    </body>
    </html>
