@extends('layout')
@section('cabecalho')
    Reiniciar senha
@endsection
@section('conteudo')
<div class="container">
    <section id='sectionForm'class='container'>
        <article class="col s6 offset-s3">
            <form id='contato-form' method="POST"  action="{{ route('password.update') }}">
                @csrf

                    <input type="hidden" name="token" value="{{ $token }}">


                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                        <label for="email">Email</label>
                    </div>


                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        <label for="password">Nova Senha</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
