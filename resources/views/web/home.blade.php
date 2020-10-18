@extends('web._template')

@section('content')
    <div class="logon-container">
        <section class="form">
            <img src="{{url('web/images/logo.svg')}}" alt="Be The Hero" title="Be The Hero"/>
            <div style="padding-top: 25px">
                <button id="help" class="button">Quero Ajudar!</button>
                <button id="ong" class="button">Sou uma ONG</button>
            </div>
        </section>
        <img src="{{url('web/images/heroes.png')}}" alt="heroes"/>
    </div>


    <script>
        const ong = document.getElementById('ong');
        ong.addEventListener('click', function () {
            window.location.href = '{{route('web.logon')}}'
        });

        const help = document.getElementById('help');
        help.addEventListener('click', function () {
            window.location.href = '{{route('web.hero.home')}}'
        })
    </script>
@endsection



