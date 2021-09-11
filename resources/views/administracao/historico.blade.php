@extends('layout')
@section('cabecalho')
@endsection
@section('navAdministracao')
@Auth('admin')
        <div id='desktop'>
            <nav>
                <div class="nav-wrapper grey lighten-5">
                    <a href="#" class="brand-logo teal-text" id='tituloNavAdm'>Histórico {{$usuario->nome}} {{ $usuario->sobrenome}}</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down ">
                        <li><a class='teal-text' href="/incluiHistorico/{{$usuario->id}}"><i class="material-icons left teal-text">add</i>ADICIONAR HISTÓRICO</a></li>
                        <li><a class='teal-text' href="/admin"><i class="material-icons left teal-text">arrow_back</i>VOLTAR</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div id='mobile'>
            <nav class="nav grey lighten-5">
                <div class="nav grey lighten-5">
                    <ul class='right'>
                        <li><a class='teal-text right' href="/incluiHistorico/{{$usuario->id}}"><i class="material-icons left teal-text">add</i>ADICIONAR HISTÓRICO</a></li>
                        <li><a class='teal-text right' href="/admin"><i class="material-icons left teal-text">arrow_back</i>VOLTAR</a></li>
                    </ul>
                </div>
            </nav>
        </div>


    @endAuth
@endsection
@section('conteudo')

    <div id='desktop'>
        <div id='base-cliente' class='container-fluid'>
            <table id='table-historico' class='striped'>
                <thead class='teal lighten-5'>
                    <tr>
                        <th>Data</th>
                        <th>Histórico</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cadastro as $linha)
                        <tr>
                            <td class='center' style='width:20%'>{{date( 'd/m/Y  H:i:s' , strtotime($linha->updated_at))}}</td>
                            <td  style='width:70%'>
                                <form method="post" action="/alteraHistorico/{{$linha->id}}">
                                    @csrf
                                    <input name='historico' value='{{$linha->historico}}'>
                            </td>
                            <td classe='center' style='width:5%'>
                                    <button class="btn-floating btn-small waves-effect waves-light btn teal">
                                        <i class="material-icons">done</i>
                                    </button>
                                </form>
                            </td>
                            <td class='center' style='width:5%'>
                                <form method="post" action="/removerHistorico/{{$linha->id}}"
                                    onsubmit=" return confirm('Tem certeza que deseja excluir este histórico de {{$linha->updated_at}} da base?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-floating btn-small waves-effect waves-light btn red darken-1"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
        </div>
    </div>
    <div id='mobile'>
        <div id='base-cliente' class='container-fluid'>
            <p class='brand-logo center' id='brand-propriedades'>Histórico de</p>
            <p class='brand-logo center' id='brand-propriedades'> {{$usuario->nome}} {{ $usuario->sobrenome}}</p>
            <table id='table-historico' class='striped'>
                <thead class='teal lighten-5'>
                    <tr>
                        <th>Data</th>
                        <th>Histórico</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cadastro as $linha)
                        <tr>
                            <td class='center' style='width:20%'>{{date( 'd/m/Y H:i:s'  , strtotime($linha->updated_at))}}</td>
                            <td  style='width:70%'>
                                <form method="post" action="/alteraHistorico/{{$linha->id}}">
                                    @csrf
                                    <input name='historico' value='{{$linha->historico}}'>
                            </td>
                            <td classe='center' style='width:5%'>
                                    <button class="btn-floating btn-small waves-effect waves-light btn teal">
                                        <i class="material-icons">done</i>
                                    </button>
                                </form>
                            </td>
                            <td class='center' style='width:5%'>
                                <form method="post" action="/removerHistorico/{{$linha->id}}"
                                    onsubmit=" return confirm('Tem certeza que deseja excluir este histórico de {{date( 'd/m/Y' , strtotime($linha->updated_at))}} da base?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn-floating btn-small waves-effect waves-light btn red darken-1"><i class="material-icons">delete</i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
        </div>
    </div>
@endsection
