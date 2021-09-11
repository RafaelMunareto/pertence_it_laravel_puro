@extends('layout')
@section('navAdministracao')
@Auth('admin')
    <div id='desktop'>
        <nav>
            <div class="grey lighten-5 navbar-fixed">
                <a href="/admin" class="brand-logo teal-text" id='tituloNavAdm'>Administração</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down ">
                    <li><a class='teal-text' href="/cadastro"><i class="material-icons left teal-text">add</i>ADICIONAR</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <div id='mobile'>
        <nav>
            <div class="nav grey lighten-5" id='navAdminMobile'>
                <li><a class='teal-text right' href="/cadastro"><i class="material-icons left teal-text">add</i>ADICIONAR</a></li>
            </div>
        </nav>
    </div>
@endAuth
@endsection
@section('cabecalho')
@endsection
@section('conteudo')

    <div id='desktop' class='container' >

        <div class="row">
            <form method='post'>
                @csrf
                <div class="input-field col s4">
                    <input type="text" name="serach" id="serach" class="form-control" />
                    <label for="search">Pesquisar </label>
                </div>
            </form>
            <table id='table-cliente' class='table table-bordered'>
                <thead class='teal lighten-5'>
                    <tr>
                        <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer; text-align:center">ID <span id="id_icon"></span></th>
                        <th width="38%" class="sorting" data-sorting_type="asc" data-column_name="nome" style="cursor: pointer">NOME <span id="id_icon"></span></th>
                        <th width="57%" class="sorting" data-sorting_type="asc" data-column_name="fase" style="cursor: pointer">FASE <span id="id_icon"></span></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @include('administracao.adminTable')
                </tbody>
            </table>
            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
            <input type="hidden" name="hidden_column_name" id="hidden_column_name" value="id" />
            <input type="hidden" name="hidden_sort_type" id="hidden_sort_type" value="desc" />
            <br>
        </div>
    </div>

    <div id='mobile' class='container' >

        <div class="row">
            <form method='post'>
                @csrf
                <div class="input-field col s12">
                    <input type="text" name="search" id="search" class="form-control" />
                    <button id='iconesTC' type='submit' class="btn-small waves-effect waves-light btn teal"><i class="material-icons">search</i></button>
                    <label for="search">Pesquisar </label>
                </div>
            </form>
            <table id='table-cliente' class='table table-bordered'>
                <thead class='teal lighten-5'>
                    <tr>
                        <th width="5%" class="sorting" data-sorting_type="asc" data-column_name="id" style="cursor: pointer; text-align:center">ID <span id="id_icon"></span></th>
                        <th width="38%" class="sorting" data-sorting_type="asc" data-column_name="nome" style="cursor: pointer">NOME <span id="id_icon"></span></th>
                        <th width="57%" class="sorting" data-sorting_type="asc" data-column_name="fase" style="cursor: pointer">FASE <span id="id_icon"></span></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @include('administracao.adminTableM')
                </tbody>
            </table>
            <br>
        </div>
    </div>



@endsection
