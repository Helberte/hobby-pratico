@extends('layouts.layoutMain')

@section('content')

    <div class="banner">
        <div class="gradient">
            <h1 id="title-reader" class="title-reader"><strong>Ganhar dinheiro <br>fazendo o<br>que ama?</strong> <br>
                <strong class="frase">
                    Escolha um curso e comece a praticar agora mesmo!
                </strong>
            </h1>

            
        </div>        
    </div>

    <div class="sub-menu">
        <ul>
            <li><i class="fa-solid fa-palette"></i> Cursos nas mais diversificadas áreas</li>
            <li><i class="fa-solid fa-calendar-days"></i> Acesso total e vitalício</li>
            <li><i class="fa-solid fa-bag-shopping"></i> Compras totalmente seguras</li>
        </ul>
    </div>

    <main id="main-geral">

        <h2> <span> <strong>Super Ofertas</strong> Cursos com preços imperdíveis</span></h2>        

        <div class="container-cursos">

            @if(count($cursos) == 0)
                <p>Nenhum curso cadastrado ainda</p>

            @else
                @foreach($cursos as $curso)
                    <div class="card">
                        <img src="img/cursos/{{ $curso->image }}" alt="{{ $curso->nome }}">

                        <strong>{{ $curso->nome }}</strong>

                        <a href="{{ $curso->url }}">Saiba mais</a>
                    </div>
                @endforeach
            @endif
            
        </div> <!-- container-cursos -->
    </main>

    <div class="parallax-image">
        <h1>Invista em você</h1>
        <h3>Compras parceladas</h3>
    </div>

    <main id="main-geral">    

        <h2 class="main-geral-saiba-mais"><span> <strong>Clique em</strong> "Saiba mais" para conferir os preços</span></h2>        
        
        <div class="container-cursos">
            <div class="card">
                <img src="img/cursos/design_unhas.png" alt="Curso design de unhas">

                <strong>Designer de unhas</strong>

                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <img src="img/cursos/curso_de_fotografia.png" alt="Curso design de Fotografia">

                <strong>Creator Designer gráfico</strong>

                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <img src="img/cursos/design_unhas.png" alt="Curso design de unhas">

                <strong>Designer de unhas</strong>

                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <img src="img/cursos/design_unhas.png" alt="Curso design de unhas">

                <strong>Designer de unhas</strong>

                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <img src="img/cursos/design_unhas.png" alt="Curso design de unhas">

                <strong>Designer de unhas</strong>

                <a href="#">Saiba mais</a>
            </div>

            <div class="card">
                <img src="img/cursos/design_unhas.png" alt="Curso design de unhas">

                <strong>Designer de unhas</strong>

                <a href="#">Saiba mais</a>
            </div>
        </div> <!-- container-cursos -->

    </main>


@endsection