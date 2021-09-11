@extends('layout')
@section('cabecalho')
    Quanto Custa?
@endsection
@section('conteudo')
	<div class="cardBoxDiv" id='preco'>
		<div class="card hoverable" id='cardDireitoBoxPreco'>
			<div class="card-image">
            <img src="{{ asset('img/precoOrientacao.jpg') }}">
            </div>
            <span class="card-title red-text text-dark-1 brand-logo">Orientação</span>
			<div class="card-content">
			<p>🇮🇹 Não cobramos nada para tirar dúvidas ou informações, queremos que os nossos clientes tenham uma ótima experiência na nossa plataforma.</p>
            </div>
            <div class="card-action center teal lighten-2">
                <a href="passo"  id='precoA' class='black-text text-black' >GRATUITO</a>
            </div>
        </div>

        <div class="card hoverable" id='cardDireitoBoxPreco'>
			<div class="card-image">
            <img src="{{ asset('img/precoProcesso.jpg') }}">
            </div>
            <span class="card-title red-text text-dark-1 brand-logo">Processo de Cidadania</span>
			<div class="card-content">

			<p>🇮🇹 O processo de cidadania via tribunal de Roma pode ser realizado num grupo de até 6 pessoas e o valor é parcelado conforme o andamento do processo, uma etapa para a entrada, quando for aceito, na marcação do julgamento e após a sentença.</p>
            </div>
            <div class="card-action center teal lighten-2">
                <a href="passo"  id='precoA' class='black-text text-black' >R$ 10.000,00 p/pessoa</a>
            </div>
		</div>

        <div class="card hoverable" id='cardDireitoBoxPreco'>
			<div class="card-image">
            <img src="{{ asset('img/precoCertidao.jpg') }}">
            </div>
            <span class="card-title red-text text-dark-1 brand-logo">Busca de certidões</span>
			<div class="card-content">

            <p>🇮🇹 Só cobramos se encontrarmos, caso não econtre não há custo nenhum. Com a certidão você pode dar prosseguimento na cidadania de várias formas, é o ponto central de toda a jornada.</p>
            </div>
            <div class="card-action center teal lighten-2">
                <a href="passo" id='precoA' class='black-text text-black'>R$ 2.000,00 + Taxas de envio</a>
            </div>
		</div>

		<div class="card hoverable" id='cardDireitoBoxPreco'>
			<div class="card-image">
            <img src="{{ asset('img/precoTraducao.jpg') }}">
            </div>
            <span class="card-title red-text text-dark-1 brand-logo">Tradução</span>
			<div class="card-content">

            <p>🇮🇹 A tradução varia muito pela quantidade de páginas, mas podemos estimar esses valores. A vantagem de fazer pela Pertence é que a tradução é direto na Itália, não havendo assim a necessidade do segundo apostilamento.</p>
            </div>
            <div class="card-action center teal lighten-2">
                <a href="passo"  id='precoA' class='black-text text-black' >R$ 300,00 Nasc/Óbito R$ 400,00 Casamento</a>
            </div>
		</div>
    </div>

	<p id='asterisco'>  * Esses valores são uma estimativa, podendo alterar caso a caso. </p>

@endsection
