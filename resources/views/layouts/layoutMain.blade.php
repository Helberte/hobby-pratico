<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Helberte Costa Arruda">
        <meta name="description" content="Site para venda de cursos online de hobbyes práticos">
        <meta name="keywords" content="loja, curso, hobby, passatempo, aprender, mercado de trabalho, dinheiro, ama, amor">

        <!-- icons -->
        <script src="https://kit.fontawesome.com/c8b8b3d409.js" crossorigin="anonymous"></script>

        <!-- css geral -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">

        <title>Hobby Prático</title>
       
    </head>
    <body>
        @include('shared.header')
        @include('shared.menu')

                
        @yield('content')
        
        
        @include('shared.footer')

        <script src="js/jquery-3.6.3.min.js" ></script>
        <script src="js/script.js"></script>
    
    </body>
</html>
