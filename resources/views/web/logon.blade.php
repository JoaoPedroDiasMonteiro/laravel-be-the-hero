@extends('web._template', ['title' => 'Faça Logon'])


@section('content')
    <div class="logon-container">
        <section class="form">
            <img src="{{url('web/images/logo.svg')}}" alt="Be The Hero" title="Be The Hero"/>
            <form onSubmit={this.handleLogin}>
                <h1>Faça seu Logon</h1>
                <input
                    placeholder="Sua ID"
                    type="text"/>
                <button class="button">Entrar</button>

                <a class="back-link" href="{{route('web.register')}}">Não tenho cadastro </a>
            </form>
        </section>
        <img src="{{url('web/images/heroes.png')}}" alt="heroes"/>
    </div>
@endsection
