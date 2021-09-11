@extends('layout')
@section('cabecalho')
@endsection
@section('navAdministracao')
    @Auth('admin')

        <div id='desktop'>
            <nav>
                <div class="nav-wrapper grey lighten-5">
                    <a href="#" class="brand-logo teal-text" id='tituloNavAdm'>Cadastro de {{$usuario->nome}} {{ $usuario->sobrenome}}</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down ">
                    <li><a class='teal-text' href="/admin"><i class="material-icons left teal-text">arrow_back</i>VOLTAR</a></li>
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

<div id='mobile'>
	<section id='sectionForm'class='container'>
        <p class='brand-logo center' id='brand-propriedades'>Alterar cadastro de</p>
        <p class='brand-logo center' id='brand-propriedades'> {{$usuario->nome}} {{ $usuario->sobrenome}}</p>
        <article class="col s6 offset-s3">
            <form id='contato-form' method="POST">
                @csrf
                <div class='row'>
                    <div id="fase"class="input-field col s12">
                        <select name='fase' class="browser-default"  required >
                          <option value="" disabled selected>Fase</option>
                          <option value="Em negociação">Em negociação</option>
                          <option value="Busca de Certidão">Busca de Certidão</option>
                          <option value="Organização do processo">Organização do processo</option>
                          <option value="Análise Jurídica do Adv.">Análise Jurídica do Adv.</option>
                          <option value="Entrada do processo">Entrada do processo</option>
                          <option value="Agendamento do processo.">Agendamento do processo.</option>
                          <option value="Sentença">Sentença</option>
                          <option value="Entrega de certidão">Entrega de certidão</option>
                        </select>
                    </div>
                </div>
                <div class='row'>
                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                    <input name='nome' id="icon_prefix" type="text" class="validate" value='{{$usuario->nome}}' minlength=3 required>
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_pin</i>
                        <input name='sobrenome'  id="icon_prefix" type="text" value='{{$usuario->sobrenome}}' class="validate" minlength=3 required>
                        <label for="sobrenome">Sobrenome</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <label for="telefone">Celular</label>
                        <input name='telefone' class='telefone' id="icon_prefix" type="tel" value='{{$usuario->telefone}}' class="validate" minlength=10 required>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input name='email' id="icon_prefix" type="email" value='{{$usuario->email}}' class="validate" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea name='obs' id="icon_prefix" class="materialize-textarea" minlength=3 required>{{$usuario->obs}}</textarea>
                        <label for="obs">OBS</label>
                    </div>

                </div>

				<p class="center-align">
					<button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>enviar</button>
				</p>
			</form>
		</article>
    </section>
</div>

<div id='desktop'>
	<section id='sectionForm'class='container'>
        <br>
        <article class="col s6 offset-s3">

            <form id='contato-form' method="POST">
                @csrf
                <div class='row'>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">mode_edit</i>
                        <select name='fase'class='wrapper'  id="selectFase"  required >
                            <option value="" disabled selected>Fase</option>
                            <option value="Em negociação">Em negociação</option>
                            <option value="Busca de Certidão">Busca de Certidão</option>
                            <option value="Organização do processo">Organização do processo</option>
                            <option value="Análise Jurídica do Adv.">Análise Jurídica do Adv.</option>
                            <option value="Entrada do processo">Entrada do processo</option>
                            <option value="Agendamento do processo.">Agendamento do processo.</option>
                            <option value="Sentença">Sentença</option>
                            <option value="Entrega de certidão">Entrega de certidão</option>
                        </select>
                        <label>Fase</label>
                    </div>
                </div>
                <div class='row'>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                    <input name='nome' id="icon_prefix" type="text" class="validate" value='{{$usuario->nome}}' minlength=3 required>
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">person_pin</i>
                        <input name='sobrenome'  id="icon_prefix" type="text" value='{{$usuario->sobrenome}}' class="validate" minlength=3 required>
                        <label for="sobrenome">Sobrenome</label>
                    </div>

                    <div class="input-field col s3">
                        <i class="material-icons prefix">phone</i>
                        <label for="telefone">Celular</label>
                        <input name='telefone' class='telefone'  id="icon_prefix" type="tel" value='{{$usuario->telefone}}' class="validate" minlength=10 required>
                    </div>
                </div>
                <div class='row'>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input name='email' id="icon_prefix" type="email" value='{{$usuario->email}}' class="validate" required>
                        <label for="email">Email</label>
                    </div>

                </div>

                <div class='row'>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea name='obs' id="icon_prefix" class="materialize-textarea" minlength=3 required>{{$usuario->obs}}</textarea>
                        <label for="obs">OBS</label>
                    </div>

                </div>

				<p class="center-align">
					<button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>enviar</button>
				</p>
			</form>
		</article>
    </section>
</div>


@endsection
