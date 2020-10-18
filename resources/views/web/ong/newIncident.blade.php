@extends('web._template', ['title' => 'Novo Incident'])

<div class="new-incident-container">
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
            <h1>Cadastrar novo caso</h1>
            <p>Descreva o caso detalhadamente para encontrar um herói para resolver isso.</p>

            <a class="back-link" href="{{route('web.profile')}}">
                Voltar para home
            </a>
        </section>
        <form method="post" action="{{route('web.incident.store')}}">
            @csrf
            <input
                name="title"
                required
                placeholder="Título"
                type="text"/>
            <textarea
                name="description"
                required
                placeholder="Descrição"></textarea>
            <input
                name="value"
                required
                placeholder="Valor em reais" type="text"/>
            <button class="button" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
