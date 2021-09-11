@extends('layout')
@section('cabecalho')
    Registrar
@endsection
@section('conteudo')
<div class="container">


    <section id='sectionForm'class='container'>
        <article class="col s6 offset-s3">
            <form id='contato-form' method="POST" action="{{ route('register') }}">
                @csrf

                    <div class='row'>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input name='name' class='@error('name') is-invalid @enderror' id="nome" type="text" value="{{ old('name') }}" required autocomplete="name" class="validate" minlength=3 required>
                            <label for="nome">Nome</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                            <input name='sobrenome' class='@error('sobrenome') is-invalid @enderror' id="sobrenome" type="text" value="{{ old('sobrenome') }}" required autocomplete="name" class="validate" minlength=3 required>
                            <label for="nome">Sobrenome</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">phone</i>
                            <label for="telefone">Celular</label>
                            <input name='telefone' id="telefoneCadastro" type="tel" class="validate" minlength=10 required>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">email</i>
                            <input name='email' class='@error('email') is-invalid @enderror'  id="email" type="email" class="validate" required value="{{ old('email') }}" required autocomplete="email">
                            <label for="email">Email</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input id="password" type="password" class="validate" minlength=6 required @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <label for="password">Senha</label>
                        </div>

                        <div class="input-field col s12">
                            <i class="material-icons prefix">vpn_key</i>
                            <input   id="passwordConfirma" type="password" class="validate" minlength=6 required name="password_confirmation" required autocomplete="new-password">
                            <label for="passwordConfirma">Confirma Senha</label>
                        </div>

                </div>


                <p class="center-align">
                    <button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>Registrar</button>
                </p>
            </form>
        </article>
    </section>
</div>



@endsection
