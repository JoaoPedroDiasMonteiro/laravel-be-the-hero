@extends('web._template', ['title' => 'Novo Incident'])

<div class="new-incident-container">
    <div class="content">
        <section>
            <img src="{{asset('web/images/logo.svg')}}" alt="Be The Hero"/>
            <h1>Cadastrar novo caso</h1>
            <p>Descreva o caso detalhadamente para encontrar um herói para resolver isso.</p>

            <a class="back-link" href="/profile">
                Voltar para home
            </a>
        </section>
        <form onSubmit={this.handleNewIncident}>
            <input
                required
                placeholder="Nome da ONG"
                type="text"/>
            <textarea
                required
                placeholder="Descrição"></textarea>
            <input
                required
                placeholder="Valor em reais" type="text"/>
            <button class="button" type="submit">Cadastrar</button>
        </form>
    </div>
</div>
