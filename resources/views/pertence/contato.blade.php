@extends('layout')
@section('cabecalho')
    Contato
@endsection
@section('conteudo')

<div id='desktop' style='display:none'>

	<section id='sectionForm'class='container'>
        <br>
        <article class="col s6 offset-s3">
            <form id='contato-form' method="POST" action='/enviarContato'>

                <input id='token' type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class='row'>

                    <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                        <input name='nome' id="nome" type="text" class="validate" minlength=3 required>
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">person_pin</i>
                        <input name='sobrenome'  id="sobrenome" type="text" class="validate" minlength=3 required>
                        <label for="sobrenome">Sobrenome</label>
                    </div>

                    <div class="input-field col s3">
                        <i class="material-icons prefix">phone</i>
                        <label for="telefone">Celular</label>
                        <input name='telefone' id="telefone" type="tel" class="validate" minlength=10 required>
                    </div>
                </div>

				<div class="input-field">
					<i class="material-icons prefix">email</i>
					<input name='email' id="email" type="email" class="validate" required>
					<label for="email">Email</label>
				</div>

				<div class="input-field">
					<i class="material-icons prefix">mode_edit</i>
					<textarea name='mensagem' id="mensagem" class="materialize-textarea" minlength=3 required></textarea>
					<label for="mensagem">Mensagem</label>
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
        <br>
        <article class="col s6 offset-s3">
            <form id='contato-form' method="POST" action='/enviarContato'>

                <input id='token' type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="input-field col s12">
                        <i class="material-icons prefix">account_circle</i>
                        <input name='nome' id="nome" type="text" class="validate" minlength=3 required>
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_pin</i>
                        <input name='sobrenome'  id="sobrenome" type="text" class="validate" minlength=3 required>
                        <label for="sobrenome">Sobrenome</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">phone</i>
                        <label for="telefone">Celular</label>
                        <input name='telefone' id="telefone" type="tel" class="validate" minlength=10 required>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input name='email' id="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">mode_edit</i>
                        <textarea name='mensagem' id="mensagem" class="materialize-textarea" minlength=3 required></textarea>
                        <label for="mensagem">Mensagem</label>
                    </div>
                    <p class="center-align">
                        <button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>enviar</button>
                    </p>
			    </form>
		</article>
    </section>

</div>
@endsection
