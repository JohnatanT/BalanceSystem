<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema de Saldo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Cadastro</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Sistema de Saldo
                </div>
                <div class="msg">
                    <h4>Porque utilizar nosso sistema de Saldo?</h4>
                </div>
                <div class="row conteudo">
                    <div class="col-md-12">
                        <div class="bloco">
                            <div class="col-md-6">
                                <img src="" alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="txt">
                                    <h2>Confiança</h2>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                    e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos 
                                    e os embaralhou para fazer um livro de modelos de tipos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="bloco">
                            <div class="col-md-6">
                                <img src="" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <div class="txt">
                                    <h2>Integridade</h2>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                    e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos 
                                    e os embaralhou para fazer um livro de modelos de tipos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="bloco">
                            <div class="col-md-6">
                                <img src="" alt="" class="img-responsive">
                            </div>
                            <div class="col-md-6">
                                <div class="txt">
                                    <h2>Agilidade</h2>
                                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, 
                                    e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos 
                                    e os embaralhou para fazer um livro de modelos de tipos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
