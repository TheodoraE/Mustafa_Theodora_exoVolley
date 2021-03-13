<div class="container mt-5">
    <h1 style="text-decoration: underline">List of the players playing for their country: </h1>

    <table class="table table-striped table-dark">
        <thead class="bg-warning text-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Équipe</th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>
            <th scope="col"> </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($players as $player)
            {{-- @if ($team->country == $player->country_origin) --}}
                <tr>
                    <th scope="row">{{$player->id}}</th>
                    <td> {{$player->lastname}}</td>
                    <td>{{$player->firstname}}</td>
                    {{-- <td>{{$player->teams->name}}</td> --}}
                    <td>
                        <a href="/players/{{$player->id}}" class="btn btn-warning">SHOW</a>
                    </td>
                    <td>
                        <a href="/players/{{$player->id}}/edit" class="btn btn-warning mb-2">EDIT</a>
                    <td>
                    <td>
                        <form action="/players/{{$player->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            {{-- @endif --}}
          @endforeach
        </tbody>
    </table>

</div>
