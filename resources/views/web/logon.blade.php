@extends('web._template', ['title' => 'Faça Logon'])


@section('content')
    <div class="logon-container">
        <section class="form">
            <img src="{{url('web/images/logo.svg')}}" alt="Be The Hero" title="Be The Hero"/>
            <form method="post" action="{{route('web.post.logon')}}">
                <h1>Faça seu Logon</h1>
                @csrf
                <input
                    name="email"
                    placeholder="Seu E-mail"
                    type="text"/>
                <input
                    name="password"
                    placeholder="Sua Senha"
                    type="password"/>
                <button class="button">Entrar</button>

                <a class="back-link" href="{{route('web.register')}}">Não tenho cadastro </a>
            </form>
        </section>
        <img src="{{url('web/images/heroes.png')}}" alt="heroes"/>
    </div>
@endsection
