@extends('layout')
@section('cabecalho')
    Login
@endsection
@section('conteudo')
<div class="container">

    <div id="login-page" class="row">
        <div class="col s12">
            <form class="login-form" method="post"  action="{{ route('login') }}">
                @csrf
                <div class="row">
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input name='email' class='@error('email') is-invalid @enderror'  id="email" type="email" class="validate" required value="{{ old('email') }}" required autocomplete="email">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label for="password">Password</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12" id='botaoLogin'>
                        <button tye="submit" class="btn waves-effect waves-light col s12 teal">Login</button>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6 m6 l6">
                        <p class="margin medium-small red-text text-darken 1"><a class='red-text text-darken-1' href="/register">Registre-se!</a></p>
                    </div>
                    <div class="input-field col s6 m6 l6">
                        <p class="margin right-align medium-small">
                            <a class="red-text text-darken-1" href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha?') }}
                            </a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
