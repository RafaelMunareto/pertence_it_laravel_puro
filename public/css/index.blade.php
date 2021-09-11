@extends('layout')
@section('cabecalho')
         <h4 class='center brand-logo'>Área do {{Auth::user()->name}}</h4>
@endsection
@section('conteudo')


<div id='desktop'>
    <div class='container-fluid'>
        <br>
        <div id='rowAreaCliente' class="row">

            <div class='red lighten-5 bandeira' id='AreaClienteVerde'>
                <h4 class='brand-logo red-text areaClienteTitulo'>Histórico</h4>
                <br>
                <table id='table-historico' class='table'>
                    <thead class='red lighten-5 red-text'>
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
            </div>

            <div class='bandeira center'  id='areaClienteBraco'>
                <img src='{{asset('img/logoBandeira.png')}}'>
            </div>

            <div class='teal lighten-5 bandeira' id='areaClienteVermelho'>
                <h4 class='brand-logo teal-text areaClienteTitulo'>Contratos</h4>
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
            </div>
        </div>
    </div>
</div>

<div id='mobile'>
    <div class='container-fluid'>
        <br>
        <div id='row'>

            <div class='red lighten-5 bandeira col12' id='AreaClienteVerde'>
                <h4 class='brand-logo red-text areaClienteTitulo'>Histórico</h4>
                <br>
                <table id='table-historico' class='table'>
                    <thead class='red lighten-5 red-text'>
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
            </div>

            <div class='bandeira center col12'  id='areaClienteBraco'>
                <img src='{{asset('img/logoBandeira.png')}}'>
            </div>

            <div class='teal lighten-5 bandeira col12' id='areaClienteVermelho'>
                <h4 class='brand-logo teal-text areaClienteTitulo'>Contratos</h4>
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
            </div>

        </div>
    </div>
</div>

@endsection
