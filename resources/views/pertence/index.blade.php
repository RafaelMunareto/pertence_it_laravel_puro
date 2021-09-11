@extends('layout')

@section('conteudo')
	<div class="section">
		<section class="black" id='carousel'>
            <div class="carousel carousel-slider" id='carousel-height' data-indicators="true">
              <div class="carousel-fixed-item">
                <div id='contato-carousel' class="container-fluid">
                  <h3 class="white-text" id='entreEmContato'>Primeiro Passo</h3>
                  <a class="btn waves-effect red darken-1 white-text darken-text-2 red darken-1 pulse" id='buttomContato' href="passo">ANDIAMO</a>
                </div>
              </div>
              <div class="carousel-item teal white-text" href="#one!">
                <div class="container">
                  <h1 class="brand-logo">Pertence</h1>
                  <p class="white-text">Pertencimento é a nossa maior premissa.</p>
                </div>
              </div>
              <div class="carousel-item teal white-text" href="#two!">
                <div class="container">
                <a id='servicosHref' href='servicos'>
                    <h1>Processo Judicial</h1>
                  <p class="white-text">Encaminhamos o processo de Cidadania pelo Tribunal de Roma.</p>
                    <img src='{{ asset('img/processo.png') }}'>
                </a>
                </div>
              </div>
              <div class="carousel-item teal white-text" href="#three!">
                <div class="container">
                <a id='servicosHref' href='servicos'>
                  <h1>Árvore Genealógica</h1>
                  <p class="white-text">Montamos a sua Árvore Genealógica.</p>
                   <img src='{{ asset('img/arvore1.png') }}'>
                </a>
                </div>
              </div>
              <div class="carousel-item teal white-text" href="#four!">
                <div class="container">
                <a id='servicosHref' href='servicos'>
                  <h1>Busca de Certidões.</h1>
                  <p class="white-text">Encontramos a sua certidão na Itália.</p>
                  <img src='{{ asset('img/detetive.png') }}'>
                </a>
                </div>
              </div>
              <div class="carousel-item teal white-text" href="#one!">
                <div class="container">
                <a id='servicosHref' href='servicos'>
                  <h1>Tradução</h1>
                  <p class="white-text">Realizamos tradução direto na Itália.</p>
                  <img src='{{ asset('img/traducao.png') }}'>
                </a>
                </div>
              </div>
            </div>
        </section>
    </div>

    @include('pertence.whatsApp')

    <div class="parallax-container">
        <div class="parallax"><img class="responsive-img" alt="Parallax" src="{{ asset('img/coliseu2.png') }}"></div>
    </div>
    <div class="section white">
        <div class="row container">
            <h2 class="brand-logo" id='brand-logoNotHover'>Pertence</h2>
            <p class="grey-text text-darken-3 lighten-3">Você já é um Italiano, deixe-nos apenas ajudar a materializar esse direito.</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img class="responsive-img" alt="Parallax" src="{{ asset('img/veneza.png') }}"></div>
    </div>

@endsection
