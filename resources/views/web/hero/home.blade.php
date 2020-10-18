@extends('web._template')

@section('content')
    <div class="container">
        <div class="header">
            <img src='{{asset('web/images/logo.svg')}}'/>
            <p class="title">
                Total de
                <br>
                <span class="description">{{$incidents->total()}} casos</span>
            </p>
        </div>

        <div style="text-align: center">
            <p class="title">Bem Vindo!</p>
            <p style="margin-bottom: 25px" class="description">Escolha um dos casos abaixo e salve o dia.</p>

            @foreach($incidents as $incident)
                <div>
                    <div class="incident">
                        <p class="incidentProperty">{{$incident->user()->first()->ong}}</p>
                        <p class="incidentValue">{{$incident->title}}</p>

                        <p class="incidentProperty">CASO:</p>
                        <p class="incidentValue">{{$incident->description}}</p>

                        <p class="incidentProperty">Valor:</p>
                        <p class="incidentValue">R$ {{str_replace('.', ',', $incident->value)}}</p>

                        <button style="max-width: 250px" class="button">
                            <a style="width: 100%; height: 100%; display: block"
                               href="{{route('web.hero.details', $incident->id)}}">Ver mais detalhes</a>
                        </button>
                    </div>
                </div>
            @endforeach

            <div class="hero-pagination">
                {{$incidents->links()}}
            </div>
        </div>

    </div>
@endsection
