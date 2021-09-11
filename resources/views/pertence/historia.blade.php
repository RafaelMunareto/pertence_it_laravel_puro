@extends('layout')
@section('cabecalho')
    Nossa História
@endsection
@section('conteudo')

    <div class='historia'>
        <div class='historia-texto'>
            <p class="grey-text text-darken-3 lighten-3">Há exatamente 1 ano atrás tive o mesmo sentimento que você deve estar sentindo quando acessou esse site, era um misto de curiosidade, de vontade e de desconhecimento.</p>
            <p class="grey-text text-darken-3 lighten-3">Confesso que realmente era um desafio, entender todo essa burocracia, achar caminhos e no meio disso tudo muitos acabam desistindo, é compreensível já que temos tanto por fazer e esse direito acaba ficando em segundo plano.</p>
            <p class="grey-text text-darken-3 lighten-3">Há momentos que sentimos que estamos fazendo o que deve ser feito, e foi assim quando comecei a procurar as minhas origens na busca desse direito, encontrando as pessoas certas, documentos, aprendendo e assim consegui conquistar o meu objetivo, por isso agradeço a todos que me ajudaram e me fizeram aprender.</p>
            <p class="grey-text text-darken-3 lighten-3">A partir daÃ­ muitos me perguntaram como em 1 ano consegui montar um grupo, iniciar um processo e conquistar o direito de ser cidadão italiano, nessa hora sempre me vem a frase que um amigo que diz mais ou menos assim: "Você não precisa de um papel para ser italiano, você já é!". E realmente não precisamos, mas é um direito e também amplia as nossas possibilidades.</p>
            <p class="grey-text text-darken-3 lighten-3">Nosso grande objetivo é orientá-lo e conduzi-lo nessa jornada, para que você não desista como tantos outros, para que você não tenha que ficar aguardando 15 anos numa fila, esse é o nosso objetivo! </p>
            <h4 id='lema' class="brand-logo" id='brand-logoNotHover'>Ser o elo entre a sua vontade e a sua conquista</h4>
            <p class="grey-text text-darken-3 lighten-3"> Outro objetivo da Pertence, é ajudá-lo a descobrir as suas origens. Há duas imagens nessa página, fazem parte de alguns documentos que encontrei na minha pesquisa, uma delas é a lista de bordo do navio que meus antepassados vieram, outra a lista da hospedagem que ficaram, é tão gratificante conhecer essa história de luta, trabalho e sonhos que faz com que sejamos mais fortes na busca dos nossos objetivos.</p>
        </div>
        <div class='historia-imagem'><img class='historia-imagemIn' src='{{ asset('img/bordo.png') }}'></div>
    </div>

@endsection
