

    @foreach($cadastro as $linha)
        <tr>
            <td class='center'>{{$linha->id}}</td>
            <td>{{$linha->nome}} {{$linha->sobrenome}}</td>
            <td class='fase' >{{$linha->fase}}</td>
            <td><a href='/clientePropriedades/{{$linha->id}}' data-target="modal1" class="btn-floating btn-small modal-trigger waves-light btn amber" title='Propriedades'><i class="material-icons">search</i></a></td>
            <td><a href='/historico/{{$linha->id}}' class="btn-floating btn-small waves-effect waves-light btn grey" title='Histórico'><i class="material-icons">history</i></a></td>
            <td><a class="btn-floating btn-small waves-effect waves-light btn teal" href='/alteraCadastro/{{$linha->id}}' onclick="toggleInput({{ $linha->id }})"><i class="material-icons">create</i></a></td>
            <td>
                <form method="post" action="/remover/{{$linha->id}}"
                    onsubmit=" return confirm('Tem certeza que deseja excluir o cliente {{addslashes($linha->nome)}} {{addslashes($linha->sobrenome)}} da base?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn-floating btn-small waves-effect waves-light btn red darken-1 delete"><i class="material-icons">delete</i></button>
                </form>
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="3" align="center">
         {!! $cadastro->links() !!}
        </td>
    </tr>


