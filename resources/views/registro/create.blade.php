@extends('layout')
@section('cabecalho')
    Registre-se
@endsection
@section('conteudo')


    <section id='sectionForm'class='container'>


        <article class="col s6 offset-s3">
            <form id='contato-form' method="POST">
                @csrf

                    <div class='row'>
                        <div class="input-field col s12">
                            <i class="material-icons prefix">account_circle</i>
                        <input name='name' id="nome" type="text" class="validate" minlength=3 required>
                            <label for="nome">Nome</label>
                    </div>


                    <div class="input-field col s12">
                        <i class="material-icons prefix">email</i>
                        <input name='email' id="email" type="email" class="validate" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input name='password'  id="password" type="password" class="validate" minlength=6 required>
                        <label for="password">Senha</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">vpn_key</i>
                        <input name='passwordConfirma'  id="passwordConfirma" type="password" class="validate" minlength=6 required>
                        <label for="passwordConfirma">Confirma Senha</label>
                    </div>

                </div>


                <p class="center-align">
                    <button class="waves-effect waves-light btn" name='BTEnvia' type="submit"><i class="material-icons right">send</i>Registrar</button>
                </p>
            </form>
        </article>
    </section>




@endsection
