

<nav style='background-color:#ea454b; height:10rem; display:flex; align-items:center'>
    <h1 style='color:white; font-weight:800; margin-left:2rem'> Primeiro Passo - Pertence - {{$dados->nome}} {{$dados->sobrenome}}</h1>
</nav>
<br>
<br>
<table style='width:100%'>
    <thead>
        <tr>
            <th style='text-align:center; font-weight:bold'>Nome</th>
            <th style='text-align:center; font-weight:bold'>Celular</th>
            <th style='text-align:center; font-weight:bold'>e-mail</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style='text-align:center'>{{$dados->nome}} {{$dados->sobrenome}}</p>
            <td style='text-align:center'>{{$dados->telefone}}</p>
            <td style='text-align:center'>{{$dados->email}}</p>
        </tr>
    </tbody>
</table>
<br>
    <h2 style='text-align:left'>PERGUNTAS INICIAIS</h2>
<br>
<table style='width:100%'>
        <tr>
            <th style='text-align:left; font-weight:bold'>
                A sua descendência é paterna ou materna?
            </th>
        </tr>
        <tr>
            <td style='text-align:left'>{{$dados->descendencia}}</p>
        </tr>
        <tr>
            <th style='text-align:left; font-weight:bold'>
                Sabe de qual região veio o seu antepassado? Região, cidade, comune etc.
            </th>
        </tr>
        <tr>
            <td style='text-align:left'>{{$dados->regiao}}</p>
        </tr>
        <tr>
            <th style='text-align:left; font-weight:bold'>
                Sabe o nome completo e ano de nascimento do antepassado?
            </th>
        </tr>
        <tr>
            <td style='text-align:left'>{{$dados->antenato}}</p>
        </tr>
        <tr>
            <th style='text-align:left; font-weight:bold'>
                Possui algum documento como, certidões, lista de bordo do navio, hospedagem etc?
            </th>
        </tr>
        <tr>
            <td style='text-align:left'>{{$dados->certidao}}</p>
        </tr>








    </tbody>
</table>
<br>
<br>
<footer style='background-color:#009688 ;height:10rem'>
    <div style="display:flex; flex-direction:column; color:white">
        <h1 style='color:white; text-align:center'>&nbsp;Pertence</h1>
        <p style='color:white; text-align:center'>&nbsp;Deixe-nos ajudar a construir esse sonho.</p>
    </div>
</footer>

