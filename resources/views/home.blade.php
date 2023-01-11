@extends('layouts.app')

@section('content')
<div class="container">

    <h1 class="titleDashboard">Ciao NOME ecco i tuoi eventi</h1>

    <div class="d-flex justify-content-center">

    @foreach ($events as $event)
        <div class=" userCard">
            <div class="name">{{ $event['nome_evento'] }}</div>
            <div class="date">{{ date('d-m-Y H:i', strtotime($event['data_evento']))  }}</div>
            <button class="joinButton">JOIN</button>
        </div>
    @endforeach

    </div>
</div>
@endsection
