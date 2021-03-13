@extends('template.main')

@section('content')
    <div class="container mt-5">
        <div>
            <h1>Dashboard</h1>
        </div>

        @include('partials.fullTeamRandom')
        @include('partials.playersNoTeam')
        @include('partials.playersWTeam')
        @include('partials.noFullTeamRandom')
        @include('partials.europeTeams')
        @include('partials.noEuropeTeams')
        @include('partials.playersCountry')
        @include('partials.femalePlayersRandomWTeam')
        @include('partials.malePlayersWTeam')
    </div>
@endsection