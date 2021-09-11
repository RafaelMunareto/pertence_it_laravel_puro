@extends('layout')
@section('cabecalho')
    Quem possuí direito?
@endsection
@section('conteudo')
	<div class="cardBoxDiv teal">
		<div class="card" id='cardDireitoBox'>
			<div class="card-image">
			<img src="{{ asset('img/todos.jpg') }}">
			</div>
			<div class="card-content">
			<p>🇮🇹 Todos que possuem um descendente Italiano que tenha imigrado para o Brasil! Porém, existem algumas limitações.</p>
			</div>
		</div>
	</div>
	<h4 class='brand-logo' id='brand-logoNotHover'> Limitações </h4>
	<div class="cardBoxDiv red darken-1">

		<div class="card" id='cardDireitoBox'>
			<div class="card-image">
			<img src="{{ asset('img/mae.jpg') }}">
			</div>
			<div class="card-content">
			<p>🇮🇹 Onde há uma mulher na linha de transmissão pode ser solicitado a cidadania só se for para filhos nascidos após 01/01/1948. Podendo tentar somente com processo judicial.</p>
			</div>
		</div>

		<div class="card" id='cardDireitoBox'>
			<div class="card-image">
			<img src="{{ asset('img/regiao.jpg') }}">
			</div>
			<div class="card-content">
			<p>🇮🇹 Não é permitido para os imigrantes da região de Trento desde 19/12/2010, pois antigamente pertencia ao Império Austro-húngaro.</p>
			</div>
		</div>

		<div class="card" id='cardDireitoBox'>
			<div class="card-image">
			<img src="{{ asset('img/brasil.jpg') }}">
			</div>
			<div class="card-content">
			<p>🇮🇹 Não é possível nos casos onde o imigrande tenha se naturalizado Brasileiro.</p>
			</div>
		</div>

		<div class="card" id='cardDireitoBox'>
			<div class="card-image">
			<img src="{{ asset('img/erros.jpg') }}">
			</div>
			<div class="card-content">
			<p>🇮🇹 Também quando há erros graves graves de grafia nas certidões.</p>
			</div>
		</div>

	</div>

	<p id='asterisco'>  * Essas são as principais limitações, porém é uma análise caso a caso. </p>

@endsection
