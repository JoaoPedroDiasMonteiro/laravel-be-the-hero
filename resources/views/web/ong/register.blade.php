@extends('web._template')


@section('content')

    <div class="register-container">
        <div class="content">

            @if ($errors->any())
                <div class="error_msg">
                    @foreach ($errors->all() as $error)
                        <span class="error_content">
                            {{ $error }}
                            </span>
                    @endforeach
                </div>
            @endif

            <section>
                <img src="{{asset('web/images/logo.svg')}}" alt="Be The Hero"/>
                <h1>Cadastro</h1>
                <p>Faça seu cadastro, entre na plataforma e ajude pessoas a encontrarem os casos da sua ONG.</p>

                <a class="back-link" href="{{route('web.logon')}}">
                    Já tenho um cadastro
                </a>
            </section>

            <form method="post" action="{{route('web.post.register')}}">
                @csrf
                <input
                    name="ong"
                    required
                    placeholder="Nome da ONG"
                    type="text"/>
                <input
                    name="email"
                    required
                    placeholder="E-mail"
                    type="email"/>
                <input
                    name="password"
                    required
                    placeholder="Senha"
                    type="password"/>
                <input
                    name="whatsapp"
                    required
                    placeholder="WhatsApp"
                    type="text"/>
                <div class="input-group">
                    <input
                        name="city"
                        required
                        placeholder="Cidade"
                        type="text"
                        style="width: calc(100% - 80px)"/>
                    <input
                        name="uf"
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
