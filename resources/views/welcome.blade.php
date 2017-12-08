<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
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
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="fila">
            <div style="width: 100%">
                <div class="santa_fashion">
                    <img src="{{ asset('images/Home-Listo_02.png') }}">
                </div>
                <div class="amigo_secreto">
                    <div class="fila">
                        <div class="logo">
                            <img src="{{ asset('images/Home-Listo_03.png') }}">
                        </div>
                    </div>
                    <div class="fila">
                        <div class="info">
                            <img class="mensaje" src="{{ asset('images/Home-Listo_05.png') }}">
                        </div>
                    </div>
                    <div class="fila">
                        <div style="text-align: center; width: 50%; float: left;">
                            <a href="{{ route('login') }}" class="btn btn-default" style="font-size: 1.5em;float: right;">Iniciar sesion
                            </a>
                        </div>
                        <div style="text-align: center; width: 50%; float: left;">
                            <a href="{{ route('register') }}" class="btn btn-default" style="font-size: 1.5em; float: left;">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
