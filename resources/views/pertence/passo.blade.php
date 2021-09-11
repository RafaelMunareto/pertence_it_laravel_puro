@extends('layout')
@section('cabecalho')
É com imenso prazer que começamos essa jornada juntos!
@endsection
@section('conteudo')

<h6 class='brand-logo' id='brand-logoPrimeiroPasso'>Para entendermos melhor a sua a linha direta para o pedido de cidadania precisamos que nos responda algumas perguntas. </h6>
<h6 class='brand-logo' id='brand-logoPrimeiroPassoG'> A análise prévia da viabilidade é gratuí­ta!💸</h6>

<div id='desktop' style='display:none'>
    <section id='sectionFormPasso'class='container'>
		<article class="col s6 offset-s3">
            <form id='contato-formPasso' method="POST" action='/enviarPasso'>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class='row'>
                    <div class="input-field col s4">
                        <i class="material-icons prefix">account_circle</i>
                        <input name='nome' id="nome" type="text" class="validate" minlength=3 required>
                        <label for="nome">Seu nome</label>
                    </div>

                    <div class="input-field col s5">
                        <i class="material-icons prefix">person_pin</i>
                        <input name='sobrenome'  id="sobrenome" type="text" class="validate" minlength=3 required>
                        <label for="sobrenome">Seu sobrenome</label>
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
					<i class="material-icons prefix">face</i>
					<input name='descendencia'  id="descendencia" type="text" class="validate" minlength=3 required>
					<label for="descendencia"> A sua descendência é paterna ou materna?</label>
                </div>

                <div class="input-field">
					<i class="material-icons prefix">face</i>
					<input name='regiao'  id="regiao" type="text" class="validate" minlength=3 required>
					<label for="regiao">Sabe de qual região veio o seu antepassado? Região, cidade, comune etc.</label>
                </div>

                <div class="input-field">
					<i class="material-icons prefix">face</i>
					<input name='antenato'  id="antenato" type="text" class="validate" minlength=3 required>
					<label for="antenato">Sabe o nome completo e ano de nascimento do antepassado? </label>
                </div>

                <div class="input-field">
					<i class="material-icons prefix">face</i>
					<input name='certidao'  id="certidao" type="text" class="validate" minlength=3 required>
					<label for="certidao">Possui algum documento como, certidões, lista de bordo do navio, hospedagem etc?</label>
                </div>

				<p class="center-align">
					<button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>enviar</button>
				</p>
			</form>
		</article>
    </section>
</div>

<div id='mobile'>

    <h6 class='brand-logo' id='brand-logoPrimeiroPasso'> PS: Essas perguntas muitas vezes não são fáceis de responder por isso recomendamos que procure seus nonos👴👵. As vezes as maiores informações estão naquelas histórias do domingo a tarde.😉</h6>

    <section id='sectionFormPasso'class='container'>
		<article class="col s6 offset-s3">
            <form id='contato-formPasso' method="POST" action='/enviarPasso'>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input name='nome' id="nome" type="text" class="validate" minlength=3 required>
                    <label for="nome">Seu nome</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">person_pin</i>
                    <input name='sobrenome'  id="sobrenome" type="text" class="validate" minlength=3 required>
                    <label for="sobrenome">Seu sobrenome</label>
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
					<i class="material-icons prefix">face</i>
					<input name='descendencia'  id="descendencia" type="text" class="validate" minlength=3 required>
					<label for="descendencia"> A sua descendência é paterna ou materna?</label>
                </div>

                <div class="input-field">
					<i class="material-icons prefix">face</i>
					<input name='regiao'  id="regiao" type="text" class="validate" minlength=3 required>
					<label for="regiao">Sabe de qual região veio o seu antepassado? Região, cidade, comune etc.</label>
                </div>

                <div class="input-field">
					<i class="material-icons prefix">face</i>
					<input name='antenato'  id="antenato" type="text" class="validate" minlength=3 required>
					<label for="antenato">Sabe o nome completo e ano de nascimento do antepassado? </label>
                </div>

                <div class="input-field">
					<i class="material-icons prefix">face</i>
					<input name='certidao'  id="certidao" type="text" class="validate" minlength=3 required>
					<label for="certidao">Possui algum documento como, certidões, lista de bordo do navio, hospedagem etc?</label>
                </div>

				<p class="center-align">
					<button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>enviar</button>
				</p>
			</form>
		</article>
    </section>
</div>
@endsection
