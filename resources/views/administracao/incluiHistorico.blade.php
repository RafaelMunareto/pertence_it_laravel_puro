
@extends('layout')
@section('cabecalho')
@endsection
@section('navAdministracao')
    @Auth('admin')
        <div id='desktop'>
            <nav>
                <div class="nav-wrapper grey lighten-5">
                    <a href="#" class="brand-logo teal-text" id='tituloNavAdm'>Inclui Histórico {{$cadastro->nome}} {{ $cadastro->sobrenome}}</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down ">
                    <li><a class='teal-text' href="/historico/{{$cadastro->id}}"><i class="material-icons left teal-text">arrow_back</i>VOLTAR</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div id='mobile'>
            <nav>
                <div class="nav grey lighten-5" id='navAdminMobile'>
                    <li><a class='teal-text right' href="/admin"><i class="material-icons left teal-text">arrow_back</i>VOLTAR</a></li>
                </div>
            </nav>
        </div>

    @endAuth
@endsection
@section('conteudo')

    <div id='desktop'>
        <section id='sectionForm'class='container'>
            <article class="col s6 offset-s3">
                <form id='contato-form' method="POST" >
                    @csrf
                    <div class='row'>
                        <input name='usuario_id' type="number" style='display:none' value='{{$id}}'>
                        <input name='nome' style='display:none' value='{{$cadastro->nome}}'>
                        <input name='sobrenome' style='display:none' value='{{$cadastro->sobrenome}}'>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">mode_edit</i>
                            <textarea name='historico' id="historico" class="materialize-textarea" minlength=3 required></textarea>
                            <label for="historico">Histórico</label>
                        </div>
                    </div>
                    <p class="center-align">
                        <button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>enviar</button>
                    </p>
                </form>
            </article>
        </section>
    </div>

    <div id='mobile'>
            <section id='sectionForm'class='container'>
                <p class='brand-logo center' id='brand-propriedades'>Inclui histórico de</p>
                <p class='brand-logo center' id='brand-propriedades'> {{$cadastro->nome}} {{ $cadastro->sobrenome}}</p>
                <article class="col s6 offset-s3">
                    <form id='contato-form' method="POST" >
                        @csrf
                        <div class='row'>
                            <input name='usuario_id' type="number" style='display:none' value='{{$id}}'>
                            <input name='nome' style='display:none' value='{{$cadastro->nome}}'>
                            <input name='sobrenome' style='display:none' value='{{$cadastro->sobrenome}}'>
                            <div class="input-field col s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea name='historico' id="historico" class="materialize-textarea" minlength=3 required></textarea>
                                <label for="historico">Histórico</label>
                            </div>
                        </div>
                        <p class="center-align">
                            <button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>enviar</button>
                        </p>
                    </form>
                </article>
            </section>
        </div>
    </div>
@endsection
