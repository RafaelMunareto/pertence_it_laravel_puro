<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('img/logoFavicon.PNG') }}" rel="shortcut icon" >
	<title>Pertence-it</title>
<!-- Plugin -->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/404.css') }}" rel="stylesheet">
    <link href="{{ asset('css/message.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet">
<!-- FIM Plugin -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/estilosMobile.css') }}" rel="stylesheet">
</head>

<!-- NavBar -->
<nav class="nav-extended  red darken-1">

    <div class="nav-wrapper">
        <a href="/index" class="brand-logo" id='brand-logo-mobile'><img src='{{ asset('img/logo2.png') }}'></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            @auth('admin')
                <li><a id='contato' class='waves-effect waves-light btn teal white-text' href='/admin/logout'><i class="material-icons left white-text">close</i>SAIR</a></li>
            @endAuth
                <li><a id='admin' href='/admin'><i class="material-icons left">account_box</i>ADMINISTRAÇÃO</a></li>
                <li><a id='/baseClientes' href='/home'><i class="material-icons left">person</i>ÁREA DO CLIENTE</a></li>
            @Auth('web')
                <li><a id='contato' class='waves-effect waves-light btn white red-text text-darken-1' href='/sair'><i class="material-icons left red-text text-red darken-1">close</i>SAIR</a></li>
            @endAuth
        </ul>
    </div>

    <div class="nav-content">
        <ul class="tabs tabs-transparent" id='NavInf' style='overflow:hidden'>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li ><a id='/contato' href='/direito'>QUEM POSSUI DIREITO</a></li>
                <li ><a id='/passo' href='/passo'>PRIMEIRO PASSO!</a></li>
                <li ><a id='/servicos' href='/servicos'>SERVIÇOS</a></li>
                <li><a id='/vantagens' href='/vantagens'>VANTAGENS</a></li>
                <li><a id='/preco' href='/preco'>CUSTOS</a></li>
                <li ><a id='/historia' href='/historia'>NOSSA HISTÓRIA</a></li>
                <li><a id='/contato' href='/contato'>CONTATO</a></li>
            </ul>
        </ul>
    </div>
</nav>

<ul class="sidenav" class="collection with-header" id="mobile-demo">
    <div class="background">
        <img style='width:100%' src="{{ asset('img/coliseu.jpg') }}">
    </div>



@auth('admin')
    <li><div class="divider"></div></li>
    <li><a id='contato' class='waves-effect waves-light btn teal white-text' href='/admin/logout'><i class="material-icons left white-text">close</i>SAIR</a></li>
@endAuth
@Auth('web')
    <li><div class="divider"></div></li>
    <li><a id='contato' class='waves-effect waves-light btn white red-text text-darken-1' href='/sair'><i class="material-icons left red-text text-red darken-1">close</i>SAIR</a></li>
@endAuth
   <li><div class="divider"></div></li>
    <li class='red lighten-5'><a id='admin' href='/admin'><i class="material-icons left">account_box</i>ADMINISTRAÇÃO</a></li>
    <li><div class="divider"></div></li>
    <li class='teal lighten-5' ><a id='/baseClientes' href='/home'><i class="material-icons left">person</i>ÁREA DO CLIENTE</a></li>
    <li><div class="divider"></div></li>
    <li class='waves'><a id='contato' href='/direito'><i class="material-icons left">local_library</i>QUEM POSSUI DIREITO</a></li>
    <li><div class="divider"></div></li>
    <li class='teal lighten-5'><a class='text-teal' id='contato' href='/passo'><i class="material-icons left teal-text">directions_walk</i>PRIMEIRO PASSO</a></li>
    <li><div class="divider"></div></li>
    <li><a id='servicos' href='/servicos'><i class="material-icons left">business_center</i>SERVIÇOS</a></li>
    <li><div class="divider"></div></li>
    <li><a id='vantagens' href='/vantagens'><i class="material-icons left">mood</i>VANTAGENS</a></li>
    <li><div class="divider"></div></li>
    <li><a id='preco' href='/preco'><i class="material-icons left">monetization_on</i>CUSTOS</a></li>
    <li><div class="divider"></div></li>
    <li><a id='historia' href='/historia'><i class="material-icons left">hourglass_empty</i>NOSSA HISTÓRIA</a></li>
    <li><div class="divider"></div></li>
    <li><a id='contato' href='/contato'><i class="material-icons left">contact_phone</i>CONTATO</a></li>
</ul>
<!-- FIM NavBar -->

    <body class='container-fluid'>
        @yield('navAdministracao')
        <h4 class='brand-logo' id='brand-logoNotHover'> @yield('cabecalho')</h4>
        <div class='container'>
            @include('message.flash-message')
        </div>
        @yield('conteudo')
    </body>

<!-- Footer -->
    <footer class="page-footer teal">
        <div class="container">
        <div class="row">
            <div class="col l6 s12">
            <h5 class="white-text" id='footer-title'>Pertence</h5>
            <p class="grey-text text-lighten-4" id='footer-Subtitle' >Deixe-nos ajudar a construir esse sonho.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <ul>
                    <li><a class="grey-text text-lighten-3" href="/home"><i class="material-icons left">person</i>ÁREA DO CLIENTE</a></a></li>
                    <li><a class="grey-text text-lighten-3" href="/admin"><i class="material-icons left">account_box</i>ADMINISTRAÇÃO</a></li>
                    <li><a class="grey-text text-lighten-3" href="/passo"><i class="material-icons left">directions_walk</i>PRIMEIRO PASSO</a></li>
                    <li><a class="grey-text text-lighten-3" href="/direito"><i class="material-icons left">local_library</i>QUEM POSSUI DIREITO</a></li>
                    <li><a class="grey-text text-lighten-3" href="/servicos"><i class="material-icons left">business_center</i>SERVIÇOS</a></li>
                    <li><a class="grey-text text-lighten-3" href="/vantagens"><i class="material-icons left">mood</i>VANTAGENS</a></li>
                    <li><a class="grey-text text-lighten-3" href="/preco"><i class="material-icons left">monetization_on</i>CUSTOS</a></li>
                    <li><a class="grey-text text-lighten-3" href="/historia"><i class="material-icons left">hourglass_empty</i>NOSSA HISTÓRIA</a></li>
                    <li><a class="grey-text text-lighten-3" href="/contato"><i class="material-icons left">contact_phone</i>CONTATO</a></li>
                </ul>
                <ul>
                    <li><a href='https://www.facebook.com/Pertence-it-114894050064703/'><img src='{{ asset('img/facebook.png') }}'> <span id='linksHref'>@pertence-it</span></a></li>
                    <li><a href='https://www.instagram.com/pertence_it/'><img src='{{ asset('img/instagram.png') }}'> <span id='linksHref'>@pertence_it</span></a></li>
                    <li><a href='mailto:contato@pertence-it.com.br'><img src='{{ asset('img/email.png') }}'> <span id='linksHref'>contato@pertence-it.com.br</span></a></li>
                </ul>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
        <div class="container">
        Pertence© 2020 2.1 by <a id='divFlex' href='https://www.divflex.com.br/public/index'>DivFlex</a>
        </div>
        </div>
    </footer>
<!-- FIM Footer -->

</html>

<!-- plugins -->

<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mask.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pace.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/message.js') }}"></script>
<!-- FIM plugins -->
<script type="text/javascript" src="{{ asset('js/principal.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/paginacao.js') }}"></script>

