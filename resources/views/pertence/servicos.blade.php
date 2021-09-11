@extends('layout')
@section('cabecalho')
    Nossos Serviços
@endsection
@section('conteudo')

    <div class="section white">
        <div class="row container">
            <h2 class="brand-logo" id='brand-logoNotHover'>Processo na Itália</h2>
            <p class="grey-text text-darken-3 lighten-3">Encaminhamos processo para a cidadania via tribunal de Roma, tanto para <i>Jures Sanguini</i> como para linha materna. Entre em contato para uma consulta gratuita. </p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img class="responsive-img" alt="Parallax" src="{{ asset('img/justice-2.png') }}"></div>
    </div>

    <div class="section white">
        <div class="row container">
            <h2 class="brand-logo" id='brand-logoNotHover'>Tradução</h2>
            <p class="grey-text text-darken-3 lighten-3">Encaminhamos para tradução direto na Itália sem a necessidade do segundo apostilamento, caso o processo seja encaminhado via tribunal de Roma.</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img class="responsive-img" alt="Parallax" src="{{ asset('img/translate2.png') }}"></div>
    </div>

    <div class="section white">
        <div class="row container">
            <h2 class="brand-logo" id='brand-logoNotHover'>Busca de Certidões</h2>
            <p class="grey-text text-darken-3 lighten-3">Fazemos o possível para encontrar as suas origens. Um homem que não conhece o seu passado, nunca entederá o seu futuro.</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img class="responsive-img" alt="Parallax" src="{{ asset('img/cert.png') }}"></div>
    </div>

    <div class="section white">
        <div class="row container">
            <h2 class="brand-logo" id='brand-logoNotHover'>Árvore Genealógico</h2>
            <p class="grey-text text-darken-3 lighten-3">Buscamos encontrar e materializar cada ramo da sua bela árvore genealógica.</p>
        </div>
    </div>
    <div class="parallax-container">
        <div class="parallax"><img class="responsive-img" alt="Parallax" src="{{ asset('img/arvore.png') }}"></div>
    </div>

@endsection
