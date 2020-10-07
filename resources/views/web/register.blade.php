@extends('web._template')


@section('content')

    <div class="register-container">
        <div class="content">
            <section>
                <img src="{{asset('web/images/logo.svg')}}" alt="Be The Hero"/>
                <h1>Cadastro</h1>
                <p>Faça seu cadastro, entre na plataforma e ajude pessoas a encontrarem os casos da sua ONG.</p>

                <a class="back-link" href="/">
                    Não tenho cadastro
                </a>
            </section>

            <form onSubmit={this.handleRegister}>
                <input
                    required
                    placeholder="Nome da ONG"
                    type="text"/>
                <input
                    required
                    placeholder="E-mail"
                    type="email"/>
                <input
                    required
                    placeholder="WhatsApp"
                    type="text"/>
                <div class="input-group">
                    <input
                        required
                        placeholder="Cidade"
                        type="text"
                        style="width: calc(100% - 80px)"/>
                    <input
                        required
                        placeholder="UF"
                        type="text"
                        style="width: 80px"/>
                </div>
                <button class="button" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

@endsection
