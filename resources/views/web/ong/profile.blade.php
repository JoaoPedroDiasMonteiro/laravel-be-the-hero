@extends('web._template')


<div class="profile-container">
    <header>
        <img src="{{asset('web/images/logo.svg')}}" alt="Be The Hero"/>
        <span>Bem vinda, {{$user->ong}}</span>

        <div class="actions">
            <a class="button" href="{{route('web.incident.new')}}">Cadastrar novo caso</a>
            <button>
                <a style="text-decoration: unset; width: 100%; height: 100%; display: block; line-height: 3.3; color: black"
                   href="{{route('web.logout')}}">Sair</a>
            </button>
        </div>

    </header>

    <h1>Casos Cadastrados:</h1>

    @if(!empty($incidents))
        @foreach($incidents as $incident)
            <ul style="margin-top: 10px">
                <li>
                    <strong>CASO:</strong>
                    <p>{{$incident->title}}</p>

                    <strong>DESCRIÇÃO:</strong>
                    <p>{{$incident->description}}</p>


                    <strong>VALOR:</strong>
                    <p>R$ {{str_replace('.', ',', $incident->value)}}</p>

                    <form method="post" action="{{route('web.incident.destroy', $incident->id)}}">
                        @csrf
                        @method('delete')
                        <button class="trash-button" type="submit">
                            Excluir
                        </button>
                    </form>

                </li>
            </ul>
        @endforeach
    @endif
</div>
