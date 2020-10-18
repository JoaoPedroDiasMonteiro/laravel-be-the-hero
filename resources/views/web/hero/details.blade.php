@extends('web._template')

@section('content')
    <div>
        <div class="container">
            <div class="header">
                <img src={{asset('web/images/logo.svg')}} />
            </div>

            <div style="margin-top: 25px;" class="incident">
                <p class="incidentProperty">ONG:</p>
                <p class="incidentValue">{{$ong->ong}} de {{$ong->city}}/{{$ong->uf}} </p>

                <p class="incidentProperty">CASO:</p>
                <p class="incidentValue">{{$incident->title}}</p>

                <p class="incidentProperty">Descrição:</p>
                <p class="incidentValue">{{$incident->description}}</p>

                <p class="incidentProperty">Valor:</p>
                <p class="incidentValue">R$ {{str_replace('.', ',', $incident->value)}}</p>
            </div>

            <div class="contactBox">
                <p class="heroTitle">Salve o dia!</p>
                <p class="heroTitle">Seja o Herói desse caso.</p>

                <p class="heroDescription">Entre em contato:</p>
                <div class="actions">
                    <div class="action">
                        <a class="actionText" target="_blank"
                           href="https://api.whatsapp.com/send?phone={{$ong->whatsapp}}&text=Olá, vim pelo caso {{$incident->title}}">
                            WhatsApp</a>
                    </div>

                    <div class="action">
                        <a class="actionText" target="_blank" href="{{"mailto:" . $ong->email}}">E-mail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
