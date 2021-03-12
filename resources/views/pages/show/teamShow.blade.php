@extends('template/main')

@section('content')
<div class="container mt-5">
    {{-- card team --}}
    <div>
        <h2 style="text-decoration: underline">More informations for team {{$show->name}} : </h2>

        <div class="card mt-3">
            <div class="card-header">
                {{$show->name}}
            </div>
            <div class="card-body">
              <p class="card-text">Name: {{$show->name}}</p>
              <p class="card-text">country: {{$show->country}}</p>
              <p class="card-text">continent: {{$show->continents->continent}}</p>
              <p class="card-text">city: {{$show->city}}</p>
              <p class="card-text">Total players: {{count($teamplayers)}}/{{$show->players_max}}</p>
            </div>
          </div>

    </div>



    {{-- liste des players --}}
    <div class="mt-4">
        <h3 style="text-decoration: underline">List of Players: </h3>
        <table class="table table-striped table-dark">
          <thead class="bg-warning text-dark">
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Position</th>
                  <th scope="col"></th>
              </tr>
          </thead>
          <tbody>
            @foreach ($players as $item)
              @if ($item->team_id == $show->id)
                 <tr>
                     <th scope="row">{{ $item->id }}</th>
                     <td>{{ $item->firstname }}</td>
                     <td>{{ $item->lastname }}</td>
                     <td>{{ $item->positions->position}}</td>
                     <td><a class="btn btn-warning" href="/players/{{$item->id}}">more info</a></td>
                 </tr>
              @endif 
          @endforeach
          </tbody>
      </table>
    </div>
</div>

    
@endsection