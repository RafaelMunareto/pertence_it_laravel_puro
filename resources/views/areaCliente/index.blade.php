@extends('layout')
@section('cabecalho')
@endsection
    @section('navAdministracao')
        <div id='desktop'>
            <nav>
                <div class="nav-wrapper grey lighten-5">
                    <a href="home" class="brand-logo teal-text" id='tituloNavAdm'>Área de {{Auth::user()->name}}</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down ">
                        <li id='nav-historico'><a class='teal-text' ><i class="material-icons left teal-text"></i>HISTÓRICO</a></li>
                        <li id='nav-contratos'><a class='teal-text'><i class="material-icons left teal-text"></i>CONTRATOS</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div id='mobile'>
            <nav class="nav grey lighten-5">
                <div class="nav grey lighten-5">
                    <ul class='right'>
                        <li id='nav-historicoM'><a class='teal-text' ><i class="material-icons left teal-text"></i>HISTÓRICO</a></li>
                        <li id='nav-contratosM'><a class='teal-text'><i class="material-icons left teal-text"></i>CONTRATOS</a></li>
                    </ul>
                </div>
            </nav>
            <br>
            <a href="home" class="brand-logo teal-text" id='tituloNavAdm'>Área de {{Auth::user()->name}}</a>
        </div>

    @endsection
@section('conteudo')

    <br>
    <div class="container"  id='areaCliente-historico'>
        <br>
        <br>
        <table id='table-historico' class='table'>
            <thead class='teal-text'>
                <tr>
                    <th>Data</th>
                    <th>Histórico</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cadastro as $linha)
                <tr>
                    <td class='data'>{{date( 'd/m/Y  H:i:s' , strtotime($linha->updated_at))}}</td>
                    <td >{{$linha->historico}}</td>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
    </div>

    <div class="container" id='areaCliente-contratos'>
        <div>
            <br>
            <div id='box-contratos'>
                <div id='contrato'>
                    <a href='#'><img src='{{ asset('img/contratos.png') }}'></a>
                    <span id='spanContrato'> Busca de certidões </span>
                </div>
                <div id='contrato'>
                    <a href='#'><img src='{{ asset('img/contratos.png') }}'> </a>
                    <span id='spanContrato'> Montagem do Processo </span>
                </div>
                <div id='contrato'>
                    <a href='#'><img src='{{ asset('img/contratos.png') }}'> </a>
                    <span id='spanContrato'> Análise de viabilidade </span>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>
    </div>



@endsection
