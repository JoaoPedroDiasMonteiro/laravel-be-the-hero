@extends('web._template')


<div class="profile-container">
    <header>
        <img src="{{asset('web/images/logo.svg')}}" alt="Be The Hero" />
        <span>Bem vinda, {this.state.ongName}</span>

        <div class="actions">
            <a class="button" href="{{route('web.incident.new')}}">Cadastrar novo caso</a>
            <button onClick={this.handleLogout}>
                Sair
            </button>
        </div>

    </header>

    <h1>Casos Cadastrados:</h1>

    <ul>
        <li>
            <strong>CASO:</strong>
            <p>{incident.title}</p>

            <strong>DESCRIÇÃO:</strong>
            <p>{incident.description}</p>


            <strong>VALOR:</strong>
            <p>{Intl.NumberFormat('pt-BR', { style: 'currency', currency: 'BRL' }).format(incident.value)}</p>

            <button class="trash-button" type="button">
                Excluir
            </button>
        </li>
    </ul>
</div>
