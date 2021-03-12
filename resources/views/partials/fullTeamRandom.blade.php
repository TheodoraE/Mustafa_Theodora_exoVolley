<div class="container mt-5">
    <h1 style="text-decoration: underline">List of 2 random full teams: </h1>

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
            @foreach ($team as $item)
                @if ($item->id <3)
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
                @endif
            @endforeach
        </tbody>
    </table>

</div>
