@extends('layout')
@section('cabecalho')
    Recuperar senha
@endsection
@section('conteudo')
<div class="container">

    <article class="col s6 offset-s3">
        <form id='contato-form' method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class='row'>

                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="historico">Email</label>
                </div>

            </div>

            <p class="center-align">
                <button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>ENVIAR SENHA</button>
            </p>
        </form>
    </article>
</div>
@endsection
