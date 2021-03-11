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
              <p class="card-text">city: {{$show->city}}</p>
              <p class="card-text">Total players: 9/{{$show->players_max}}</p>
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
                  <th scope="col">Name</th>
                  <th scope="col">Country</th>
                  <th scope="col">City</th>
                  <th scope="col">Max players</th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
              </tr>
          </thead>
          <tbody>
              {{-- @foreach ($team as $item)
                  <tr>
                      <th scope="row">{{ $item->id }}</th>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->country }}</td>
                      <td>{{ $item->city }}</td>
                      <td>{{ $item->players_max }}</td>
                      <td>
                          <a class="btn btn-warning" href="/teams/{{ $item->id }}">SHOW</a>
                      </td>
                      <td>
                          <a href="teams/{{ $item->id }}/edit" class="btn btn-warning mb-2">EDIT</a>
                      <td>
                      <td>
                          <form action="/teams/{{ $item->id }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                      </td>
                  </tr>
              @endforeach --}}
          </tbody>
      </table>
    </div>
</div>

    
@endsection