@extends('layout')
@section('cabecalho')
    Login Administrador
@endsection
@section('conteudo')

<div class="container">
    <div id="login-page" class="row">
        <div class="col s12">
            <form class="login-form" method="post">
                @csrf
                <div class="row">
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input name="email" class="validate" required id="email" type="email">
                        <label for="email" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input name="password" id="password" required min="6" type="password">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" id='botaoLogin'>
                        <button tye="submit" class="btn waves-effect waves-light col s12 red darken-1">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
