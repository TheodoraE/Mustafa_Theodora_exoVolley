@extends('template.main')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 30rem;">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        @if ($show->picture_id != Null)
                        <img src="{{asset('storage/img/'.$show->pictures->url)}}" alt="" height="150px">            
                        @else
                        <img src="{{asset('storage/img/silouhaite.jpeg')}}" alt="" height="150px">
                        @endif
                    </div>
                    <span class="card-subtitle">Numéro : {{$show->id}}</span>
                    <h2 class="card-title">Nom : {{$show->lastname}} {{$show->firstname}}</h2>
                    <h2 class="card-title">
                        Équipe : 
                        @if ($show->team_id == '')
                            sans equipe       
                        @else
                        <a href="/teams/{{$show->team_id}}">{{$show->teams->name}}</a>     
                        @endif
                    </h2>
                    <h3 class="card-title">Age : {{$show->age}}</h3>
                    <h5 class="card-subtitle mb-2">Genre : {{$show->genders->gender}}</h5>
                    <h5 class="card-subtitle mb-2">Position : {{$show->positions->position}}</h5>
                    <h5 class="card-subtitle mb-2">Pays d'origine : {{$show->country_origin}}</h5>
                    <h5 class="card-subtitle mb-2">N° téléphone : {{$show->phone}}</h5>
                    <h5 class="card-subtitle mb-2">E-mail : {{$show->email}}</h5>

                    <a href="/players" class="card-link">Retour</a>
                    {{-- <a href="#" class="card-link">Another link</a> --}}
                </div>
              </div>
        </div>
    </div>
@endsection